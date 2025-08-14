---
method: im.dialog.unread
scope: im
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---


---

# Установить признак «не прочитано» у сообщений im.dialog.unread



Тут может не хватать некоторых данных — дополним в ближайшее время







- нужны правки под стандарт написания
- не указаны типы параметров
- отсутствуют примеры





> Scope: [`im`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `im.dialog.unread` меняет факт прочтения сообщений. Все сообщения после указанного (включая само сообщение) помечаются как непрочитанные.

#|
|| **Параметр** | **Пример** | **Описание** | **Ревизия** ||
|| **DIALOG_ID^*^**
[`unknown`](../../data-types.md) | `chat29`
или
`256` | Идентификатор диалога. Формат:
- **chatXXX** – чат получателя, если сообщение для чата
- **XXX** – идентификатор получателя, если сообщение для приватного диалога | 21 ||
|| **MESSAGE_ID^*^**
[`unknown`](../../data-types.md) | `12` | Идентификатор первого непрочитанного диалога | 21 ||
|#



## Примеры



- cURL

    // пример для cURL

- JS

    ```js
    BX24.callMethod(
        'im.dialog.unread',
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
        'im.dialog.unread',
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
    "result": true
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
