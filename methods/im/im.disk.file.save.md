---
method: im.disk.file.save
scope: im
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---


---

# Сохранить файл на свой диск im.disk.file.save



Тут может не хватать некоторых данных — дополним в ближайшее время







- нужны правки под стандарт написания
- не указаны типы параметров
- отсутствуют примеры





> Scope: [`im`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `im.disk.file.save` сохраняет файл в свой Битрикс24.Диск.

#|
|| **Параметр** | **Пример** | **Описание** | **Ревизия** ||
|| **DISK_ID^*^**
[`unknown`](../../data-types.md) | `112` | Идентификатор файла | 21 ||
|#



## Примеры



- cURL

    // пример для cURL

- JS

    ```javascript
    BX24.callMethod(
        'im.disk.file.save',
        {
            'DISK_ID': 112,
        },
        function(result){
            if(result.error())
            {
                console.error(result.error().ex);
            }
            else
            {
                console.log(result.data());
            }
        }
    );
    ```

- PHP

    

    ```php
    $result = restCommand(
        'im.disk.file.save',
        Array(
            'DISK_ID' => 112,
        ),
        $_REQUEST[
            "auth"
        ]
    );
    ```





## Ответ в случае успеха

```json
{
"result": {
    "folder": {
        "id": 130,
        "name": "Сохраненные файлы"
        },
    "file": {
        "id": 578,
        "name": "image.png"
        }
    }
}
```

## Ответ в случае ошибки

```json
{
    "error": "FILE_ID_EMPTY",
    "error_description": "File ID can't be empty"
}
```

### Описание ключей

- `error` – код возникшей ошибки
- `error_description` – краткое описание возникшей ошибки

### Возможные коды ошибок

#|
|| **Код** | **Описание** ||
|| **FILE_SAVE_ERROR** | Файл не удалось сохранить ||
|| **FILE_ID_EMPTY** | Не передан идентификатор файла ||
|#


