---
method: disk.file.delete
scope: disk
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id"],"properties":{"id":{"type":"integer"}}}
returns: {"type":"object"}
---


---

# Уничтожить файл навсегда disk.file.delete





- не указаны типы параметров
- не указана обязательность параметров
- отсутствуют примеры (должно быть три примера - curl, js, php)
- отсутствует ответ в случае ошибки







Тут может не хватать некоторых данных — дополним в ближайшее время



> Scope: [`disk`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `disk.file.delete` уничтожает файл навсегда.

## Параметры

#|
||  **Параметр** / **Тип**| **Описание** ||
|| **id**
[`unknown`](../../data-types.md) | Идентификатор файла. ||
|#

## Пример



- JS

    ```js
    BX24.callMethod(
        "disk.file.delete",
        {
            id: 10
        },
        function (result)
        {
            if (result.error())
                console.error(result.error());
            else
                console.dir(result.data());
        }
    );
    ```





## Ответ в случае успеха

> 200 OK

```json
"result": true
```
Успешное уничтожение файла.
