# Include libraries
import RPi.GPIO as GPIO
import time
from RPLCD.gpio import CharLCD
from mfrc522 import SimpleMFRC522
import mysql.connector


# database connection
dbconn = mysql.connector.connect(host='localhost',database='g1securty',user='pi',password='g1sec')
cursor = dbconn.cursor(buffered=True)


# rfid
reader = SimpleMFRC522()

# LCD config
GPIO.setwarnings(False)
lcd = CharLCD(
    numbering_mode=GPIO.BOARD,
    pin_rs=37,
    pin_rw=None,
    pin_e=35,
    pins_data=[33, 31, 29, 36],
    cols=16,
    rows=2,
    dotsize=8,
)

sqlDetails = "SELECT * FROM tblDetails where idNum = '1'"
cursor.execute(sqlDetails)
record = cursor.fetchone()

empNumber = str(record[1])
empName = str(record[2])
def adduser():
    new_user = True
    try:
        while new_user == True:
            lcd.clear()
            lcd.write_string("Place Card")
            id, text = reader.read()
            cursor.execute("SELECT id FROM users WHERE rfid_uid=" + str(id))
            cursor.fetchone()

            if cursor.rowcount >= 1:
                lcd.clear()
                lcd.write_string("ID overwrite")
                lcd.clear()
                lcd.write_string("Overwriting user.")
                time.sleep(1)
                sql_insert = "UPDATE users SET empNumber = emp_num name = new_name WHERE rfid_uid=%s"
                lcd.clear()
                lcd.write_string("Done")
                time.sleep(1)
                lcd.clear()
                break
            else:
                sql_insert = "INSERT INTO users (empNumber, name, rfid_uid) VALUES (%s, %s, %s)"

            emp_num = empNumber
            new_name = empName
            cursor.execute(sql_insert, (emp_num, new_name, id))
            dbconn.commit()
            lcd.clear()
            lcd.write_string(emp_num)
            time.sleep(2)
            break
            # stonp()

    finally:
        GPIO.cleanup()


def stop():
    print("hello")
    
adduser()
#print (empNumber)
