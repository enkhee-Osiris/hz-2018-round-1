## warmup

http://218.100.84.106:5006/


## Writeup

![screenshot](https://github.com/enkhee-Osiris/hz-2018-round-1/blob/master/ppc/warmup/ppc-warmup.jpeg)

Энэхүү даалгавар нь өгөгдсөн илэрхийлэлд өгөгдсөн утгыг оруулж бодох ёстой.  
Хариуг **Post** хүсэлтээр явуулах ёстой.  

```python
#!/usr/bin/env python

import re
import requests

response = requests.get("http://218.100.84.106:5006/index.php")
cookie = response.cookies['PHPSESSID']

mod = 1000000007

numbers = re.findall(r'[0-9]+\^[0-9]+', response.text)
nums = []

for i in numbers:
	i = i.replace("^","**")
	nums.append(eval(i) % mod)

flag = (nums[0] * nums[1] * nums[2]) % mod

r = requests.post("http://218.100.84.106:5006/index.php", data={'answer':int(flag),'sum': int(flag)}, cookies={'PHPSESSID': cookie})
hz = re.search(r'HZ\{\S+\}', r.text)
if flag:
	print("Flag is: " + hz.group(0))
	# Flag is: HZ{S1mPl3_M4th_0x3d4e5a}
```

Дээрх python скриптыг ажилуулвал дараах тугийг хэвлэх болно.

`Flag is: HZ{S1mPl3_M4th_0x3d4e5a}`


