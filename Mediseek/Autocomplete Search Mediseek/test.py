import os, sys
import json
import datetime
import random

html_syntex = """
      <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="#">
                        <img src="images/product-3.png" class="img-fluid product-thumbnail">
                        <h3 class="product-title"></h3>
                        <strong class="product-price"></strong>
                        <span class="icon-cross">
                    <img src="images/cross.svg" class="img-fluid">
                </span>
            </a>
        </div> 
      """

# temp = f"""
# <div>
# <div>{i}<b>Medicine name : <b>{data[i]}</div><br>
# <div><b><b></div><br>
# <div><b><b></div><br>

# </div>

# """

try:
    n = len(sys.argv)
    if n>2:
        cookie = sys.argv[2]
    if n>1:
        query = sys.argv[1]
    else:
        print("No argument")
        exit()
    name = open('data.json', 'r')
    l = open('link.json', 'r')
    data = json.load(name)
    link = json.load(l)
    for i in range(len(data)):
        if data[i].lower().startswith(query.lower()):
            # print(f"<div>{i}<b>Medicine name : <b>{data[i]}</div><br>")
            print(f"""<div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="{link[i]}">
                        <!--<img src="images/product-3.png" class="img-fluid product-thumbnail">-->
                        <h3 class="product-title">{data[i]}</h3>
                        <strong class="product-price">{random.randint(10, 500)}</strong>
                        <span class="icon-cross">
                    <img src="images/cross.svg" class="img-fluid">
                </span>
            </a>
            </div> """)

    f.close()
except:
    pass