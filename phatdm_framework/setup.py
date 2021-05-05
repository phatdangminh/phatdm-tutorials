#!/usr/bin/python3

from setuptools import find_packages, setup
from os.path import join, dirname


lib_name = 'pdm_libs'

setup(
    name='PDM Framework',
    version='1.0.0',
    description='Đây là sản phẩm tổng hợp của Đặng Minh Phát',
    long_description='',
    url='',
    author='Đặng Minh Phát',
    author_email='phatminh.0794@gmail.com',
    classifiers=[c for c in classifiers.split('\n') if c],
    license=license,
    scripts=['setup/odoo'],
    packages=find_packages(),
    package_dir={'%s' % lib_name: 'pdm_libs'},
    include_package_data=True,
    install_requires=[],
    python_requires='>=3.7',
    extras_require=[],
    tests_require=[],
)
