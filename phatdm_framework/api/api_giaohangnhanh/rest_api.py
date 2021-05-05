#!/usr/bin/python3
# #######################################
import json
import requests

# === DOCUMENT: https://api.ghn.vn/home/docs/
# Env: [Real](https://online-gateway.ghn.vn)
# Env: [Dev](https://dev-online-gateway.ghn.vn)

# === Main Parameters:
url = 'https://dev-online-gateway.ghn.vn'
token = '36d4de06-fcbd-11ea-ba50-eee6ac6e2826'
shop_id = '75019'
username = 'phatminh0794'
password = 'Phat@1994'


# =================== [ORDER APIs]

# == API Tạo đơn hàng :: [POST] ==

# Các tham số cần truyền vào:
# ------------------------------------------------------
# ||| HEADERS Params:
# :param token:               Cung cấp bởi Giao Hang Nhanh
# :param shop_id:             Quản lý thông tin cho cửa hàng / người bán
#
# ||| DATA Params:
# :param to_name:             Tên khách hàng. (Cửa hàng / Người bán)
# :param to_phone:            Số điện thoại khách hàng. (Cửa hàng / Người bán)
# :param to_address:          Địa chỉ khách hàng. (Cửa hàng / Người bán)
# :param to_ward_code:        Mã phường nhận bưu kiện
# :param to_district_id:      ID quận thả bưu kiện
# :param return_phone:        Liên hệ số điện thoại để trả lại bưu kiện
# :param return_address:      Địa chỉ trả lại bưu kiện
# :param return_district_id:  ID quận trả lại bưu kiện
# :param return_ward_code:    Mã bưu kiện trả lại bưu kiện
# :param client_order_code:   Mã đơn hàng bên ngoài được quản lý bởi khách hàng đã đăng nhập [Trường duy nhất].
#                             Giá trị mặc định: null
# :param cod_amount:          Lượng tiền mặt để thu thập.
#                             Tối đa 50.000.000
#                             Giá trị mặc định: 0
# :param content:             Nội dung đơn hàng
# :param weight:              Cân nặng (gram)
# :param length:              Chiều dài (cm)
# :param width:               Rộng (cm)
# :param height:              Cao (cm)
# :param pick_station_id:     Người giao hàng không nhận bưu kiện tại địa chỉ shop
# :param insurance_value:     Sử dụng để khai báo giá trị bưu kiện. GHN sẽ dựa trên giá trị này để bồi thường nếu có
#                             bất kỳ điều gì bất ngờ xảy ra (bị mất, bị hỏng ...).
#                             Tối đa 10.000.000
#                             Giá trị mặc định: 0
# :param coupon:              Mã giảm giá
# :param service_type_id:     Giá trị đầu vào 1: Express, 2: Standard hoặc 3: Saving (nếu không nhập service_id)
# :param service_id:          Chọn dịch vụ nào phù hợp với gói vận chuyển của bạn (Express, Standard hoặc Saving).
#                             Mỗi Service ID có phí khác nhau và thời gian dẫn.
#                             Dùng API Get service (nếu không nhập service_type_id)
# :param payment_type_id:     Chọn người trả phí vận chuyển.
#                             1: Cửa hàng / Người bán.
#                             2: Người mua / Người nhận hàng.
# :param note:                Lưu ý khách hàng cho người giao hàng
# :param required_note:       Lưu ý đặt hàng vận chuyển. Giá trị cho phép:
#                             - CHOTHUHANG
#                             - CHOXEMHANGKHONGTHU
#                             - KHONGCHOXEMHANG
# :param items:               Dùng để đặt tên, mã , số lượng sản phẩm ( trong trường hợp giao trả 1 phần )
# ------------------------------------------------------
params_order = {
    "payment_type_id": None,
    "note": "",
    "required_note": "",
    "to_name": "",
    "to_phone": "",
    "to_address": "",
    "to_ward_code": "",
    "to_district_id": None,
    "return_phone": "",
    "return_address": "",
    "return_ward_code": "",
    "return_district_id": None,
    "client_order_code": "",
    "cod_amount": None,
    "content": "",
    "weight": None,
    "length": None,
    "width": None,
    "height": None,
    "insurance_value": None,
    "service_id": None,
    "service_type_id": None,
    "items": ""
}


