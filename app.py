import os
from chat import get_response
from flask import Flask, render_template,request

app=Flask(__name__)

app.static_folder="static"

@app.route("/")
def home():
    return render_template("index.php")

@app.route("/form.php")
def form():
    return render_template("form.php")

@app.route("/chatbot.php")
def chatbot():
    return render_template("chatbot.php") 

@app.route("/get")
def get_bot_response():
    usertext=request.args.get("msg")
    return get_response(usertext)

if __name__ == "__main__":
    app.run()