from __future__ import absolute_import, division, print_function, unicode_literals

import pathlib

import matplotlib.pyplot as plt
import numpy as np
import pandas as pd
import seaborn as sns

import tensorflow as tf

from tensorflow import keras
from tensorflow.keras import layers

import tensorflow_docs as tfdocs
import tensorflow_docs.plots
import tensorflow_docs.modeling
import pymysql
import csv
import sys
import mysql.connector

def prediction(row):

    dataset_path = keras.utils.get_file("DataBaseProcess.csv", "https://raw.githubusercontent.com/JaredWatson/DeltaHacks/ai/simmies.csv?token=AD5BRPFCN7GSXSZJD6MCVNC6GZQ7O")

    column_names = ['Sick','temp','age','skin colour','time meal',
    'pregnancy complications', 'bleeding', 'fluids', 'crying', 'vd blood', 'vd no blood', 'coughing', 'lethargy']

    raw_dataset = pd.read_csv(dataset_path, names=column_names,
                          na_values = "?", comment='\t',
                          sep=",", skipinitialspace=True)

    dataset = raw_dataset.copy()
    dataset.tail()

    dataset = dataset.dropna()


    dataset = pd.get_dummies(dataset, prefix='', prefix_sep='')
    dataset.tail()

    train_dataset = dataset.sample(frac=0.9,random_state=0)
    test_dataset = dataset.drop(train_dataset.index)

    train_stats = train_dataset.describe()

    train_stats.pop('Sick')
    train_stats = train_stats.transpose()

    train_labels = train_dataset.pop('Sick')
    test_labels = test_dataset.pop('Sick')



    # Coefficient of Variation function
    def norm(x):
      return (x - train_stats['mean']) / train_stats['std']

    normed_train_data = norm(train_dataset)
    normed_test_data = norm(test_dataset)


    # Relu is an activation function for math regression
    # layer.dense - removes all bias and only takes 64 true values
    def build_model():
        model = keras.Sequential([
            layers.Dense(64, activation='relu', input_shape=[len(train_dataset.keys())]),
            layers.Dense(64, activation='relu'),#play with this value
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
      epochs=EPOCHS, validation_split = 0.1, verbose=0,
      callbacks=[tfdocs.modeling.EpochDots()])


    hist = pd.DataFrame(history.history)
    hist['epoch'] = history.epoch
    hist.tail()


    model = build_model()

    # The patience parameter is the amount of epochs to check for improvement
    early_stop = keras.callbacks.EarlyStopping(monitor='val_loss', patience=10)

    early_history = model.fit(normed_train_data, train_labels, 
                        epochs=EPOCHS, validation_split = 0.1, verbose=0, 
                        callbacks=[early_stop, tfdocs.modeling.EpochDots()])


    loss, mae, mse = model.evaluate(normed_test_data, test_labels, verbose=2)

    #print(normed_test_data)

    #final_dataset = {}
    #for i in range(len(row)-3):
      #final_dataset[i+3] = ''

    #print(final_dataset)
    #test_predictions = model.predict(final_dataset).flatten()
    test_predictions = model.predict(normed_test_data).flatten()

    #error = abs(test_predictions - test_labels)
    #accuracy = 1-error
    #print(test_predictions)
    return test_predictions[0]


def defineIllness(row):

    mydb = mysql.connector.connect(
    host="165.227.33.15",
    user="babysafe",
    passwd="FireFire",
    database="babysafe"
    )

    mycursor = mydb.cursor()
    usid = row[0]

    sql = "UPDATE data SET sick = (%s) WHERE ID = " + str(usid)

    val = prediction(row)
    print(val)

    mycursor.execute(sql, (str(val),))

    mydb.commit()

    print(mycursor.rowcount, "record inserted.")

db_opts = {
    'user': 'babysafe',
    'password': 'FireFire',
    'host': '165.227.33.15',
    'database': 'babysafe'
    }

db = pymysql.connect(**db_opts)
cur = db.cursor()

sql = 'SELECT * FROM data WHERE sick IS NULL'
csv_file_path = 'C:/Users/Sparsh/Desktop/my_csv_file.csv'
usid = 0

try:
    cur.execute(sql)
    rows = cur.fetchall()
finally:
    db.close()# Continue only if there are rows returned.
if rows:
    # New empty list called 'result'. This will be written to a file.
    result = list()    # The row name is the first entry for each entity in the description tuple.
    column_names = list()
    for row in rows:
        result.append(row)    # Write result to file.
    with open(csv_file_path, 'w', newline='') as csvfile:
        csvwriter = csv.writer(csvfile, delimiter=',', quotechar='"', quoting=csv.QUOTE_MINIMAL)
        for row in result:
            defineIllness(row)
            csvwriter.writerow(row)
else:
    sys.exit("No rows found for query: {}".format(sql))
