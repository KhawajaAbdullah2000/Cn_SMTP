import easyimap
password='Baniazsun009.'
email='k200385@nu.edu.pk'
server=easyimap.connect('imap.gmail.com',email,password)

#emails=server.listids()
emails = server.listup(limit=1)
for email in emails:
    print("From:", email.from_addr)
    print("To:", email.to)
    print("Subject:", email.title)
    print("Body:", email.body)
    print("Date:", email.date)
    attach = email.attachments
    for attachment in attach:
        print("Attachment filename:", attachment[0])
        print("Attachment content:", attachment[1])
    