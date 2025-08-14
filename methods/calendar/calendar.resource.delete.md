---
method: calendar.resource.delete
scope: calendar
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id"],"properties":{"id":{"type":"integer"}}}
returns: {"type":"object"}
---


---

# Удалить ресурс calendar.resource.delete

> Scope: [`calendar`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод удаляет ресурс.

## Параметры метода



#|
|| **Название**
`тип` | **Описание** ||
|| **resourceId*** | Идентификатор ресурса.

Получить идентификатор можно методом создания ресурса [calendar.resource.add](./calendar-resource-add.md) или методом получения списка ресурсов [calendar.resource.list](./calendar-resource-list.md) ||
|#

## Примеры кода



- cURL (Webhook)

    ```bash
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"resourceId":521}' \
    https://**put_your_bitrix24_address**/rest/**put_your_user_id_here**/**put_your_webbhook_here**/calendar.resource.delete
    ```

- cURL (OAuth)

    ```bash
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"resourceId":521,"auth":"**put_access_token_here**"}' \
    https://**put_your_bitrix24_address**/rest/calendar.resource.delete
    ```

- JS

    ```js
    BX24.callMethod(
        'calendar.resource.delete',
        {
            resourceId: 521
        }
    );
    ```

- PHP

    ```php
    require_once('crest.php');

    $result = CRest::call(
        'calendar.resource.delete',
        [
            'resourceId' => 521
        ]
    );

    echo '<PRE>';
    print_r($result);
    echo '</PRE>';
    ```





## Обработка ответа

HTTP-статус: **200**

```json
{
    "result": true,
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
[`boolean`](../../data-types.md) | В случае успешного удаления возвращает `true` ||
|#

## Обработка ошибок

HTTP-статус: **400**

```json
{
    "error": "",
    "error_description": "Не задан обязательный параметр "resourceId" для метода "calendar.resource.delete""
}
```



### Возможные коды ошибок

#|
|| **Код** | **Сообщение об ошибке** | **Описание** ||
|| Пустая строка | Не задан обязательный параметр "resourceId" для метода "calendar.resource.delete" | Не передан обязательный параметр `resourceId` ||
|| Пустая строка | Доступ запрещен | Метод вызывается внешним пользователем или пользователю запрещёно изменение ресурсов ||
|| Пустая строка | При удалении секции произошла ошибка | Другая ошибка ||
|#



## Продолжите изучение 

- [{#T}](./index.md)
- [{#T}](./calendar-resource-add.md)
- [{#T}](./calendar-resource-update.md)
- [{#T}](./calendar-resource-booking-list.md)
- [{#T}](./calendar-resource-list.md)
