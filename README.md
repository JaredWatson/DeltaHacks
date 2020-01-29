# DeltaHacks VI

How to see it for yourself:

1. Copy the files to a local directory
2. Edit files flow.py and the .php files in the boostrap folder to contain the correct links to your mysql server and database
3. Launch an apache server using the bootstrap folder and a mysql server with the correct columns defined in flow.py at line 27, as well as the columns `hash` and `verdict` for the secure hash and the doctor's verdict respectively
4. Connect to your apache server
5. To access the doctor side you will need to manually visit {YOUR IP}/Doctor_End.php
6. Have fun!

Note: You will need to run the python script after submitting client data to the sql server. Ensure they both point to the same database/table. The doctor won't be able to see the client's data until the NN has processed it.
