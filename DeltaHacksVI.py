from __future__ import absolute_import, division, print_function, unicode_literals

import pymysql
import csv
import sys
import pathlib

import numpy as np
import pandas as pd

import tensorflow as tf

from tensorflow import keras
from tensorflow.keras import layers

import tensorflow_docs as tfdocs
import tensorflow_docs.plots
import tensorflow_docs.modeling

db_opts = {
    'user': 'babysafe',
    'password': 'FireFire',
    'host': '165.227.33.15',
    'database': 'babysafe'
}
db = pymysql.connect(**db_opts)
cur = db.cursor()
sql = 'SELECT * from data'
csv_file_path = 'C:/Users/ocvir/Desktop/DeltaHacksVI.csv'

try:
    cur.execute(sql)
    rows = cur.fetchall()
finally:
    db.close()
# Continue only if there are rows returned.
if rows:
    # New empty list called 'result'. This will be written to a file.
    result = list()
    # The row name is the first entry for each entity in the description tuple.
    column_names = list()
    for row in rows:
        result.append(row)
    # Write result to file.
    with open(csv_file_path, 'w', newline='') as csvfile:
        csvwriter = csv.writer(csvfile, delimiter=',', quotechar='"', quoting=csv.QUOTE_MINIMAL)
        for row in result:
            csvwriter.writerow(row)
else:
    sys.exit("No rows found for query: {}".format(sql))


#df = pd.read_excel (r'C:/Users/ocvir/Desktop/DeltaHacksVI.csv') 
#print (df)

train_dataset_path = keras.utils.get_file("simmies.csv", "https://raw.githubusercontent.com/JaredWatson/DeltaHacks/ai/simmies.csv?token=AD5BRPFCN7GSXSZJD6MCVNC6GZQ7O")

train_column_names = ['Sick','temp','age','skin colour','time meal',
 'pregnancy complications', 'bleeding', 'fluids', 'crying', 'vd blood', 'vd no blood', 'coughing', 'lethargy']

test_column_names = ['ID','dv','Sick','temp','age','skin colour','time meal',
 'pregnancy complications', 'bleeding', 'fluids', 'crying', 'vd blood', 'vd no blood', 'coughing', 'lethargy']

train_raw_dataset = pd.read_csv(csv_file_path, names=column_names,
                      na_values = "?", comment='\t',
                      sep=",", skipinitialspace=True)

test_raw_dataset = pd.read_csv(train_dataset_path, names=column_names,
                      na_values = "?", comment='\t',
                      sep=",", skipinitialspace=True)

train_dataset = train_raw_dataset.copy()
train_dataset.tail()
test_dataset = test_raw_dataset.copy()
test_dataset.tail()

train_dataset = train_dataset.dropna()

train_dataset = pd.get_dummies(train_dataset, prefix='', prefix_sep='')
train_dataset.tail()
test_dataset = pd.get_dummies(test_dataset, prefix='', prefix_sep='')
test_dataset.tail()

train_stats = train_dataset.describe()
train_stats.pop('Sick')
train_stats = train_stats.transpose()
train_labels = train_dataset.pop('Sick')

test_labels = test_dataset.pop('ID')
test_labels.pop('dv')
test_labels.pop('Sick')


def norm(x):
  return (x - train_stats['mean']) / train_stats['std']

normed_train_data = norm(train_dataset)
normed_test_data = norm(test_dataset)

def build_model():
    model = keras.Sequential([
        layers.Dense(64, activation='relu', input_shape=[len(train_dataset.keys())]),
        layers.Dense(64, activation='relu'),
        layers.Dense(1)
    ])

    optimizer = tf.keras.optimizers.RMSprop(0.001)

    model.compile(loss='mse',
                optimizer=optimizer,
                metrics=['mae', 'mse'])
    return model

model = build_model()

EPOCHS = 1000
history = model.fit(
  normed_train_data, train_labels,
  epochs=EPOCHS, validation_split = 0.9, verbose=0,
  callbacks=[tfdocs.modeling.EpochDots()])

hist = pd.DataFrame(history.history)
hist['epoch'] = history.epoch
hist.tail()

model = build_model()

early_stop = keras.callbacks.EarlyStopping(monitor='val_loss', patience=10)

early_history = model.fit(normed_train_data, train_labels, 
                    epochs=EPOCHS, validation_split = 0.9, verbose=0, 
                    callbacks=[early_stop, tfdocs.modeling.EpochDots()])

loss, mae, mse = model.evaluate(normed_test_data, test_labels, verbose=2)

test_predictions = model.predict(normed_test_data).flatten()
error = abs(test_predictions - test_labels)
accuracy = 1-error

'''
final_dataset = test_raw_dataset
sql = "INSERT INTO data (Sick) VALUES (%s)"
val = ("?")
cur.execute(sql, (val,))

db.commit()
'''