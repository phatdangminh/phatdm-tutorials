#!/usr/bin/python3
import smtplib

sender = "PhatDM BAP <phatdm@bap-ventures.com>"
receiver = "A Test User <to@example.com>"

message = f"""\
Subject: Hi Mailtrap
To: {receiver}
From: {sender}

This is a test e-mail message.
{html_header_doc.encode('utf-8')}
{html_footer_doc.encode('utf-8')}
"""

with smtplib.SMTP("smtp.mailtrap.io", 2525) as server:
    server.login("57d6fb52691c0f", "cd256b1f182e4e")
    server.sendmail(sender, receiver, message)
