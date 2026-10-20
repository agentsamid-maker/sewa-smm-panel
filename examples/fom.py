# Contoh pemakaian API fom.co.id. Jalankan: FOM_API_KEY=xxx python fom.py
import json
import os
import urllib.parse
import urllib.request

API_URL = "https://fom.co.id/api/v1"


def fom(action, **params):
    data = urllib.parse.urlencode({"key": os.environ["FOM_API_KEY"], "action": action, **params}).encode()
    with urllib.request.urlopen(API_URL, data=data, timeout=30) as resp:
        return json.load(resp)


if __name__ == "__main__":
    print(fom("balance"))
    # print(fom("add", service=1, link="https://instagram.com/username", quantity=1000))
    # print(fom("status", order=80000001))
