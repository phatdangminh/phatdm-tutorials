#!/usr/bin/python3
import json
import pprint

import requests

# Base URL: Default for Dev Server BEMO
base_url = 'https://dev-bap.bemo.link'


# ==========================
# Rest API - Base Methods
# ==========================

# def api_read_all_GET(url, headers, data):
#     # Read All Params in Object(s)
#     return requests.get(url, headers, data)


# ==========================
# Rest API - Model [hr.job]
# ==========================

hr_job = 'hr.job'

# {API - GET}: List Jobs
get_list_jobs = requests.get(
    url=base_url + '/api/v1/%s' % hr_job,
    headers={
        'Content-Type': 'text/html; charset=utf-8',
        'Bap-Access-Token': '3620a418446d6b36551c1db4700d754b'
    },
    data={}
)

pprint.pprint("Status: {},\nCount: {},\nResult: {}".format(
    get_list_jobs.status_code, 
    get_list_jobs.json()['count'], 
    get_list_jobs.json()['results'], 
    indent=4))

# {API - POST}: Create Job

# {API - GET}: Job Details

# ==========================
# Rest API - Model [hr.applicant]
# ==========================

# {API - POST}: Create Job
# response = requests.post(
#     "https://dev-bap.bemo.link/api/v1/hr.applicant",
#     headers={
#         'Content-Type': 'text/html; charset=utf-8',
#         'Bap-Access-Token': '3620a418446d6b36551c1db4700d754b'
#     },
#     data=json.dumps({
#         "name": "User ABC",
#         "email_from": "abc@gmail.com",
#         "partner_phone": "0786532473"
#     })
# )
# print(response.status_code)
# pprint.pprint(response.json(), indent=4)

# ==========================
# Rest API - Model [hr.work.location]
# ==========================

# ==========================
# Rest API - Answers
# ==========================

# def successful_response(status, dict_data):
#     return werkzeug.wrappers.Response(
#         status=status,
#         content_type='application/json; charset=utf-8',
#         # headers = None,
#         response=json.dumps(dict_data),
#     )


# def error_response(status, error, error_descrip):
#     return werkzeug.wrappers.Response(
#         status=status,
#         content_type='application/json; charset=utf-8',
#         # headers = None,
#         response=json.dumps({
#             'error': error,
#             'error_descrip': error_descrip,
#         }),
#     )