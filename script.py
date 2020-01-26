import pymysql

import csv

import sys

​

db_opts = {

    'user': 'babysafe',

    'password': 'FireFire',

    'host': '165.277.33.15',

    'database': 'babysafe'

}

​

db = pymysql.connect(**db_opts)

cur = db.cursor()

​

sql = 'SELECT * from mydb.users'

csv_file_path = 'C:/Users/Sparsh/Desktop/my_csv_file.csv'

​

try:

    cur.execute(sql)

    rows = cur.fetchall()

finally:

    db.close()

​

# Continue only if there are rows returned.

if rows:

    # New empty list called 'result'. This will be written to a file.

    result = list()

​

    # The row name is the first entry for each entity in the description tuple.

    column_names = list()

    for i in cur.description:

        column_names.append(i[0])

​

    result.append(column_names)

    for row in rows:

        result.append(row)

​

    # Write result to file.

    with open(csv_file_path, 'w', newline='') as csvfile:

        csvwriter = csv.writer(csvfile, delimiter=',', quotechar='"', quoting=csv.QUOTE_MINIMAL)

        for row in result:

            csvwriter.writerow(row)

else:

    sys.exit("No rows found for query: {}".format(sql))