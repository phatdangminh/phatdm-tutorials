#!/usr/bin/python3
# #######################################
import requests, json
import pprint


class bcolors:
    H = '\033[95m'
    IN = '\033[94m'
    OK = '\033[92m'
    WA = '\033[93m'
    FA = '\033[91m'
    EN = '\033[0m'
    BO = '\033[1m'
    UN = '\033[4m'

# Set required default parameters:
# url = 'http://localhost:8069'

# -User Internal
# username = 'admin'
# password = 'admin'

# LOGIN IN ODOO AND GET ACCESS TOKENS
# -----------------------------------
# print('\n 1. LOGIN IN ODOO AND GET ACCESS TOKENS:')

# r_access_token = requests.get(
#     url + '/api/auth/get_tokens',
#     headers = {'Content-Type': 'text/html; charset=utf-8'},
#     data = json.dumps({
#         'username': username,
#         'password': password,
#         'access_lifetime': 0,
#         'refresh_lifetime': 10,
#     }),
# )
# res_json = json.dumps(r_access_token.json(), indent=4, sort_keys=True)
# print(f'\n{bcolors.H} Get Access Token = {bcolors.EN}', res_json)
# access_token = r_access_token.json()['access_token']
# print('\n Acess Token: ', bcolors.OK, access_token, bcolors.EN)

# ====================================================
# print(f'\n {bcolors.IN}========== TEST API ODOO:{bcolors.EN}')

# ============================= [PRODUCT]
# -- READ ALL --
# r_read_all_product = requests.get(
#     url + '/api/product.product',
#     headers={
#         'Content-Type': 'text/html; charset=utf-8',
#         'Access-Token': access_token,
#     },
#     data=json.dumps({
#         'limit': 10,
#         'order': 'name desc',
        # 'include_fields': [
        #     'categ_id',
        #     'default_code',
        #     'id',
        #     'lst_price',
        #     'name',
        #     'standard_price',
        #     'type',
        # ],
#     })
# )
# res_json = json.dumps(r_read_all_product.json(), indent=4, sort_keys=True)
# print(res_json)

# -- READ ONE --
# r_read_one = requests.get(
#     url + '/api/product.template/31',
#     headers={
#         'Content-Type': 'text/html; charset=utf-8',
#         'Access-Token': access_token,
#     },
#     data=json.dumps({
#         # 'search_field': 'name',
#         'exclude_fields': ['image_1024', 'image_128', 'image_1920', 'image_256', 'image_512'],
#         # 'exclude_fields': '__all_fields__',
#         # 'include_fields': [
#         #     'categ_id',
#         #     'default_code',
#         #     'id',
#         #     'lst_price',
#         #     'name',
#         #     'standard_price',
#         #     'type',
#         # ],
#     })
# )
# res_json = json.dumps(r_read_one.json(), indent=4, sort_keys=True)
# print(f'\n{bcolors.H} READ ONE = {bcolors.EN}', res_json)

# -- CREATE --
# r_create = requests.post(
#     url + '/api/product.template',
#     headers={
#         'Content-Type': 'text/html; charset=utf-8',
#         'Access-Token': access_token,
#     },
#     data=json.dumps({
#         # 'product_type': 'smartf',  #  Yêu cầu đã cài đặt module `bemo_base_smartf`
#         'name': 'TEST [CREATE] Product AA',
#         'type': 'service',
#         'list_price': 1500,
#         'standard_price': 1050,
#         'attribute_line_ids': [
#             {
#                 'attribute_id': 1,
#                 'value_ids': [
#                     (0, 0, {'name': 'Attrs 1-1', 'attribute_id': 1}),
#                     (0, 0, {'name': 'Attrs 1-2', 'attribute_id': 1}),
#                     (0, 0, {'name': 'Attrs 1-3', 'attribute_id': 1}),
#                 ],
#             },
#         ],
#         'invoice_policy': 'order',
#         'description': 'Create new product succeed!'
#     })
# )
# res_json = json.dumps(r_create.json(), indent=4, sort_keys=True)
# print(f'\n{bcolors.H} CREATE = {bcolors.EN}', res_json)

# -- UPDATE --
# r_update = requests.put(
#     url + '/api/product.template/31',
#     headers={
#         'Content-Type': 'text/html; charset=utf-8',
#         'Access-Token': access_token,
#     },
#     data=json.dumps({
#         'name': 'TEST [CREATE] Product AA+',
#         'description': 'Update product succeed!'
#     })
# )
# res_json = json.dumps(r_update.json(), indent=4, sort_keys=True)
# print(f'\n{bcolors.H} UPDATE: {bcolors.EN}', f'{bcolors.OK}DONE{bcolors.EN}' if r_update.status_code == 200 else res_json)

