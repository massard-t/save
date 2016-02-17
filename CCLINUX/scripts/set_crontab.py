#!/usr/bin/python3.4
import shutil
import time
import os
import sys
import os.path


# shutil.copytree(src, "/bankito/" + src + str(time.time()), True)
# print("/bankito/" + sys.argv[1] + str(time.time()), "/", True)
# direc = str(os.path.dirname(os.path.abspath(__file__)))
# src = str(os.getcwd()) + "/" + sys.argv[1]
# cmd = "* * * * * /usr/bin/python3.4 " + direc + "/cp.py " + src


def add_cron(src):
    if src[0] == "~":
        src = os.path.expanduser("~")
    if src == ".":
        src = ""
    src = str(os.getcwd()) + "/" + src
    c = "0 * * * * /usr/bin/python3.4 "
    c = c + os.path.dirname(os.path.abspath(__file__)) + "/cp.py " + src + "\n"
    print(c)
    os.system("crontab -l > tmpcron")
    with open("tmpcron", "a") as f:
        f.write(c)
    os.system("crontab tmpcron")
    os.remove("tmpcron")
    print("Cron added !")

if __name__ == '__main__':
    if len(sys.argv) > 1:
        add_cron(sys.argv[1])
    else:
        print("""
            To use this program, type: $> set_crontab.py dest
            Currently backups are done every hour.""")
# copydir("test")
