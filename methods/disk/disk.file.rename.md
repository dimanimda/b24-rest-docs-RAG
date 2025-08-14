---
method: disk.file.rename
scope: disk
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---


---

# Переименовать файл disk.file.rename





- не указаны типы параметров
- не указана обязательность параметров
- отсутствуют примеры (должно быть три примера - curl, js, php)
- отсутствует ответ в случае ошибки







Тут может не хватать некоторых данных — дополним в ближайшее время



> Scope: [`disk`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `disk.file.rename` переименовывает файл.

## Параметры

#|
||  **Параметр** / **Тип**| **Описание** ||
|| **id**
[`unknown`](../../data-types.md) | Идентификатор файла. ||
|| **newName**
[`unknown`](../../data-types.md) | Новое имя. ||
|#

## Пример



- JS

    ```js
    BX24.callMethod(
        "disk.file.rename",
        {
            id: 10,
            newName: 'Newname for file.png'
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

В ответе та же структура, как и в [disk.file.get](./disk-file-get.md).