# ============================= [PRODUCT ATTRIBUTE]

# pprint.pprint(value)

# r_read_all_attr = requests.get(
#     url + '/api/product.attribute',
#     headers={
#         'Content-Type': 'text/html; charset=utf-8',
#         'Access-Token': access_token,
#     },
#     data=json.dumps({
#         'filters': [('id', '<=', 30)],
#         'include_fields': [
#             'id',
#             'name',
#             # 'attribute_line_ids',
#             'create_variant',
#             'display_name',
#             'display_type',
#             'value_ids',
#         ],
#     })
# )
# res_json = json.dumps(r_read_all_attr.json(), indent=4, sort_keys=True)
# print(f'\n{bcolors.H} PRODUCT ATTRIBUTE = {bcolors.EN}', res_json)

# r_read_one_attr = requests.get(
#     url + '/api/product.attribute/15',
#     headers={
#         'Content-Type': 'text/html; charset=utf-8',
#         'Access-Token': access_token,
#     },
#     data=json.dumps({
#         # 'exclude_fields': '__all_fields__',
#         # 'include_fields': [
#         #     'id',
#         #     'name'
#         # ],  # Trả về kết quả là ID và Name của thuộc tính
#     })
# )
# res_json = json.dumps(r_read_one_attr.json(), indent=4, sort_keys=True)
# print(f'\n{bcolors.H} READ ATTRIBUTE WITH ID = {bcolors.EN}', res_json)

# r_create_attr = requests.post(
#     url + '/api/product.attribute',
#     headers={
#         'Content-Type': 'text/html; charset=utf-8',
#         'Access-Token': access_token,
#     },
    # data=json.dumps({
    #     'name': 'Old Color',
    #     'display_type': 'color',
    #     'create_variant': 'always',
    #     'value_ids': [
    #         {
    #             'name': 'Old Red',
    #             'html_color': '#b80d0d',
    #         },
    #         {
    #             'name': 'Old Green',
    #             'html_color': '#29e018',
    #         },
    #     ],
    # })
# )
# res_json = json.dumps(r_create_attr.json(), indent=4, sort_keys=True)
# print(res_json)

# r_update_attr = requests.put(
#     url + '/api/product.attribute/2',
#     headers={
#         'Content-Type': 'text/html; charset=utf-8',
#         'Access-Token': access_token,
#     },
#     data=json.dumps({
#         'name': 'Beautiful Color',
#         'value_ids': [
#             {
#                 'id': 3,
#                 'name': 'New Red Update',
#                 'html_color': '#f87171',
#             },
#             {
#                 'id': 4,
#                 'name': 'New Green Update',
#                 'html_color': '#abfaa2',
#             },
#             {
#                 'name': 'New Yellow',
#                 'html_color': '#fdf63a',
#             },
#             {
#                 'name': 'New Pink',
#                 'html_color': '#eb21f2',    
#             },
#         ],
#     })
# )
# print(r_update_attr.status_code)

# ============================= [PARTNER]

# r = requests.get(
#     url + '/api/res.partner',
#     headers={
#         'Content-Type': 'text/html; charset=utf-8',
#         'Access-Token': access_token,
#     },
#     data=json.dumps({
#         # 'filters': [('name', 'like', 'ompany'), ('id', '<=', 50)],
#         #'filters': [('name', 'like', 'ser'), ('id', '<=', 50),],
#         # 'filters': [('id', '<=', 20)],
#         #'offset': 10,
#         'limit': 20,
#         'order': 'name desc',
#         'include_fields': ['id', 'name']
#     })
# )
# res_json = json.dumps(r.json(), indent=4, sort_keys=True)
# print(res_json)

# r_read_one = requests.get(
#     url + '/api/res.partner/12',
#     headers={
#         'Content-Type': 'text/html; charset=utf-8',
#         'Access-Token': access_token,
#     },
#     data=json.dumps({
#         'exclude_fields': '__all_fields__',
#         'include_fields': [
#             'name',
#             'company_type',
#             'company_name',
#             'type',
#             'street',
#             'street2',
#             'city',
#             'state_id',
#             'zip',
#             'country_id',
#             'function',
#             'phone',
#             'mobile',
#             'email',
#             'child_ids',
#             'bank_ids',
#             'category_id',
#         ],
#     })
# )
# # pprint.pprint(r_read_one.json())
# res_json = json.dumps(r_read_one.json(), indent=4, sort_keys=True)
# print(res_json)

