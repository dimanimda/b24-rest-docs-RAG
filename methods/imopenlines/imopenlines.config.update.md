---
method: imopenlines.config.update
scope: imopenlines
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id","fields"],"properties":{"id":{"type":"integer"},"fields":{"type":"object"}}}
returns: {"type":"object"}
---


---

# Изменить открытую линию imopenlines.config.update



Тут может не хватать некоторых данных — дополним в ближайшее время







- нужны правки под стандарт написания
- не указаны типы параметров
- отсутствуют примеры
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки





> Scope: [`imopenlines`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод меняет открытую линию.

## Параметры метода



#|
|| **Название**
`Тип` | **Описание** ||
|| **CONFIG_ID***
[`unknown`](../../data-types.md) | ID линии ||
|| **PARAMS**
[`unknown`](../../data-types.md) | Массив параметров для обновления (необязательный). Список возможных полей есть в описании метода [imopenlines.config.add](./imopenlines-config-add.md) ||
|#

## Примеры





- cURL (Webhook)

    // пример для cURL (Webhook)

- cURL (OAuth)

    // пример для cURL (OAuth)

- JS

    ```js
    //imopenlines.config.update
    function configUpdate()
    {
        var params = {
            CONFIG_ID: 1,
            PARAMS: {
                LINE_NAME: 'New line name',
                ...
            }
        };
        BX24.callMethod(
            'imopenlines.config.update',
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



