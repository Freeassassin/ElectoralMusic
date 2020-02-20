import requests
from bs4 import BeautifulSoup




headers = {
    'user-agent': 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36'
}

login_data = {
#note=&checkout=
    'note': '',
    'checkout': ''
}#

with requests.Session() as s:
    url = "https://chimp-store.myshopify.com/cart/add?quantity=1&id=31357638443121"
    r = s.get(url, headers=headers)
    #print(r)
    soup = BeautifulSoup(r.content,'html.parser')
    #print(soup)
    url= "https://www.thechimpstore.com/cart"
    r = s.post(url, data=login_data, headers=headers)
    soup = BeautifulSoup(r.content,'html.parser')
    #print(soup)
    x = soup.find_all('form')
    print(x)