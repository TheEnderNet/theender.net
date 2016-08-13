#!/bin/env python

import time
import random
import sys
import os
import sqlite3

conn = sqlite3.connect("site.db")

curs = conn.cursor()
curs.execute("SELECT * FROM posts")
All = curs.fetchall()
curs.execute("SELECT * FROM posts WHERE cat IS 'story'")
Stry = curs.fetchall()
curs.execute("SELECT * FROM posts WHERE author IS 'Lizzy'")
Liz = curs.fetchall()

template = """<div class="small-12 large-6 columns callout"><h2>{title}</h2><p>{cont}</p><p> ~ {author} - {posted} <i class="secondary label">{cat}</i></p></div>"""


row = """<h1>ALL</h1><hr>"""
for post in All:
  sys.stderr.write( str(post)+"\n")
  row += template.format( cat=post[1], title=post[2], cont=post[3], author=post[4], posted=post[5])

row += "<hr><h1>Story</h1><hr>"
for post in Stry:
  row += template.format( cat=post[1], title=post[2], cont=post[3], author=post[4], posted=post[5])


Stuff = {
  "TITLE": "Test.py",
  "BACK_COLOR": "white",
  "TEXT_COLOR": "black",
  "HOME_COLOR": "green",
  "BLOG_COLOR": "black",
  "ART_COLOR": "black",
  "STOR_COLOR": "black",
  "PROJ_COLOR": "black",
  "CONT_COLOR": "black",
  "CONTENT": row,
  "PAN": "<div class='small-12 large-1 columns callout'><i class='label'>~bsbsbs</i></div>" * 12,
  "PON": "<div class='small-12 large-3 columns callout'><i class='label'>~bsbsbs</i></div>" * 4

}

with open("template.html", "r") as f:
  global temp
  temp = f.read()

#print( temp.format(TITLE=Title, BACK_COLOR=BackColor, TEXT_COLOR=TextColor, CONTENT=Content) )
print( temp.format(**Stuff) )
conn.close()