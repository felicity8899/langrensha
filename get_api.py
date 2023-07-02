from flask import Flask, jsonify
import mysql.connector

app = Flask(__name__)

@app.route('/api')

def api():
    cnx = mysql.connector.connect(user='inspire_tech_onl', password='8cpeDF5ZYn',
                                  host='localhost', database='inspire_tech_onl')
    cursor = cnx.cursor(dictionary=True)
    cursor.execute('SELECT * FROM game_version')
    data = cursor.fetchall()
    cursor.close()
    cnx.close()
    return jsonify(data)


if __name__ == '__main__':
    app.run()
