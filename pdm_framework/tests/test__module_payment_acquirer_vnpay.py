#!/usr/bin/python3
# #######################################
import requests, json


class bcolors:
    HEADER = '\033[95m'
    INFOBLUE = '\033[94m'
    OKGREEN = '\033[92m'
    WARNING = '\033[93m'
    FAIL = '\033[91m'
    ENDC = '\033[0m'
    BOLD = '\033[1m'
    UNDERLINE = '\033[4m'

# Set required default parameters:
url = 'http://localhost:8069'
username = 'admin'
password = 'abc123ABC!@#'

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
    #verify = False      # for TLS/SSL connection
)
# print('\n Result =', bcolors.INFOBLUE, r_access_token.text, bcolors.ENDC)
access_token = r_access_token.json()['access_token']
print('\n Login SUCCESS, your access token is:', bcolors.OKGREEN, access_token, bcolors.ENDC)

print('\n', '=' * 60)

# -----------------------------------
# print('\n 2. REFRESH ACCESS TOKEN:')

# refresh_token = r_access_token.json()['refresh_token']
# r_refresh_token = requests.post(
#     url + '/api/auth/refresh_token',
#     headers = {'Access-Token': access_token},
#     data = json.dumps({
#         'refresh_token': refresh_token,
#         'access_lifetime': 10,
#     }),
# )
# # print('\n Result =', bcolors.INFOBLUE, r_refresh_token.text, bcolors.ENDC)
# print('\n Your refresh access token is:', bcolors.OKGREEN, refresh_token, bcolors.ENDC)

# print('\n', '=' * 60)

# -----------------------------------
# print('\n 3. DELETE ACCESS TOKEN:')

# r_delete_token = requests.post(
#     url + '/api/auth/delete_tokens',
#     headers = {'Access-Token': access_token},
#     data = json.dumps({
#         'refresh_token': refresh_token,
#     }),
# )
# print(f'{bcolors.OKGREEN}DELETE DONE,{bcolors.ENDC}', f'{bcolors.BOLD}Status:{bcolors.ENDC}', r_delete_token.status_code)

# print('\n', '=' * 60)

# GET: Info module `payment_acquirer_vnpay`
# -----------------------------------------
"""
    Fields to get:
                    id,
                    name,
                    vnpay_payment_url,
                    vnpay_tmn_code,
                    vnpay_secret_key
"""
print('\n 2. GET: Info module `payment_acquirer_vnpay`:')
res = requests.get(
    url + '/api/payment.acquirer',
    headers = {'Access-Token': access_token},
    data = json.dumps(
        {
            'filters': [('name', '=', 'VNPAY')],
            'include_fields': [
                'id',
                'name',
                'vnpay_payment_url',
                'vnpay_tmn_code',
                'vnpay_secret_key',
            ],
        }
    ),
)
print('\n Result =', bcolors.OKGREEN, res.text, bcolors.ENDC)
