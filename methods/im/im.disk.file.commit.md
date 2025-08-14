---
method: im.disk.file.commit
scope: im
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---


---

# Добавить файл в чат im.disk.file.commit



Тут может не хватать некоторых данных — дополним в ближайшее время







- нужны правки под стандарт написания
- не указаны типы параметров
- отсутствуют примеры





> Scope: [`im`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `im.disk.file.commit` публикует загруженный файл в чат.

#|
|| **Параметр** | **Пример** | **Описание** | **Ревизия** ||
|| **CHAT_ID^*^**
[`unknown`](../../data-types.md) | `17` | Идентификатор чата | 18 ||
|| **UPLOAD_ID^*^**
[`unknown`](../../data-types.md) | `213` | Идентификатор загруженного файла через методы модуля DISK | 18 ||
|| **DISK_ID^*^**
[`unknown`](../../data-types.md) | `112` | Идентификатор файла, доступного из локального диска | 18 ||
|| **MESSAGE**
[`unknown`](../../data-types.md) | `Важный документ` | Описание файла будет опубликовано в чате | 18 ||
|| **SILENT_MODE**
[`unknown`](../../data-types.md) | `N` | Параметр для чата Открытых линий, обозначает, будет ли отправлена информация о файле клиенту или нет | 18 ||
|#



Для успешного вызова API нужно указать `CHAT_ID` и **одно из двух** полей – `UPLOAD_ID` или `DISK_ID`.



Файл должен быть предварительно загружен через метод [disk.folder.uploadfile](../../disk/folder/disk-folder-upload-file.md).



## Примеры



- cURL

    // пример для cURL

- JS

    ```js
    BX24.callMethod(
        'im.disk.file.commit',
        {
            'CHAT_ID': 17,
            'UPLOAD_ID': 112,
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
        'im.disk.file.commit',
        Array(
            'CHAT_ID' => 17,
            'UPLOAD_ID' => 112,
        ),
        $_REQUEST[
            "auth"
        ]
    );
    ```




## Ответ в случае успеха

```json
{
    "result": true
}
```

## Ответ в случае ошибки

```json
{
    "error": "CHAT_ID_EMPTY",
    "error_description": "Chat ID can't be empty"
}
```

### Описание ключей

- `error` – код возникшей ошибки
- `error_description` – краткое описание возникшей ошибки

### Возможные коды ошибок

#|
|| **Код** | **Описание** ||
|| **CHAT_ID_EMPTY** | Не передан идентификатор чата ||
|| **ACCESS_ERROR** | Текущий пользователь не имеет прав доступа к диалогу ||
|| **FILES_ERROR** | Не переданы идентификаторы файлов ||
|#


