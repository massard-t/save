import sys
import os
import requests
import hashlib
import re
from zipfile import ZipFile
from optparse import OptionParser


def make_zipfile(source_dir, name="export_tmp_bankito"):
    name = name + ".zip"
    print(source_dir)
    if os.path.isfile(name) is True:
        os.remove(name)
    with ZipFile((name), "w") as my_zip:
        for dirname, subdirs, files in os.walk(source_dir):
            my_zip.write(dirname)
            for filename in files:
                print(filename)
                my_zip.write(os.path.join(dirname, filename))
        my_zip.close()
    return (name)


def send_file(dest, fname, data):
    r = requests.post(dest, data, files={fname: open(fname, 'rb')})
    print(fname)
    os.remove(fname)
    return (r)
    pass


def md5(fname):
    hash = hashlib.md5()
    with open(fname, "rb") as f:
        for chunk in iter(lambda: f.read(4096), b""):
            hash.update(chunk)
    return (hash.hexdigest())


def pass_md5(mdp):
    mdp = opt.password
    mdp.encode('utf-8')
    hash = hashlib.md5()
    hash.update(mdp.encode('utf-8'))
    return (hash.hexdigest())


def set_data(opt, chck, source):
    data = {}
    if opt.name is not None:
        data['name'] = opt.name
    if opt.username is not None:
        data['username'] = opt.username
    if opt.password is not None:
        data['password'] = pass_md5(opt.password)
    data['md5'] = chck
    # data['path'] = source
    for ele in data:
        print("this is " + ele + ":" + data[ele])
    return (data)


def step_two(opt):
    if opt.name is not None:
        name = make_zipfile(opt.source, opt.name)
    else:
        name = make_zipfile(opt.source)
    chck = md5(name)
    data = set_data(opt, chck, opt.source)
    rep = send_file(opt.dest, name, data)
    get_rep(rep.text)
    pass


def get_rep(rep):
    rep = rep.replace("{", "{,")
    rep = rep.replace("}", ",}")
    jayson = re.compile(r""",.{2,}?,""")
    rep = jayson.findall(rep)
    print(rep)


def opts_script():
    parser = OptionParser()
    parser.add_option(
            "-u", "--username", dest=None,
            help="Your username"
            )
    parser.add_option(
            "-p", "--password", dest=None,
            help="Your password"
            )
    parser.add_option(
            "-s", "--source", dest=None,
            help="your desired folder to back up"
            )
    parser.add_option(
            "-d", "--dest", dest=None,
            help="the server where you want to send your backup"
            )
    parser.add_option(
            "-n", "--name", dest=None,
            help="the desired name of the project"
            )
    return (parser)


if __name__ == '__main__':
    (opt, args) = opts_script().parse_args()
    if opt.username is None or opt.source is None or opt.dest is None:
        opts_script().print_help()
        sys.exit(0)
    step_two(opt)
