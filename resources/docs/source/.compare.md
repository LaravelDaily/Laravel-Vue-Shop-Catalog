---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://demo.test/docs/collection.json)

<!-- END_INFO -->

#Front page


APIs for front page
<!-- START_86e0ac5d4f8ce9853bc22fd08f2a0109 -->
## Fetch products

Fetch products paginated by 6 per page.

> Example request:

```bash
curl -X GET \
    -G "http://demo.test/api/products?category=5&page=2" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://demo.test/api/products"
);

let params = {
    "category": "5",
    "page": "2",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "current_page": 2,
    "data": [
        {
            "id": 47,
            "name": "Example product.",
            "description": "This is example product.",
            "price": "290.90",
            "created_at": "2020-03-23 12:00:23",
            "updated_at": "2020-03-23 12:00:23",
            "deleted_at": null,
            "photo": {
                "id": 47,
                "model_type": "App\\Product",
                "model_id": 47,
                "collection_name": "photo",
                "name": "product",
                "file_name": "product.jpg",
                "mime_type": "image\/jpeg",
                "disk": "public",
                "size": 26976,
                "manipulations": [],
                "custom_properties": {
                    "generated_conversions": {
                        "thumb": true
                    }
                },
                "responsive_images": [],
                "order_column": 47,
                "created_at": "2020-03-23T12:00:23.000000Z",
                "updated_at": "2020-03-23T12:00:23.000000Z",
                "url": "\/storage\/47\/product.jpg",
                "thumbnail": "\/storage\/47\/conversions\/product-thumb.jpg"
            },
            "media": [
                {
                    "id": 47,
                    "model_type": "App\\Product",
                    "model_id": 47,
                    "collection_name": "photo",
                    "name": "product",
                    "file_name": "product.jpg",
                    "mime_type": "image\/jpeg",
                    "disk": "public",
                    "size": 26976,
                    "manipulations": [],
                    "custom_properties": {
                        "generated_conversions": {
                            "thumb": true
                        }
                    },
                    "responsive_images": [],
                    "order_column": 47,
                    "created_at": "2020-03-23T12:00:23.000000Z",
                    "updated_at": "2020-03-23T12:00:23.000000Z",
                    "url": "\/storage\/47\/product.jpg",
                    "thumbnail": "\/storage\/47\/conversions\/product-thumb.jpg"
                }
            ]
        }
    ],
    "first_page_url": "http:\/\/localhost\/api\/products?page=1",
    "from": 7,
    "last_page": 2,
    "last_page_url": "http:\/\/localhost\/api\/products?page=2",
    "next_page_url": null,
    "path": "http:\/\/localhost\/api\/products",
    "per_page": 6,
    "prev_page_url": "http:\/\/localhost\/api\/products?page=1",
    "to": 10,
    "total": 10
}
```

### HTTP Request
`GET api/products`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `category` |  optional  | Category ID to filter by.
    `page` |  optional  | The page number to return.

<!-- END_86e0ac5d4f8ce9853bc22fd08f2a0109 -->

<!-- START_109013899e0bc43247b0f00b67f889cf -->
## Fetch categories

Fetch all categories.

> Example request:

```bash
curl -X GET \
    -G "http://demo.test/api/categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://demo.test/api/categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "name": "Example category.",
            "description": "This is example category.",
            "created_at": "2020-03-23 12:00:08",
            "updated_at": "2020-03-23 12:00:08",
            "deleted_at": null,
            "photo": null,
            "media": []
        }
    ]
}
```

### HTTP Request
`GET api/categories`


<!-- END_109013899e0bc43247b0f00b67f889cf -->


