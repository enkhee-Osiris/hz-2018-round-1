## Legend PPC

http://218.100.84.106:5008/index.php

## Writeup

![screenshot](https://github.com/enkhee-Osiris/hz-2018-round-1/blob/master/ppc/Legend%20PPC/ppc-legend-ppc.jpeg)

Энэхүү даалгавар нь тооны зэргийг бодоод гарсан хариуны цифрийн уртыг олоод **Post** хүсэлт явуулах ёстой.  
Хэрэв та математикдаа сайн бол **log10** ашиглан үүнийг амархан бодож болно.

```python
import re
import math
import requests

cookie = None

response = requests.get("http://218.100.84.106:5008/index.php")

while True:
    if cookie == None:
        cookie = response.cookies['PHPSESSID']

    numbers = re.search(r'\d+\^\d+', response.text)

    print(numbers.group(0))
    numbers = numbers.group(0).split('^')
    numbers = [int(i) for i in numbers]

    digits_len = int(1 + numbers[1] * math.log10(numbers[0]))
    print('Tsifriin urt: %s' % digits_len)

    response = requests.post("http://218.100.84.106:5008/index.php", data={'answer':digits_len, 'sum': 'Илгээх'}, cookies={'PHPSESSID': cookie})

    flag = re.search(r'HZ18\{\S+\}', response.text)
    if flag:
        print("FLAG IS: " + flag.group(0))
        break
```

Дээрх python скриптийг ажиллуулвал дараах тугийг хэвлэх болно.

`FLAG IS: HZ18{S1mPl3_M4th_0x6v1lqq09mx}`
