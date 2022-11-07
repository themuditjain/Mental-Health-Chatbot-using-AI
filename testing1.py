from chat import get_response
import numpy as np
import matplotlib.pyplot as plt
query=["Hello","Hemluuu","See You Later","Later","Hello See anxiety",
       "Have a good day","Not Well"]
respn=["Hello<br> How are you?","Hello<br> How are you?",
       "Thank you, <br>Good Bye,<br> Hope to see you soon...", 
       "Thank you, <br>Good Bye,<br> Hope to see you soon...", 
       "I do not understand...","I do not understand...",
       "Sad to hear that<br>Are you over sleeping or are you sleeping less ?"]
results=[]
for i in range(len(query)):
    if(get_response(query[i])==respn[i]):
        results.append(1)
        print("Pass")
    else:
        results.append(0)
        print("Fail")
data={"False":results.count(0), "True":results.count(1)}
xaxis=list(data.keys())
yaxis=list(data.values())
fig=plt.figure(figsize=(10,5))
plt.bar(xaxis, yaxis, color = 'maroon', width=0.4)
plt.xlabel("False/True")
plt.ylabel("Results")
plt.title("Automated Testing for chat.py")
plt.show()