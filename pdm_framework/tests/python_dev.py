#!/usr/bin/python3

# REST API with Python
# Link: https://realpython.com/python-requests/, https://requests.readthedocs.io/en/master/

import requests

from base64 import encodestring
from requests.exceptions import HTTPError


for url in ['https://api.github.com', 'https://api.github.com/invalid']:
    try:
        res = requests.get(url)
        res.raise_for_status()
    except HTTPError as http_err:
        print(f'HTTP error occurred: {http_err}')
    except Exception as err:
        print(f'Other error occurred: {err}')
    else:
        print('Success!')
        
# ======================================
