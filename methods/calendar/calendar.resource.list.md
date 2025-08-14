---
method: calendar.resource.list
scope: calendar
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object","properties":{"filter":{"type":"object"},"order":{"type":"object"},"select":{"type":"array","items":{"type":"string"}},"start":{"type":["integer","string"]}}}
returns: {"type":"array","items":{"type":"object"}}
---


---

# Получить список всех ресурсов calendar.resource.list

> Scope: [`calendar`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод получает список всех ресурсов.

Без параметров.

## Примеры кода





- cURL (Webhook)

    ```bash
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"auth":"**put_access_token_here**"}' \
    https://**put_your_bitrix24_address**/rest/calendar.resource.list
    ```

- cURL (OAuth)

    ```bash
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"auth":"**put_access_token_here**"}' \
    https://**put_your_bitrix24_address**/rest/calendar.resource.list
    ```

- JS

    ```js
    BX24.callMethod(
        'calendar.resource.list'
    )
    ```

- PHP

    ```php
    require_once('crest.php');

    $result = CRest::call(
        'calendar.resource.list',
        []
    );

    echo '<PRE>';
    print_r($result);
    echo '</PRE>';
    ```



## Обработка ответа

HTTP-статус: **200**

```json
{
    "result": [
        {
            "ID": "198",
            "NAME": "Resource name",
            "CREATED_BY": "1"
        },
        {
            "ID": "199",
            ...
        }
    ],
    "time": {
        "start": 1733318565.183275,
        "finish": 1733318565.695058,
        "duration": 0.5117831230163574,
        "processing": 0.29406094551086426,
        "date_start": "2024-12-04T13:22:45+00:00",
        "date_finish": "2024-12-04T13:22:45+00:00"
    }
}
```

### Возвращаемые данные

#|
|| **Название**
`тип` | **Описание** ||
|| **result**
[`array`](../../data-types.md) | Массив объектов. Каждый объект содержит описание [ресурса](#resource) ||
|#

#### Объект ресурса {#resource}
#|
|| **Название**
`тип` | **Описание** ||
|| **ID**
[`string`](../../data-types.md) | Идентификатор ресурса ||
|| **NAME**
[`string`](../../data-types.md) | Наименование ресурса ||
|| **CREATED_BY**
[`string`](../../data-types.md) | Идентификатор пользователя — создателя ресурса ||
|#

## Обработка ошибок

HTTP-статус: **400**

```json
{
    "error": "",
    "error_description": "Доступ запрещен"
}
```



### Возможные коды ошибок

#|
|| **Код** | **Сообщение об ошибке** | **Описание** ||
|| Пустая строка | Доступ запрещен | Запрещен доступ к методу для внешних пользователей ||
|#



## Продолжите изучение 

- [{#T}](./index.md)
- [{#T}](./calendar-resource-add.md)
- [{#T}](./calendar-resource-update.md)
- [{#T}](./calendar-resource-booking-list.md)
- [{#T}](./calendar-resource-delete.md)
