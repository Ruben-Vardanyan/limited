import requests
from bs4 import BeautifulSoup 

url = "http://api.cba.am/exchangerates.asmx?op=ExchangeRatesLatest"
payload = """<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Body>
    <ExchangeRatesLatest xmlns="http://www.cba.am/" />
  </soap12:Body>
</soap12:Envelope>"""
headers = {
    'Content-Type': 'application/soap+xml; charset=utf-8'
}
response = requests.request("POST", url, headers=headers, data=payload).text

#pip install lxml
bs_data = BeautifulSoup(response , 'xml') 
rates_xml = bs_data.find_all('ExchangeRate')

rates = [
    {
        "iso" : "AMD",
        "rate" : 1,
    }
]

for rate in rates_xml:
    field = {
        "iso" : str(rate.find('ISO').text),
        "rate" : float(rate.find('Rate').text),
    }
    rates.append(field)





