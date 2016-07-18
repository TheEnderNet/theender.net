#!/usr/bin/env python
# -*- coding: utf-8 -*-
# This be old

#GitRoot = "/home/znc/gitcrap/OETFWeb/"
#WebRoot = "/home/znc/www/oetf/"


import string, cgi, socket, json, sys
import subprocess as sub
from colorama import Fore
from os import curdir, sep, system
from BaseHTTPServer import BaseHTTPRequestHandler, HTTPServer

def doGitThing( name, branch="master" ):
    if name == "theender.net":
        if branch == "master":
            p = sub.Popen(['git','pull'],stdout=sub.PIPE,stderr=sub.PIPE,cwd="/var/www/www.theender.net/git")
            output, errors = p.communicate()
            print( "**OUTPUT:  " + output )
            print( "**ERRORS:  " + errors )
        if branch == "dev":
            p = sub.Popen(['git','pull'],stdout=sub.PIPE,stderr=sub.PIPE,cwd="/var/www/test.theender.net/git")
            output, errors = p.communicate()
            print( "**OUTPUT:  " + output )
            print( "**ERRORS:  " + errors )

    print( "End of doGitThing" )

class HttpThingy(BaseHTTPRequestHandler):
    def do_GET(self):
        try:
            if self.path.endswith(".html"):
                f = open(curdir + sep + self.path)
                self.send_response(200)
                self.send_header("Content-type", "text/html")
                self.end_headers()
                self.wfile.write(f.read())
                f.close()
                return
            elif self.path == "/":
                f = open("index.html", "r")
                self.send_response(200)
                self.send_header("content-type", "text/html")
                self.end_headers()
                self.wfile.write(f.read())
                f.close()
                return
            elif self.path.endswith(".py") or self.path.endswith(".pyc"):
                self.send_error(403, "No, no looking at my running files!")
                return
            else:
                self.send_error(404, "Can't find that file, sorry :/")

        except IOError:
            self.send_error(404, "Cant find that file, sorry :/")

    def do_POST(self):
        try:
            ctype, pdict = cgi.parse_header(self.headers.getheader('content-type'))
            try:
                print( "{f}Got HTTP POST from {a} ({d}) requesting \"{p}\"!".format(f=Fore.MAGENTA,a=self.client_address[0],d=socket.gethostbyaddr(self.client_address[0])[0],p=self.path) )
            except:
                print( "{f}Got HTTP POST from {a} ({d}) requesting \"{p}\"!".format(f=Fore.MAGENTA,a=self.client_address[0],d="Unknown",p=self.path) )
            if self.client_address[0].split(".")[:3] == ['192','30','252']: # Github's IP Range
                print( "IP address recognised, sending 200 OK....")
                recv = self.rfile.read( int( self.headers.getheader("content-length") ) ).decode('utf-8')
                self.send_response(200)
                self.end_headers()
                print( "Decoding json")
                dta = json.loads( recv )
                print( "Got {0}, Branch: {1}".format(dta['repository']['name'],dta['ref'].split("/")[2]) )
                doGitThing( dta['repository']['name'], dta['ref'].split("/")[2] )
                return

            else:
                print( "{f}IP {a} not recognised, sending 403 Forbidden....".format(f=Fore.RED,a=self.client_address[0]))
                self.send_error(403)
                self.end_headers()
        except Exception as e:
            print( e, e.args, e.message  )
            print( sys.exc_info() )
            self.send_error(500)

    def log_message(self, format, *args):
        return

def main():
    try:
        server = HTTPServer(('',9009), HttpThingy)
        print( "listening" )
        server.serve_forever()
    except KeyboardInterrupt:
        print( "^C triggered, closing..." )
        server.socket.close()

if __name__ == "__main__":
    main()
