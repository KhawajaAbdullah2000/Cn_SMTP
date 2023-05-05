from flask import Flask,request,jsonify
import email, smtplib, ssl
from email import encoders
from email.mime.base import MIMEBase
from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText
import easyimap

app=Flask(__name__)
@app.route('/test',methods=['GET','POST'])
def test():
    if request.method=='GET':
            return jsonify({
                'id':'3',
                'name':'Ali'
            })
    if request.method=='POST':
        subject=request.form['subject']
        body=request.form['body']
        sender_email = request.form['sender_email']
        receiver_email = request.form['receiver_email']
        file_path=request.form['file_path']
        password=request.form['password']
        message = MIMEMultipart()
        message["From"] = sender_email
        message["To"] = receiver_email
        message["Subject"] = subject
        message["Bcc"] = receiver_email  
        message.attach(MIMEText(body, "plain"))
        if file_path!='empty':
            
        # Add body to email
           
            filename = f"./backend_smtp/storage/app/public/images/{file_path}"  # In same directory as script

            # Open PDF file in binary mode
            with open(filename, "rb") as attachment:
                part = MIMEBase("application", "octet-stream")
                part.set_payload(attachment.read())  
            encoders.encode_base64(part)

            part.add_header(
                "Content-Disposition",
                f"attachment; filename= {filename}",
            )
        # else:
        #     part.add_header(
        #         "Content-Disposition"
        #     )

            message.attach(part)
        text = message.as_string()
        context = ssl.create_default_context()
        with smtplib.SMTP_SSL("smtp.gmail.com", 465, context=context) as server:
            server.login(sender_email, password)
            server.sendmail(sender_email, receiver_email, text)
            server.quit()
            return jsonify({
                'msg':'mail sent'
            })

@app.route('/receive',methods=['GET','POST'])
def receive():

    if request.method=='POST':
        my_list=[]
        password=request.form['password']
        email=request.form['email']
    
        server=easyimap.connect('imap.gmail.com',email,password)

        emails = server.listup(limit=3)
        for email in emails:
            attach = email.attachments
            new_obj={
                 'from':email.from_addr,
                 'to':email.to,
                 'subject':email.title,
                 'body':email.body,
                 'date':email.date     
             }
            
            for attachment in attach:
                new_obj['path']= attachment[0]
            my_list.append(new_obj)

        return jsonify(my_list),200
            # print("Attachment content:", attachment[1])
    
if __name__=='main':
    app.run()
    