def _create_order_ghn(params_order):
    headers = {
        'Content-Type': 'application/json',
        'Token': token,
        'ShopId': shop_id
    }
    return requests.request(
        'POST',
        url + '/shiip/public-api/v2/shipping-order/create',
        headers=headers,
        data=json.dumps(params_order)
    )


# == API Lấy thông tin đơn hàng :: [POST] ==

# Tham số cần truyền vào:
# ------------------------------------------------------
# ||| HEADERS Params:
# :param token:         Cung cấp bởi Giao Hang Nhanh
# :param shop_id:       Quản lý thông tin cho cửa hàng / người bán
#
# ||| DATA Params:
# :param order_code:    Mã đơn hàng của GHN. Đây là mã để tra cứu thông tin đơn hàng
# ------------------------------------------------------


def _check_status_order_ghn(order_code):
    headers = {
        'Content-Type': 'application/json',
        'Token': token,
        'ShopId': shop_id
    }
    return requests.request(
        'POST',
        url + '/shiip/public-api/v2/shipping-order/detail',
        headers=headers,
        data=json.dumps(order_code)
    )


# == API Cập nhật đơn hàng :: [POST] ==

# Tham số cần truyền vào:
# ------------------------------------------------------
# ||| HEADERS Params:
# :param token:         Cung cấp bởi Giao Hang Nhanh
# :param shop_id:       Quản lý thông tin cho cửa hàng / người bán
#
# ||| DATA Params:
# :param order_code:    Mã đơn hàng của GHN. Đây là mã để tra cứu thông tin đơn hàng
# ------------------------------------------------------
code_update = {"order_code": ""}
data_update = {}


def _update_order_ghn(code_update, data_update):
    data = {code_update, data_update}
    headers = {
        'Content-Type': 'application/json',
        'Token': token,
        'ShopId': shop_id
    }
    return requests.request(
        'POST',
        url + '/shiip/public-api/v2/shipping-order/update',
        headers=headers,
        data=json.dumps(data)
    )


# == API Huỷ một đơn hàng hoặc nhiều đơn hàng :: [POST] ==

# Tham số cần truyền vào:
# ------------------------------------------------------
# :param order_code:  Mã đơn hàng của GHN. Đây là mã để tra cứu thông tin đơn hàng
# ------------------------------------------------------
codes_cancel = {"order_codes": []}


def _cancel_orders_ghn(codes_cancel):
    headers = {
        'Content-Type': 'application/json',
        'Token': token,
        'ShopId': shop_id
    }
    return requests.request(
        'POST',
        url + '/shiip/public-api/v2/switch-status/cancel',
        headers=headers,
        data=json.dumps(codes_cancel)
    )


# =================== [SERVICE - CALCULATE FEE APIs]

# == API Tính Phí Vận Chuyển Đơn Hàng :: [POST] ==

# Các tham số cần truyền vào:
# -------------------------------------------------------
# ||| HEADERS Params:
# :param token:               Cung cấp bởi Giao Hang Nhanh
# :param shop_id:             Quản lý thông tin cho cửa hàng / người bán
#
# ||| DATA Params:
# :param service_id:          Chọn dịch vụ nào phù hợp với gói vận chuyển của bạn (Express, Standard hoặc Saving).
#                             Mỗi Service ID có phí khác nhau và thời gian dẫn.
#                             Dùng API Get service (nếu không nhập service_type_id)
# :param service_type_id:     Giá trị đầu vào 1: Express, 2: Standard hoặc 3: Saving (nếu không nhập service_id)
# :param insurance_value:     Sử dụng để khai báo giá trị bưu kiện. GHN sẽ dựa trên giá trị này để bồi thường nếu có
#                             bất kỳ điều gì bất ngờ xảy ra (bị mất, bị hỏng ...).
#                             Tối đa 10.000.000
#                             Giá trị mặc định: 0
# :param coupon:              Mã giảm giá
# :param to_ward_code:        Mã phường nhận bưu kiện
# :param to_district_id:      ID quận thả bưu kiện
# :param weight:              Cân nặng (gram)
# :param length:              Chiều dài (cm)
# :param width:               Rộng (cm)
# :param height:              Cao (cm)
# -------------------------------------------------------
params_shipping_fee = {
    "service_id": None,
    "service_type_id": None,
    "insurance_value": None,
    "coupon": "",
    "to_ward_code": "",
    "to_district_id": None,
    "weight": None,
    "length": None,
    "width": None,
    "height": None
}


