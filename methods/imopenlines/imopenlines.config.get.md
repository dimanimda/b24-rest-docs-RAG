---
method: imopenlines.config.get
scope: imopenlines
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id"],"properties":{"id":{"type":"integer"}}}
returns: {"type":"object"}
---


---

# Получить открытую линию по Id imopenlines.config.get



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указаны типы параметров
- отсутствуют примеры
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки





> Scope: [`imopenlines`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод получает открытую линию по её ID.

## Параметры метода



#|
|| **Название**
`Тип` | **Описание** ||
|| **CONFIG_ID***
[`unknown`](../../data-types.md) | ID линии ||
|| **WITH_QUEUE**
[`unknown`](../../data-types.md) | Выводить со списком операторов линии (Y/N, по-умолчанию: Y) ||
|| **SHOW_OFFLINE**
[`unknown`](../../data-types.md) | Показывать ли список вместе с операторами, которые не в сети (Y/N, по-умолчанию: Y) ||
|#

## Примеры





- cURL (Webhook)

    // пример для cURL (Webhook)

- cURL (OAuth)

    // пример для cURL (OAuth)

- JS

    ```js
    //imopenlines.config.get
    function configGet()
    {
        var params = {
            CONFIG_ID:    1,
            WITH_QUEUE: 'Y',
            SHOW_OFFLINE: 'Y'
        };
        BX24.callMethod(
            'imopenlines.config.get',
            params,
            function (result) {
                if (result.error())
                    alert("Error: " + result.error());
                else
                    alert("Успешно: " + result.data());
            }
        );
    }
    ```

- PHP

    // пример для php




