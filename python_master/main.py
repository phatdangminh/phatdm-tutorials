#!/usr/bin/python3
from bs4 import BeautifulSoup

html_header_doc = """
    <tbody style="background-color: transparent">
        <tr>
            <td style="padding: 16px">
                <img style="max-width: 50%"
                     src="https://cdn.thegioigiaodien.com/Bemo/logo_bap_company_default.png"
                     alt="BAP-VENTURES"/>
            </td>
        </tr>
    </tbody>
"""

header_soup = BeautifulSoup(html_header_doc, 'html.parser')
print(header_soup)

html_footer_doc = """
    <tbody style="background-color: #ffffff">
        <tr>
            <td style="padding: 0px 16px">
                <div style="padding: 8px 0; border-top: 2px solid #b8d7f5;"
                />
                <div style="display: flex; flex-wrap: wrap; align-items: center;">
                    <div style="flex: 0 0 20%; max-width: 20%">
                        <img style="display: block; max-width: 100%"
                             src="https://cdn.thegioigiaodien.com/Bemo/logo_bap_company_default.png"
                             alt="COMPANY-BOT"/>
                    </div>
                    <div style="flex-basis: 0; flex-grow: 1; max-width: 100%;">
                        <ul style="margin-block-start: 0; margin-block-end: 12px; padding-inline-start: 12px; list-style-type: none;">
                            <li style="margin-bottom: 4px">
                                <b>B.A.P</b>
                                <b>Bot</b>
                                -
                                <span>System email</span>
                            </li>
                            <li style="margin-bottom: 4px">
                                <p style="font-size: 10px; line-height: 16px; margin-block-start: 0; margin-block-end: 0;">
                                    <img style="float: left; margin-right: 4px;" width="16" height="16"
                                         src="https://cdn.thegioigiaodien.com/Bemo/note_blue.svg" alt="NOTE"/>
                                    <b>Lưu ý:</b>
                                    Đây là hệ thống mail
                                    tự động, vui lòng không phản hồi lại
                                    qua email này cho chúng tôi.
                                </p>
                            </li>
                            <li style="margin-bottom: 4px">
                                <p style=" font-size: 10px; line-height: 16px; margin-block-start: 0; margin-block-end: 0;">
                                    <img style="float: left; margin-right: 4px;" width="16" height="16"
                                         src="https://cdn.thegioigiaodien.com/Bemo/note_blue.svg" alt="NOTE"/>
                                    <b>Note:</b>
                                    This is an automatic
                                    email from the system, please do not
                                    reply to this email.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </td>
        </tr>
    </tbody>
    <!-- COPYRIGHT Info -->
    <tbody style="background-color: transparent; font-size: 10px; line-height: 16px;">
        <tr>
            <td style="padding: 16px 16px 0 16px">
                <b style="display: block; color: #12497d">BAP IT Co. JSC</b>
            </td>
        </tr>
        <tr>
            <td style="padding: 8px 16px 0 16px">
                <img style="float: left; margin-right: 4px" width="16" height="16"
                     src="https://cdn.thegioigiaodien.com/Bemo/website_blue.svg" alt="WEBSITE"/>
                <div style="display: flex; flex-wrap: wrap">
                    <span style="display: inline-block; padding-right: 4px;">Website:</span>
                    <ul style="display: flex; flex-wrap: wrap; margin-block-start: 0; margin-block-end: 0; padding-inline-start: 0; list-style-type: none;">
                        <li style="padding-right: 8px; margin-right: 8px; border-right: 1px solid #e0e4e6;">
                            <a target="_blank" style="color: #0e6eef; text-decoration: none; font-weight: 700;"
                               href="https://bap-software.net/en/">
                                Software
                            </a>
                        </li>
                        <li style="padding-right: 8px; margin-right: 8px; border-right: 1px solid #e0e4e6;">
                            <a target="_blank" style="color: #0e6eef; text-decoration: none; font-weight: 700;"
                               href="https://bap-software.net/en/">
                                Ventures
                            </a>
                        </li>
                        <li style="padding-right: 8px; margin-right: 8px;">
                            <a style="color: #0e6eef; text-decoration: none; font-weight: 700;" href="#"
                            >Solution
                            </a>
                        </li>
                    </ul>
                </div>
            </td>
        </tr>
        <tr>
            <td style="padding: 8px 16px 16px 16px">
                <img style="float: left; margin-right: 4px" width="16" height="16"
                     src="https://cdn.thegioigiaodien.com/Bemo/home_blue.svg" alt="ADDRESS"/>
                <span style="display: inline-block; padding-right: 4px">
                    Address:
                </span>
                <ul style="padding-inline-start: 0; list-style-type: none; margin-block-start: 12px; margin-block-end: 0; overflow: auto; width: 100%;">
                    <li style="float: left; width: 33.33333%">
                        <b style="display: inline-block; margin-bottom: 4px;">
                            Hồ Chí Minh
                        </b>
                        <p style="margin-block-start: 0; margin-block-end: 0;">
                            17F, Tower B - Viettel Complex Building, 285 Cach
                            Mang Thang 8 Str., Ward 12, District 10,
                            Ho Chi Minh City, Vietnam
                        </p>
                        <p style="margin-block-start: 0; margin-block-end: 0; color: #858585;">
                            Tầng 17, Tháp B, Tòa nhà Viettel Complex,
                            285 Cách Mạng Tháng Tám, Phường 12, Quận 10,
                            Thành phố Hồ Chí Minh, Việt Nam
                        </p>
                        <div style="margin-top: 4px">
                            <img style="float: left; margin-right: 4px" width="16" height="16"
                                 src="https://cdn.thegioigiaodien.com/Bemo/phone_gray.svg" alt="PHONE"/>
                            <span style="display: inline-block; padding-right: 4px;">
                                (+84) (286) 2701 557
                            </span>
                        </div>
                    </li>
                    <li style="float: left; width: 33.33333%">
                        <b style="display: inline-block; margin-bottom: 4px;">
                            Đà Nẵng
                        </b>
                        <p style="margin-block-start: 0; margin-block-end: 0;">
                            10F, 81 Quang Trung Str.,
                            Hai Chau District, Da Nang,
                            Viet Nam
                        </p>
                        <p style="margin-block-start: 0; margin-block-end: 0; color: #858585;">
                            Tầng 10, số 81 đường Quang Trung,
                            Quận Hải Châu, Thành phố Đà Nẵng,
                            Việt Nam
                        </p>
                        <div style="margin-top: 4px">
                            <img style="float: left; margin-right: 4px" width="16" height="16"
                                 src="https://cdn.thegioigiaodien.com/Bemo/phone_gray.svg" alt="PHONE"/>
                            <span style="display: inline-block; padding-right: 4px;">
                                (+84) (236) 656 5115
                            </span>
                        </div>
                    </li>
                    <li style="float: left; width: 33.33333%">
                        <b style="display: inline-block;margin-bottom: 4px;">
                            Huế
                        </b>
                        <p id="en_title" style="margin-block-start: 0; margin-block-end: 0;">
                            5F, 28 Ly Thuong Kiet Str.,
                            Vinh Ninh Ward, Hue,
                            Vietnam
                        </p>
                        <p id="vn_title" style="margin-block-start: 0; margin-block-end: 0; color: #858585;">
                            Tầng 5, số 28 đường Lý Thường Kiệt,
                            Phường Vĩnh Ninh, Thành phố Huế,
                            Việt Nam
                        </p>
                        <div style="margin-top: 4px">
                            <img style="float: left; margin-right: 4px" width="16" height="16"
                                 src="https://cdn.thegioigiaodien.com/Bemo/phone_gray.svg" alt="PHONE"/>
                            <span style="display: inline-block; padding-right: 4px;">
                                (+84) (286) 2701 557
                            </span>
                        </div>
                    </li>
                </ul>
                <p style="margin-block-start: 8px; margin-block-end: 0; margin-left: auto; margin-right: auto; padding-top: 8px; text-align: center; max-width: 250px; width: 100%; border-top: 1px solid #ffffff;">
                    © 2021 Bemo Team |
                    <a href="https://index.bemo.cloud/" target="_bank"
                       style="color: #0e6eef; font-weight: 700; text-decoration: none;">Information Here
                    </a>
                </p>
            </td>
        </tr>
    </tbody>
"""

footer_soup = BeautifulSoup(html_footer_doc, 'html.parser')
print(footer_soup)
