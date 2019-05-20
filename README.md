# Chanllenge

##Esta apirest expone los siguientes servicios:

Method 		Servicio		Path
POST		addUser			/api/user/addUser
GET			getUser			/api/user/getUser
POST		addPayment		/api/payment/addPayment
GET			getPayment		/api/payment/getPayment


##Json para importar a Restlet Client

{
  "front-version": "2.19.2",
  "version": 3,
  "nodes": [
    {
      "type": "Project",
      "id": "1a4faa6f-ec3d-4084-b698-1a7fc661e610",
      "lastModified": "2019-05-19T19:34:36.452-03:00",
      "name": "CHALLENGE"
    },
    {
      "type": "Request",
      "method": {
        "requestBody": true,
        "link": "http://tools.ietf.org/html/rfc7231#section-4.3.3",
        "name": "POST"
      },
      "body": {
        "formBody": {
          "overrideContentType": true,
          "encoding": "application/x-www-form-urlencoded",
          "items": []
        },
        "bodyType": "Text",
        "autoSetLength": true,
        "textBody": "{\n  \"phone\": \"45645612\",\n  \"amount\": \"235\"\n}"
      },
      "headersType": "Form",
      "uri": {
        "query": {
          "delimiter": "&",
          "items": []
        },
        "scheme": {
          "name": "http",
          "version": "V11"
        },
        "host": "apirest.test",
        "path": "/api/payment/addPayment"
      },
      "id": "f4420ad9-dd7b-4da2-9d08-055824876bda",
      "lastModified": "2019-05-19T16:15:52.420-03:00",
      "name": "addPayment",
      "headers": [
        {
          "enabled": true,
          "name": "Authorization ",
          "value": "eyJhbGciOiJIUzI1NiIsInR5cCI6ImFjY2VzcyJ9.eyJ1c2VySWQiOiJhY0dtSDdYUXVSdTlGdkl3IiwiaWF0IjoxNTUzNTM4OTMwLCJleHAiOjE1NTM2MjUzMzAsImF1ZCI6Imh0dHBzOi8veW91cmRvbWFpbi5jb20iLCJpc3MiOiJmZWF0aGVycyIsInN1YiI6ImFub255bW91cyIsImp0aSI6IjE3MTc4YWZlLTIyNDAtNDhkYi04MGQ4LTUxM2Y5NDA5NDQzMiJ9.RUVVsSXS0jscpR-As-vqx7Ok3qA85_z2DRo1VIn4X_4"
        },
        {
          "enabled": true,
          "name": "Content-Type",
          "value": "application/json"
        }
      ],
      "metaInfo": {
        "IS_FROM_HISTORY": null
      },
      "parentId": "1a4faa6f-ec3d-4084-b698-1a7fc661e610"
    },
    {
      "type": "Request",
      "method": {
        "requestBody": true,
        "link": "http://tools.ietf.org/html/rfc7231#section-4.3.3",
        "name": "POST"
      },
      "body": {
        "formBody": {
          "overrideContentType": true,
          "encoding": "application/x-www-form-urlencoded",
          "items": []
        },
        "bodyType": "Text",
        "autoSetLength": true,
        "textBody": "{\n  \"phone\": \"45645612\",\n  \"password\": \"123456\",\n  \"site\": \"www.apirest.com\"\n}"
      },
      "headersType": "Form",
      "uri": {
        "query": {
          "delimiter": "&",
          "items": []
        },
        "scheme": {
          "name": "http",
          "version": "V11"
        },
        "host": "apirest.test",
        "path": "/api/user/addUser"
      },
      "id": "16e5b360-72f1-4407-ac2f-37b9da52f527",
      "lastModified": "2019-05-19T16:15:35.331-03:00",
      "name": "addUser",
      "headers": [
        {
          "enabled": true,
          "name": "Authorization ",
          "value": "eyJhbGciOiJIUzI1NiIsInR5cCI6ImFjY2VzcyJ9.eyJ1c2VySWQiOiJhY0dtSDdYUXVSdTlGdkl3IiwiaWF0IjoxNTUzNTM4OTMwLCJleHAiOjE1NTM2MjUzMzAsImF1ZCI6Imh0dHBzOi8veW91cmRvbWFpbi5jb20iLCJpc3MiOiJmZWF0aGVycyIsInN1YiI6ImFub255bW91cyIsImp0aSI6IjE3MTc4YWZlLTIyNDAtNDhkYi04MGQ4LTUxM2Y5NDA5NDQzMiJ9.RUVVsSXS0jscpR-As-vqx7Ok3qA85_z2DRo1VIn4X_4"
        },
        {
          "enabled": true,
          "name": "Content-Type",
          "value": "application/json"
        }
      ],
      "metaInfo": {
        "IS_FROM_HISTORY": null
      },
      "parentId": "1a4faa6f-ec3d-4084-b698-1a7fc661e610"
    },
    {
      "type": "Request",
      "method": {
        "link": "http://tools.ietf.org/html/rfc7231#section-4.3.1",
        "name": "GET"
      },
      "body": {
        "formBody": {
          "overrideContentType": true,
          "encoding": "application/x-www-form-urlencoded",
          "items": []
        },
        "bodyType": "Text",
        "autoSetLength": true,
        "textBody": "{\n  \"phone\": \"45645612\",\n  \"amount\": \"235\"\n}"
      },
      "headersType": "Form",
      "uri": {
        "query": {
          "delimiter": "&",
          "items": []
        },
        "scheme": {
          "name": "http",
          "version": "V11"
        },
        "host": "apirest.test",
        "path": "/api/payment/getPayment"
      },
      "id": "a5af703d-a821-46f7-84a4-0a3a16cb7fe2",
      "lastModified": "2019-05-19T16:15:56.979-03:00",
      "name": "getPayment",
      "headers": [
        {
          "enabled": true,
          "name": "Authorization ",
          "value": "eyJhbGciOiJIUzI1NiIsInR5cCI6ImFjY2VzcyJ9.eyJ1c2VySWQiOiJhY0dtSDdYUXVSdTlGdkl3IiwiaWF0IjoxNTUzNTM4OTMwLCJleHAiOjE1NTM2MjUzMzAsImF1ZCI6Imh0dHBzOi8veW91cmRvbWFpbi5jb20iLCJpc3MiOiJmZWF0aGVycyIsInN1YiI6ImFub255bW91cyIsImp0aSI6IjE3MTc4YWZlLTIyNDAtNDhkYi04MGQ4LTUxM2Y5NDA5NDQzMiJ9.RUVVsSXS0jscpR-As-vqx7Ok3qA85_z2DRo1VIn4X_4"
        }
      ],
      "metaInfo": {
        "IS_FROM_HISTORY": null
      },
      "parentId": "1a4faa6f-ec3d-4084-b698-1a7fc661e610"
    },
    {
      "type": "Request",
      "method": {
        "link": "http://tools.ietf.org/html/rfc7231#section-4.3.1",
        "name": "GET"
      },
      "body": {
        "formBody": {
          "overrideContentType": true,
          "encoding": "application/x-www-form-urlencoded",
          "items": []
        },
        "bodyType": "Text",
        "autoSetLength": true,
        "textBody": "{\n  \"telefono\": \"45645612\",\n  \"password\": \"123456\",\n  \"site\": \"www.apirest.com\"\n}"
      },
      "headersType": "Form",
      "uri": {
        "query": {
          "delimiter": "&",
          "items": []
        },
        "scheme": {
          "name": "http",
          "version": "V11"
        },
        "host": "apirest.test",
        "path": "/api/payment/getPaymentByIdUser/5ce06fd3d9ed6731040072d2"
      },
      "id": "e8c01a06-e77d-4c68-9437-e735e7adbec3",
      "lastModified": "2019-05-19T19:34:36.453-03:00",
      "name": "getPaymentByIdUser",
      "headers": [
        {
          "enabled": true,
          "name": "Authorization ",
          "value": "eyJhbGciOiJIUzI1NiIsInR5cCI6ImFjY2VzcyJ9.eyJ1c2VySWQiOiJhY0dtSDdYUXVSdTlGdkl3IiwiaWF0IjoxNTUzNTM4OTMwLCJleHAiOjE1NTM2MjUzMzAsImF1ZCI6Imh0dHBzOi8veW91cmRvbWFpbi5jb20iLCJpc3MiOiJmZWF0aGVycyIsInN1YiI6ImFub255bW91cyIsImp0aSI6IjE3MTc4YWZlLTIyNDAtNDhkYi04MGQ4LTUxM2Y5NDA5NDQzMiJ9.RUVVsSXS0jscpR-As-vqx7Ok3qA85_z2DRo1VIn4X_4"
        },
        {
          "enabled": true,
          "name": "Content-Type",
          "value": "application/json"
        }
      ],
      "metaInfo": {
        "IS_FROM_HISTORY": null
      },
      "parentId": "1a4faa6f-ec3d-4084-b698-1a7fc661e610"
    },
    {
      "type": "Request",
      "method": {
        "link": "http://tools.ietf.org/html/rfc7231#section-4.3.1",
        "name": "GET"
      },
      "body": {
        "formBody": {
          "overrideContentType": true,
          "encoding": "application/x-www-form-urlencoded",
          "items": []
        },
        "bodyType": "Text",
        "autoSetLength": true,
        "textBody": "{\n  \"telefono\": \"45645612\",\n  \"password\": \"123456\",\n  \"site\": \"www.apirest.com\"\n}"
      },
      "headersType": "Form",
      "uri": {
        "query": {
          "delimiter": "&",
          "items": []
        },
        "scheme": {
          "name": "http",
          "version": "V11"
        },
        "host": "apirest.test",
        "path": "/api/user/getAllUser"
      },
      "id": "df11f7d8-e727-4a17-a969-700036087fe9",
      "lastModified": "2019-05-19T16:15:25.550-03:00",
      "name": "getUser",
      "headers": [
        {
          "enabled": true,
          "name": "Authorization ",
          "value": "eyJhbGciOiJIUzI1NiIsInR5cCI6ImFjY2VzcyJ9.eyJ1c2VySWQiOiJhY0dtSDdYUXVSdTlGdkl3IiwiaWF0IjoxNTUzNTM4OTMwLCJleHAiOjE1NTM2MjUzMzAsImF1ZCI6Imh0dHBzOi8veW91cmRvbWFpbi5jb20iLCJpc3MiOiJmZWF0aGVycyIsInN1YiI6ImFub255bW91cyIsImp0aSI6IjE3MTc4YWZlLTIyNDAtNDhkYi04MGQ4LTUxM2Y5NDA5NDQzMiJ9.RUVVsSXS0jscpR-As-vqx7Ok3qA85_z2DRo1VIn4X_4"
        },
        {
          "enabled": true,
          "name": "Content-Type",
          "value": "application/json"
        }
      ],
      "metaInfo": {
        "IS_FROM_HISTORY": null
      },
      "parentId": "1a4faa6f-ec3d-4084-b698-1a7fc661e610"
    }
  ]
}


## Comando para enviar cantidad de Usuarios sin pagos registrados

php artisan email:payments

se debe configurar el archivo .env con las siguiente variables

MAIL_FROM_ADDRESS=apirest@challenge.com
MAIL_FROM_NAME=Challenge
MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_username
MAIL_PASSWORD=your_password
MAIL_ENCRYPTION=null

## se debe configurar la base de datos con MongoDB

MONGO_DB_HOST=127.0.0.1
MONGO_DB_PORT=27017
MONGO_DB_DATABASE=apirestdb
MONGO_DB_USERNAME=
MONGO_DB_PASSWORD=
