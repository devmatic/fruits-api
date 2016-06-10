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

# Info

Welcome to the generated API reference.

# Available routes
#general
## Returns the authenticated user

> Example request:

```bash
curl "http://fruits.dev/api/authenticated_user" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://fruits.dev/api/authenticated_user",
    "method": "GET",
        "headers": {
    "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET /api/authenticated_user`

`HEAD /api/authenticated_user`


## Store a newly created fruit.

> Example request:

```bash
curl "http://fruits.dev/api/fruits" \
-H "Accept: application/json" \
    -d "name"="rerum" \
    -d "color"="ut" \
    -d "weight"="7517" \
    -d "delicious"="1" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://fruits.dev/api/fruits",
    "method": "POST",
    "data": {
        "name": "rerum",
        "color": "ut",
        "weight": 7517,
        "delicious": true
},
        "headers": {
    "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
console.log(response);
});
```


### HTTP Request
`POST /api/fruits`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | 
    color | string |  required  | Only alphabetic characters allowed
    weight | numeric |  required  | 
    delicious | boolean |  required  | 

## Remove the specified fruit.

> Example request:

```bash
curl "http://fruits.dev/api/fruits/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://fruits.dev/api/fruits/{id}",
    "method": "DELETE",
        "headers": {
    "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
console.log(response);
});
```


### HTTP Request
`DELETE /api/fruits/{id}`


## Display a listing of the fruits.

> Example request:

```bash
curl "http://fruits.dev/api/fruits" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://fruits.dev/api/fruits",
    "method": "GET",
        "headers": {
    "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
console.log(response);
});
```

> Example response:

```json
[
    {
        "id": 1,
        "name": "apple",
        "color": "green",
        "weight": "150",
        "delicious": "1",
        "created_at": "2016-06-06 17:59:00",
        "updated_at": "2016-06-06 17:59:00"
    },
    {
        "id": 2,
        "name": "banana",
        "color": "yellow",
        "weight": "116",
        "delicious": "1",
        "created_at": "2016-06-06 17:59:00",
        "updated_at": "2016-06-06 17:59:00"
    },
    {
        "id": 3,
        "name": "strawberries",
        "color": "red",
        "weight": "12",
        "delicious": "1",
        "created_at": "2016-06-06 17:59:00",
        "updated_at": "2016-06-06 17:59:00"
    }
]
```

### HTTP Request
`GET /api/fruits`

`HEAD /api/fruits`


## Returns the specified fruit info.

> Example request:

```bash
curl "http://fruits.dev/api/fruit/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://fruits.dev/api/fruit/{id}",
    "method": "GET",
        "headers": {
    "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
console.log(response);
});
```

> Example response:

```json
{
    "id": 3,
    "name": "strawberries",
    "color": "red",
    "weight": "12",
    "delicious": "1",
    "created_at": "2016-06-06 17:59:00",
    "updated_at": "2016-06-06 17:59:00"
}
```

### HTTP Request
`GET /api/fruit/{id}`

`HEAD /api/fruit/{id}`


## API Login, on success return JWT Auth token

> Example request:

```bash
curl "http://fruits.dev/api/authenticate" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://fruits.dev/api/authenticate",
    "method": "POST",
        "headers": {
    "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
console.log(response);
});
```


### HTTP Request
`POST /api/authenticate`


## Log out
Invalidate the token, so user cannot use it anymore
They have to relogin to get a new token

> Example request:

```bash
curl "http://fruits.dev/api/logout" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://fruits.dev/api/logout",
    "method": "POST",
        "headers": {
    "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
console.log(response);
});
```


### HTTP Request
`POST /api/logout`


## Refresh the token

> Example request:

```bash
curl "http://fruits.dev/api/token" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://fruits.dev/api/token",
    "method": "GET",
        "headers": {
    "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET /api/token`

`HEAD /api/token`


