#!/usr/bin/python3
from googletrans import Translator
import pprint


print('============= TEST =============')

translator = Translator()
res = translator.translate('Mitä sinä teet', src='vi')

# pprint.pprint(googletrans.LANGUAGES, indent=4, sort_dicts=True)
print(res.src)
print(res.dest)
print(res.origin)
print(res.text)
print(res.pronunciation)
