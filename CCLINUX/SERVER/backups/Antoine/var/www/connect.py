#  url = http://92.222.227.175:1234/main.php
import requests
import hashlib


"""r = requests.post("http://92.222.227.175:1234/main.php", data={"username":"tot
o", "mac":"00:0a:95:9d:68:16", "path":"/var/www/tataa", "timestamp
":"1354457962", "md5":"d4bf666f5b50b9b64d81d0e1e45a1a44"})"""


class To_send():
    """Get informations about the file to send"""
    def __init__(self):
        print("success")

    def md5(filename):
        hash = hashlib.md5()
        with open(filename, "rb") as f:
            for chunk in iter(lambda: f.read(4096), b""):
                hash.update(chunk)
        return (hash.hexdigest())


class Sendf():
    """Class to list files"""
    files = []

    def __init__(self, filename):
        super(Sendf, self).__init__()
        self.filename = filename

    def add_file(self, To_send):
        self.files.append(To_send)
        pass

    def send_everything(self):
        for to_send in self.files:
            self.send(to_send)
            print("worked")
        pass
# print(r.content)
