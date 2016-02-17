#!/usr/bin/python3.4
import shutil
import os.path
import time
import sys


timer = str(int(time.time()))


def cp_files(src):
    print(src)
    shutil.copytree(src, "/bakito/" + src + "_" + timer + "/", True)
    pass

cp_files(sys.argv[1])