# r = requests.post(
#     url + '/api/res.partner',
#     headers={
#         'Content-Type': 'text/html; charset=utf-8',
#         'Access-Token': access_token,
#     },
#     data = json.dumps({
#         # simple fields (non relational):
#         'name':         'TEST Name',
#         'street':       'TEST Street',
#         'street2':      'TEST Street2',
#         'city':         'TEST City',
#         'zip':          '123',
#         'phone':        '+123456789',
#         'email':        'a@b.com',
#         # many2one fields (existing 'id', not dictionary of new record!):
#         'state_id':     10,
#         'country_id':   235,
#         # one2many fields (list of dictionaries of new records):
#         'bank_ids': [
#             {
#                 'acc_number':   'acc_number 1',
#                 'bank_bic':     'bank_bic 1',
#             },
#             {
#                 'acc_number':   'acc_number 2',
#                 'bank_bic':     'bank_bic 2',
#             },
#             {
#                 'acc_number':   'acc_number 3',
#                 'bank_bic':     'bank_bic 3',
#             },
#         ],
#         # many2many fields (list of dictionaries of existing 'ids'):
#         'category_id': [
#             {'id': 1},
#             {'id': 2},
#         ],
#     }),
# )
# print('\n Status = ', r.status_code)
# print('\n', r.text)

# r_update = requests.put(
#     url + '/api/res.partner/41',
#     headers={
#         'Content-Type': 'text/html; charset=utf-8',
#         'Access-Token': access_token,
#     },
#     data = json.dumps({
#         # simple fields (non relational):
#         'name':         'TEST Name~~||',
#         'street':       'TEST Street~~',
#         'street2':      'TEST Street2~~',
#         'city':         'TEST City~~',
#         'zip':          '123~~',
#         'phone':        '+123456789~~',
#         'email':        'a@b.com~~',
#         # many2one fields (existing 'id', not dictionary of new record!):
#         'state_id':     6,
#         'country_id':   14,
#     }),
# )
# print(r_update.status_code)
# print(r_update.text)

# ============================= [SALE ORDER]

# r_read_one_so = requests.get(
#     url + '/api/sale.order/22',
#     headers={
#         'Content-Type': 'text/html; charset=utf-8',
#         'Access-Token': access_token,
#     },
#     data=json.dumps({})
# )
# pprint.pprint(r_read_one_so.json())

# r_create_so = requests.post(
#     url + '/api/sale.order',
#     headers={
#         'Content-Type': 'text/html; charset=utf-8',
#         'Access-Token': access_token,
#     },
#     data=json.dumps({
#         'user_id': 2,
#         'team_id': 1,
#         'partner_id': 3,
#         'partner_invoice_id': 19,
#         'partner_shipping_id': 19,
#         'order_line': [
#             {
#                 'product_id': 7,
#                 'product_uom_qty':  1,
#                 'price_unit': 555,
#             },
#             {
#                 'product_id': 16,
#                 'product_uom_qty':  2,
#                 'price_unit': 777,
#             },
#             {
#                 'product_id': 19,
#                 'product_uom_qty':  3,
#                 'price_unit': 888,
#             },
#         ],
#         'campaign_id': 4,
#         'pricelist_id': 1,
#     })
# )
# pprint.pprint(r_create_so.json())

# r_update = requests.put(
#     url + '/api/sale.order/13',
#     headers={
#         'Content-Type': 'text/html; charset=utf-8',
#         'Access-Token': access_token,
#     },
#     data = json.dumps({
#         'order_line': [
#             {
#                 'product_id': 23,
#                 'product_uom_qty':  18,
#                 'price_unit': 5555,
#                 'tax_id': [
#                     (6, 0, [1]),
#                 ],
#             },
#             {
#                 'product_id': 17,
#                 'product_uom_qty':  10,
#                 'price_unit': 8885,
#                 'discount': 10,
#             },
#         ],
#         'note': 'UPDATE SALE ORDER SUCCEED!!!',
#     }),
# )
# print(r_update.status_code)


# =======================================================================
import xmlrpc.client


demo_url = 'https://demo.odoo.com/start'
info = xmlrpc.client.ServerProxy(demo_url).start()
url, db, username, password = info['host'], info['database'], info['user'], info['password']

common = xmlrpc.client.ServerProxy('{}/xmlrpc/2/common'.format(url))
common.version()

# {
#     "server_version": "13.0",
#     "server_version_info": [13, 0, 0, "final", 0],
#     "server_serie": "13.0",
#     "protocol_version": 1,
# }

uid = common.authenticate(db, username, password, {})

print(
    'URL:', bcolors.OK, url, bcolors.EN, '|',
    'DB Name:', bcolors.IN, db, bcolors.EN, '|',
    'Username:', bcolors.WA, username, bcolors.EN, '|',
    'Password:', bcolors.WA, password, bcolors.EN,
)
# =======================================================================
