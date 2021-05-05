#!/usr/bin/python3

import json
import requests
import urllib.parse

from .global_variables import URL_STAGING, TOKEN_STAGING


# =============================== [Orders]
# API: [GET] Order Detail
def _api_get_order_detail_ghtk(data_input=None, token=None):
    res = requests.request(
        "GET",
        urllib.parse.urljoin(URL_STAGING + "/services/shipment/v2/", data_input),
        headers={"Token": token if token else TOKEN_STAGING},
    )
    return res


# API: [POST] Cancel order
def _api_cancel_order_ghtk(data_input=None, token=None):
    res = requests.request(
        "POST",
        urllib.parse.urljoin(URL_STAGING + "/services/shipment/cancel/", data_input),
        headers={"Token": token if token else TOKEN_STAGING},
    )
    return res


# API: [POST] Create new order
def _api_create_order_ghtk(order, token=None):
    res = requests.request(
        "POST",
        URL_STAGING + "/services/shipment/order",
        headers={
            "Content-Type": "application/json",
            "Token": token if token else TOKEN_STAGING,
        },
        data=json.dumps(order),
    )
    return res


# =============================== [Services Provided]
# API: [GET] Shipping calculation
def _api_shipping_fee_calculation_ghtk(params_shipping_fee, token=None):
    res = requests.request(
        "GET",
        URL_STAGING
        + "/services/shipment/fee?"
        + urllib.parse.urlencode(params_shipping_fee),
        headers={"Token": token if token else TOKEN_STAGING},
    )
    return res
