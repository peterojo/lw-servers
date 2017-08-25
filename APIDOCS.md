# API Documentation

**Filter Servers**
----
  Returns a paginated filtered list of servers based on query parameters or a paginated list of all servers if no query parameters are sent.

* **URL**

  `/api/filter`

* **Method**

  `POST`
  
* **Sample Request**

  `POST /api/filter?min_storage=500GB&max_storage=2TB&ram=8gb,16gb&location=AMS`

* **Sample Response**

 ```json
{
    "data": [
        {
            "id":17,
            "model":"Dell R210-IIIntel Xeon E3-1220",
            "ram":"16GB DDR3",
            "storage":"2 X 1TB SATA2",
            "price":59.99,
            "currency":"\u20ac",
            "location": {
                "data": {
                    "abbr":"AMS",
                    "name":"AmsterdamAMS-01"
                }
            }
        },
        {
            "id":21,
            "model":"Dell R210-IIIntel Xeon E3-1270v2",
            "ram":"16GB DDR3",
            "storage":"2 X 1TB SATA2",
            "price":89.99,
            "currency":"\u20ac",
            "location": {
                "data": {
                    "abbr":"AMS",
                    "name":"AmsterdamAMS-01"
                }
            }
        },
        {
            "id":25,
            "model":"DL20G9Intel Xeon E3-1270v5",
            "ram":"16GB DDR4",
            "storage":"2 X 1TB SATA2",
            "price":112.99,
            "currency":"\u20ac",
            "location": {
                "data": {
                    "abbr":"AMS",
                    "name":"AmsterdamAMS-01"
                }
            }
        }
    ],
    "meta": {
        "pagination": {
            "total":3,
            "count":3,
            "per_page":20,
            "current_page":1,
            "total_pages":1,
            "links":[]
        }
    }
}
```

* **Query Parameters**

| Params                   | Values                         | Description                                                     |
| ------------------------ | ------------------------------ | --------------------------------------------------------------- |
| min_storage _(Optional)_ | _(String)_ e.g. 250GB          | The minimum value of storage capacity in readable string format |
| max_storage _(Optional)_ | _(String)_ e.g. 4TB            | The maximum value of storage capacity in readable string format |
| ram _(Optional)_         | _(String)_ e.g. 8gb,16gb,64gb  | Comma-separated list of ram sizes                               |
| disk_type _(Optional)_   | _(String)_ e.g. SATA2          | Type of disk. Must be one of SATA2, SAS or SSD                  |
| location _(Optional)_    | _(String)_ e.g. AMS            | Abbreviated form of server location                             |


----
**List Locations**
----
  Returns a list of all available locations.

* **URL**

  `/api/locations`

* **Method**

  `GET`
  
* **Sample Request**

  `GET /api/locations`

* **Sample Response**

 ```json
{
    "data": [
        {
            "abbr":"AMS",
            "name":"AmsterdamAMS-01"
        },
        {
            "abbr":"DAL",
            "name":"DallasDAL-10"
        },
        {
            "abbr":"FRA",
            "name":"FrankfurtFRA-10"
        },
        {
            "abbr":"HKG",
            "name":"Hong KongHKG-10"
        },
        {
            "abbr":"SFO",
            "name":"San FranciscoSFO-12"
        },
        {
            "abbr":"SIN",
            "name":"SingaporeSIN-11"
        },
        {
            "abbr":"WDC",
            "name":"Washington D.C.WDC-01"
        }
    ]
}
```
