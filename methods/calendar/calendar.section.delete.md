---
method: calendar.section.delete
scope: calendar
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id"],"properties":{"id":{"type":"integer"}}}
returns: {"type":"object"}
---


---

# Удалить календарь calendar.section.delete

> Scope: [`calendar`](../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод удаляет календарь.

## Параметры метода



#|
|| **Название**
`тип` | **Описание** ||
|| **type***
[`string`](../data-types.md) | Тип календаря: 
- `user` — календарь пользователя
- `group` — календарь группы ||
|| **ownerId***
[`integer`](../data-types.md) | Идентификатор владельца календаря ||
|| **id***
[`integer`](../data-types.md) | Идентификатор календаря ||
|#

## Примеры кода





- cURL (Webhook)

    ```bash
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"type":"user","ownerId":2,"id":521}' \
    https://**put_your_bitrix24_address**/rest/**put_your_user_id_here**/**put_your_webbhook_here**/calendar.section.delete
    ```

- cURL (OAuth)

    ```bash
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"type":"user","ownerId":2,"id":521,"auth":"**put_access_token_here**"}' \
    https://**put_your_bitrix24_address**/rest/calendar.section.delete
    ```

- JS

    ```js
    BX24.callMethod(
        'calendar.section.delete',
        {
            type: 'user',
            ownerId: 2,
            id: 521
        }
    );
    ```

- PHP

    ```php
    require_once('crest.php');

    $result = CRest::call(
        'calendar.section.delete',
        [
            'type' => 'user',
            'ownerId' => 2,
            'id' => 521
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
        "start": 1733822629.623482,
        "finish": 1733822629.878903,
        "duration": 0.2554209232330322,
        "processing": 0.049089908599853516,
        "date_start": "2024-12-08T09:23:49+00:00",
        "date_finish": "2024-12-08T09:23:49+00:00"
    }
}
```

### Возвращаемые данные

#|
|| **Название**
`тип` | **Описание** ||
|| **result**
[`boolean`](../data-types.md) | Результат удаления календаря.

Возвращает `true`, если календарь успешно удален ||
|#

## Обработка ошибок

HTTP-статус: **400**

```json
{
    "error": "",
    "error_description": "Не задан обязательный параметр "type" для метода "calendar.section.delete""
}
```



### Возможные коды ошибок

#|
|| **Код** | **Сообщение об ошибке** | **Описание** ||
|| Пустая строка | Не задан обязательный параметр "type" для метода "calendar.section.delete" | Не передан обязательный параметр `type` ||
|| Пустая строка | Не задан обязательный параметр "ownerId" для метода "calendar.section.add" | Не передан обязательный параметр `ownerId` и параметр `type` не равен `user` ||
|| Пустая строка | Не задан id секции | Не передан обязательный параметр `id` ||
|| Пустая строка | Доступ запрещен | Календарь с указанным `id` не существует или нет прав для редактирования календаря ||
|| Пустая строка | При удалении секции произошла ошибка | Другая ошибка ||
|#



## Продолжите изучение 

- [{#T}](./index.md)
- [{#T}](./calendar-section-add.md)
- [{#T}](./calendar-section-update.md)
- [{#T}](./calendar-settings-get.md)
