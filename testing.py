from chat import get_response
import numpy as np
import matplotlib.pyplot as plt
query=["Hello","Hemluuu","See You Later","Later","Hello See anxiety",
       "Have a good day","Not Well","What is the price?"]
respn=["Hello<br> How are you?","Hello<br> How are you?",
       "Thank you, <br>Good Bye,<br> Hope to see you soon...", 
       "Thank you, <br>Good Bye,<br> Hope to see you soon...", 
       "I do not understand...",
       "thank you","Sad to hear that<br>Are you over sleeping or are you sleeping less ?",
       "I do not understand..."]
results=[]
for i in range(len(query)):
    if(get_response(query[i])==respn[i]):
        print("Pass")
    else:
        print("Fail")