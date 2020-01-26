import pymysql
import csv
import sys
import mysql.connector

# dec = int (input ("1: Push 2:Pull   "))

#if (dec == 1):
    #Push Data
def defineIllness(usid):

    mydb = mysql.connector.connect(
    host="165.227.33.15",
    user="babysafe",
    passwd="FireFire",
    database="babysafe"
    )

    mycursor = mydb.cursor()

    sql = "UPDATE data SET sick = (%s) WHERE ID = " + str(usid)

    insert = (input("Enter severity"))
    val = (insert)

    mycursor.execute(sql, (val,))

    mydb.commit()

    print(mycursor.rowcount, "record inserted.")

#if (dec == 2):
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
            usid = row[0]
            defineIllness(usid)
            csvwriter.writerow(row)
else:
    sys.exit("No rows found for query: {}".format(sql))