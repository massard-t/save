import json
import os.path
from optparse import OptionParser


def set_opt():
    parser = OptionParser()
    parser.add_option(
            "-m", "--modify", dest=None,
            help="modify or create a configuration"
            )
    parser.add_option(
            "-c", "--create", dest=None,
            help="create a JSON bakito config"
            )


def set_content(src_dir, time):
    prog = "#!/usr/bin/python3.4\nimport shutil\nimport os\nimport time\n\n"
    prog += ""
    pass
def create_crontab(src_dir, time):
    home = os.path.expanduser("~")
    if os.path.isdir(home + "/.bakito") is False:
        os.makedirs(home + "/.bakito")
    with open((home + "/.bakito/_" + src_dir + str(time) + ".py"), "w") as f:
        prog = "#!/usr/bin/python3.4\nimport shutil\nimport os\nimport time"
    pass
# def create_config():
#     mess = "We're going to create a fresh new config for your ban"
#     mess += "kito client. We are going to ask you for your username"
#     mess += " and your password"
#     print(mess)
#     username = input("Username ?> ")
#     mdp = input("Password ?> ")
#     f


def startup():
    home = os.path.expanduser("~")
    bakito_file = home + "/.bakito.json"
    if os.path.isfile(bakito_file):
        os.path.getsize(bakito_file)
        with open(bakito_file, "r") as f:
            jayson = json.load(f)
            infos = {}
            # dic_json = json.dumps(jayson, separators=(',', ':'))
            for ele in jayson:
                if ele == "infos":
                    infos = jayson[ele]
            print(infos)
    else:
        pass
        # create_config()


if __name__ == '__main__':
    # startup()
    create_crontab("d", 3)
