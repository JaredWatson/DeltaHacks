import pymysql
import csv
import sys


dec = int (input ("1: Push 2:Pull   "))


if (dec == 2):
    db_opts = {
        'user': 'babysafe',
        'password': 'FireFire',
        'host': '165.227.33.15',
        'database': 'babysafe'
    }

    db = pymysql.connect(**db_opts)
    cur = db.cursor()

    sql = 'SELECT * from data'
    csv_file_path = 'C:/Users/Sparsh/Desktop/my_csv_file.csv'

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
                csvwriter.writerow(row)
    else:
        sys.exit("No rows found for query: {}".format(sql))

if (dec == 1):
    #Push Data

    import mysql.connector

    mydb = mysql.connector.connect(
    host="165.227.33.15",
    user="babysafe",
    passwd="FireFire",
    database="babysafe"
    )

    mycursor = mydb.cursor()

    sql = "INSERT INTO data (Sick) VALUES (%s)"

    insert = (input("Enter severity    "))
    val = (insert)

    mycursor.execute(sql, (val,))

    mydb.commit()

    print(mycursor.rowcount, "record inserted.")