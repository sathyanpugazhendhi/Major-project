import mysql.connector
from mysql.connector import Error
from typing import Any

from hashlib import sha256
import json
genesis_block = {'previous_hash':0 ,
                 'index': 0,
                 'transactions': [], 'proof': 0}
blockchain = [genesis_block]
open_transactions = []
def readquery(c,q):
    cursor=c.cursor()
    result =None 
    try:
        cursor.execute(q)
        result=cursor.fetchall()
        return result
    except Error as e:
        print(e)

def get_transaction(id):
    mydb=mysql.connector.connect(host= "localhost",user= "root",passwd= "",database = "crime_db")
    qry="Select victim_name,case_type,case_id,gender,phone,Email_address,locations,crime_details from record where id={};".format(id)
    n=readquery(mydb,qry)
    return n

def proof_of_work():
    previous_hash = ''
    proof = 0
    last_block = blockchain[-1]
    for keys in last_block:
        previous_hash = previous_hash + str(last_block[keys])


    guess_hash = previous_hash + str(proof)
    hash = sha256(guess_hash.encode('utf-8')).hexdigest()
    while hash[0:4] != '0000':
            guess_hash = previous_hash + str(proof)
            hash = sha256(guess_hash.encode('utf-8')).hexdigest()
            proof = proof + 1
            #print(hash)
    return proof

def hash_block(last_block):
    previous_hash = ''

    for keys in last_block:
        previous_hash = previous_hash + str(last_block[keys])
    hash = sha256(json.dumps(previous_hash).encode('utf-8')).hexdigest()
    return hash


def mine_block(id):
    last_block = blockchain[-1]

    hashed_block = hash_block(last_block)
    proof = proof_of_work()

    block = {
        'previous_hash': hashed_block,
        'index': len(blockchain),
        'transactions': open_transactions,
        'proof': proof
    }
    blockchain.append(block)
    mydb=mysql.connector.connect(host= "localhost",user= "root",passwd= "",database = "crime_db")
    mycursor = mydb.cursor()

    sql = "UPDATE record SET hased_block='{}' ,proof={} WHERE id={};".format(hashed_block,proof,id)
    #val = (hashed_block,proof)
    mycursor.execute(sql)


    mydb.commit()
    #print(mycursor.rowcount, "record inserted.")
    print(blockchain)

    #print("hashed block:",hashed_block,",proof of work is :",proof)
    #print(proof)
    return True

mydb=mysql.connector.connect(host= "localhost",user= "root",passwd= "",database = "crime_db")
count="""SELECT COUNT(*) FROM record;"""
k=readquery(mydb,count)
m=(k[0][0])
get = 15
while m!=0:
    data = get_transaction(get)
    holder,type,id,gender,num,mail,loc,details = data[0]
    transaction = {
                    'name': holder,
                    'Type':type,
                    'Id': id,
                    'gender':gender,
                    'Phone_number':num,
                    'Email_id':mail,
                    'location' :loc,
                    'Details': details
                    }

    open_transactions.append(transaction)
    #print(open_transactions)
    mine_block(get)
    open_transactions = []
    m-=1