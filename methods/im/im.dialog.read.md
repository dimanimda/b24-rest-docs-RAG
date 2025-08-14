---
method: im.dialog.read
scope: im
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---


---

# Установить признак «прочитано» у сообщений im.dialog.read



Тут может не хватать некоторых данных — дополним в ближайшее время







- нужны правки под стандарт написания
- не указаны типы параметров
- отсутствуют примеры





> Scope: [`im`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `im.dialog.read` меняет факт прочтения сообщений. Все сообщения до указанного (включая само сообщение) помечаются как прочитанные.

#|
|| **Параметр** | **Пример** | **Описание** | **Ревизия** ||
|| **DIALOG_ID^*^**
[`unknown`](../../data-types.md) | `chat29`
или
`256` | Идентификатор диалога. Формат:
- **chatXXX** – чат получателя, если сообщение для чата
- **XXX** – идентификатор получателя, если сообщение для приватного диалога | 21 ||
|| **MESSAGE_ID^*^**
[`unknown`](../../data-types.md) | `12` | Идентификатор последнего прочитанного сообщения в диалоге | 21 ||
|#



## Примеры 



- cURL

    // пример для cURL

- JS

    ```js
    BX24.callMethod(
        'im.dialog.read',
        {
            'DIALOG_ID': chat29,
            'MESSAGE_ID': 12,
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
        'im.dialog.read',
        Array(
            'DIALOG_ID' => chat29,
        'MESSAGE_ID' => 12,
        ),
        $_REQUEST[
            "auth"
        ]
    );
    ```





## Ответ в случае успеха

```json
{
    "result":
    {
        "dialogId": "chat76",
        "chatId": 76,
        "counter": 1,
        "lastId": 6930
    }
}
```

- **dialogId** – идентификатор прочитанного диалога
- **chatId** – идентификатор чата
- **counter** – кол-во непрочитанных сообщений после выполнения метода
- **lastId** – последнее прочитанное сообщение

Если метод не смог установить новую метку прочтения:

```json
{
"result": false
}
```

## Ответ в случае ошибки

```json
{
    "error": "MESSAGE_ID_ERROR",
    "error_description": "Message ID can't be empty"
}
```

### Описание ключей

- `error` – код возникшей ошибки
- `error_description` – краткое описание возникшей ошибки

### Возможные коды ошибок

#|
|| **Код** | **Описание** ||
|| **MESSAGE_ID_ERROR** | Указан некорректный идентификатор сообщения ||
|| **DIALOG_ID_EMPTY** | Указан некорректный идентификатор диалога ||
|#
