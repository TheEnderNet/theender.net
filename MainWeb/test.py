#!/bin/env python

import time
import random
import sys
import os

sys.stderr.write( str(dir())+"\r\n" )
sty = int(os.environ["STYLE"])

lorem = """ 
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mattis sollicitudin quam, eu fringilla dolor condimentum nec. Nulla blandit dapibus faucibus. Vestibulum sed metus semper erat sodales ultricies. Pellentesque mollis ligula a orci fringilla tempor. Nullam vitae volutpat augue. Cras non augue eget lorem euismod dignissim dictum et orci. Sed euismod dui et lorem tristique, et finibus nisi tincidunt. Integer ut velit magna. Sed in ipsum purus.

Phasellus consequat nisi quam, eget varius ipsum rutrum ac. Duis interdum enim libero, quis blandit mi suscipit in. Nunc cursus augue felis, ut fermentum urna pellentesque sit amet. Etiam maximus turpis vitae rutrum varius. Morbi hendrerit cursus dui. Etiam luctus est risus, ut fringilla arcu hendrerit vel. Nulla facilisi. In dui urna, tincidunt porttitor metus id, lacinia condimentum tortor. Quisque fringilla id nisi venenatis volutpat. Donec a mauris mi.
"""

contents = [
  "<div class='small-12 large-6 columns'><h3>New chapter released!</h3><p>Story: Chapter <a href=''>link</a></p></div>",
  "<div class='small-12 large-6 columns'><h3>ThisIsAHeading</h3><p>this is the content of this entry, 44a65a6sdsa hjkdsahkajshdkjhsa  hh jdshjashkjadhkjshdasahkdsahkj hh sahh dsahjhjdsahj hjhhsj hjhhk jhkjdsahkjhkjdsahkjhkdsajhkdjsahjk dsahdkla<br><img src='/_resources/img/img.png'></p></div>",
  "<div class='small-12 large-6 columns'><h3>ThisIsAHeading</h3><p>This is some shorter entry<br>There's not much text here and there's no image</p></div>",
  "<div class='small-12 large-6 columns'><h3>LOREM!!!</h3><p>"+lorem+"</p></div>"
]


row = ""
for k in range(1,random.randint(2,16) ):
  txt = ""
  for i in range(0,2):
    txt = txt + "\r\n" + random.choice( contents )
  row = row + "<div class='row'>"+txt+"\r\n</div>\r\n"


Content = row


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
  "PAN": "<div class='small-12 large-1 columns callout'>~</div>" * 12,
  "PON": "<div class='small-12 large-3 columns callout'>~</div>" * 4

}

with open("template.html", "r") as f:
  global temp
  temp = f.read()

#print( temp.format(TITLE=Title, BACK_COLOR=BackColor, TEXT_COLOR=TextColor, CONTENT=Content) )
print( temp.format(**Stuff) )