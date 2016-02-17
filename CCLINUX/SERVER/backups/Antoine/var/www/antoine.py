import requests
import sys
import hashlib


def md5(filename):
    hash = hashlib.md5()
    with open(filename, "rb") as f:
        for chunk in iter(lambda: f.read(4096), b""):
            hash.update(chunk)
    return (hash.hexdigest())


def send_file(filename):
    # md = md5(filename)
    r = requests.post("http://92.222.227.175:1234/main.php",  files={filename: open(filename, 'rb')})
    print(r.content)


if __name__ == '__main__':
    send_file(sys.argv[1])