def _shipping_fee_calculation_ghn(params_shipping_fee):
    headers = {
        'Content-Type': 'application/json',
        'Token': token,
        'ShopId': shop_id
    }
    return requests.request(
        'POST',
        url + '/shiip/public-api/v2/shipping-order/fee',
        headers=headers,
        data=json.dumps(params_shipping_fee)
    )


# == API Lấy Thông Tin Gói Dịch Vụ :: [POST] ==

# Các tham số cần truyền vào:
# --------------------------------------------------------
# ||| HEADERS Params:
# :param token:             Cung cấp bởi Giao Hang Nhanh
# :param shop_id:           Quản lý thông tin cho cửa hàng / người bán
#
# ||| DATA Params:
# :param shop_id:           Quản lý thông tin cho cửa hàng / người bán
# :param from_district:     Mã Quận/Huyện người gửi
# :param to_district:       Mã Quận/Huyện người nhận
# --------------------------------------------------------
params_service = {
    "shop_id": None,
    "from_district": None,
    "to_district": None
}


def _get_service_ghn(params_service):
    headers = {'Content-Type': 'application/json', 'Token': token}
    return requests.request(
        'POST',
        url + '/shiip/public-api/v2/shipping-order/available-services',
        headers=headers,
        data=json.dumps(params_service)
    )


# == API Tính Thời Gian Giao Dự Kiến :: [POST] ==

# Các tham số cần truyền vào:
# --------------------------------------------------------
# ||| HEADERS Params:
# :param token:               Cung cấp bởi Giao Hang Nhanh
# :param shop_id:             Quản lý thông tin cho cửa hàng / người bán
#
# ||| DATA Params:
# :param from_district_id:    Mã Quận/Huyện người gửi
# :param from_ward_code:      Mã Phường/Xã người gửi
# :param to_district_id:      Mã Quận/Huyện người nhận
# :param to_ward_code:        Mã Phường/Xã người nhận
# :param service_id:          Chọn những gói dịch vụ (Express, Standard hoặc Saving)
#                             để tính thời gian giao dự kiến của đơn hàng.
#                             Note: Sử dụng `service_id` (thì không cần truyền `service_type_id`)
# --------------------------------------------------------
params_calculate_delivery_time = {
    "from_district_id": None,
    "from_ward_code": "",
    "to_district_id": None,
    "to_ward_code": "",
    "service_id": None
}


def _calculate_expected_delivery_time_ghn(params_calculate_delivery_time):
    headers = {
        'Content-Type': 'application/json',
        'Token': token,
        'ShopId': shop_id
    }
    return requests.request(
        'POST',
        url + '/shiip/public-api/v2/shipping-order/leadtime',
        headers=headers,
        data=json.dumps(params_calculate_delivery_time)
    )


# =================== [OTHERS APIs]

# Mặc định tham số truyền vào:
# ---------------------------------------------
# ||| HEADERS Params:
# :param token:   Cung cấp bởi Giao Hàng Nhanh
# ---------------------------------------------
headers_token_only = {'Content-Type': 'application/json', 'Token': token}


# == API Lấy Thông Tin Tỉnh Thành :: [GET] ==
def _get_province_ghn():
    return requests.request(
        'GET',
        url + '/shiip/public-api/master-data/province',
        headers=headers_token_only
    )


# == API Lấy Thông Tin Quận/Huyện :: [GET] ==
def _get_district_ghn():
    # TH Lấy theo Tỉnh/Thành `province_id`:
    # => url + '/shiip/public-api/master-data/district?province_id=<id>'
    return requests.request(
        'GET',
        url + '/shiip/public-api/master-data/district',
        headers=headers_token_only
    )


# == API Lấy Thông Tin Phường/Xã :: [GET] ==
def _get_ward_ghn():
    # TH Lấy theo Quận/Huyện `district_id`:
    # => url + '/shiip/public-api/master-data/ward?district_id=<id>'
    return requests.request(
        'GET',
        url + '/shiip/public-api/master-data/ward',
        headers=headers_token_only
    )
