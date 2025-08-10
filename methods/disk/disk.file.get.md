---
method: disk.file.get
scope: disk
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id"],"properties":{"id":{"type":"integer"}}}
returns: {"type":"object"}
---

Auto-generated stub. Fill in params/returns/examples.

---

# Загрузить новый файл в корень хранилища disk.storage.uploadfile





- не указаны типы параметров
- не указана обязательность параметров
- отсутствует ответ в случае ошибки







Тут может не хватать некоторых данных — дополним в ближайшее время



> Scope: [`disk`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `disk.storage.uploadfile` загружает новый файл в корне хранилища.

## Параметры

#|
||  **Параметр** / **Тип**| **Описание** ||
|| **id**
[`unknown`](../../data-types.md) | Идентификатор хранилища. ||
|| **fileContent**
[`unknown`](../../data-types.md) | Загрузка файла в формате [Base64](../../files/how-to-upload-files.md). ||
|| **data**
[`unknown`](../../data-types.md) | Массив, описывающий файл. Обязательное поле `NAME` - имя нового файла. ||
|| **generateUniqueName**
[`unknown`](../../data-types.md) | Необязательный, по умолчанию `false`. При указании `true`, для загружаемого файла будет уникализировано имя, добавлением суффикса (1), (2) и т.п. Пример: avatar (1).jpg, avatar (2).jpg.||
|| **rights**
[`unknown`](../../data-types.md) | Необязательный, по умолчанию пустой массив. Массив прав доступа на загружаемый файл. ||
|#

## Пример



Обратите внимание, что список доступных идентификаторов `TASK_ID` для установки прав можно получить методом [disk.rights.getTasks](../rights/disk-rights-get-tasks.md).





- JS

    ```js
    BX24.callMethod(
        "disk.storage.uploadFile",
        {
            id: 4,
            data: {
                NAME: "avatar.jpg"
            },
            fileContent: document.getElementById('test_file_input'),
            generateUniqueName: true,
            rights: [
                {
                    TASK_ID: 42,
                    ACCESS_CODE: 'U35' //доступ для пользователя с ID=35
                },
                {
                    TASK_ID: 38,
                    ACCESS_CODE: 'U2' //доступ для пользователя с ID=2
                }
            ]
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

В случае успеха возвращает структуру, аналогичную приведенной в [disk.file.get](../file/disk-file-get.md).

```json
"result": {
    "ID": "10",
    "NAME": "2511.jpg",
    "CODE": null,
    "STORAGE_ID": "4",
    "TYPE": "file",
    "PARENT_ID": "8",
    "DELETED_TYPE": "0",
    "CREATE_TIME": "2015-04-24T10:41:51+03:00",
    "UPDATE_TIME": "2015-04-24T15:52:43+03:00",
    "DELETE_TIME": null,
    "CREATED_BY": "1",
    "UPDATED_BY": "1",
    "DELETED_BY": "0",
    "DOWNLOAD_URL": "https://test.bitrix24.ru/disk/downloadFile/10/?&ncc=1&filename=2511.jpg&auth=******",
    "DETAIL_URL": "https://test.bitrix24.ru/workgroups/group/3/disk/file/2511.jpg"
}
```
