#!/usr/bin/python3
# #######################################
import requests, json


# Set required default parameters:
url = 'http://localhost:8069'
username = 'admin'
password = 'abc123ABC!@#'

# LOGIN IN ODOO AND GET ACCESS TOKENS
# -----------------------------------
print('\n 1. LOGIN IN ODOO AND GET ACCESS TOKENS:')

r_access_token = requests.get(
    url + '/api/auth/get_tokens',
    headers = {'Content-Type': 'text/html; charset=utf-8'},
    data = json.dumps({
        'username': username,
        'password': password,
        'access_lifetime': 0,
        'refresh_lifetime': 10,
    }),
)
print('\n Result =', r_access_token.text)
access_token = r_access_token.json()['access_token']
print('\n', '=' * 60)

# REFRESH ACCESS TOKEN
# --------------------
print('\n 2. REFRESH ACCESS TOKEN:')

refresh_token = r_access_token.json()['refresh_token']

r_refresh_token = requests.post(
    url + '/api/auth/refresh_token',
    headers = {'Access-Token': access_token},
    data = json.dumps({
        'refresh_token': refresh_token,
        'access_lifetime': 10,
    }),
)
print('\n Result =', r_refresh_token.text)
print('\n', '=' * 60)

# DELETE ACCESS TOKEN
# -------------------
print('\n 3. DELETE ACCESS TOKEN:')

r_delete_token = requests.post(
    url + '/api/auth/delete_tokens',
    headers = {'Access-Token': access_token},
    data = json.dumps({
        'refresh_token': refresh_token,
    }),
)
# DONE if Status: 200
print(r_delete_token)
