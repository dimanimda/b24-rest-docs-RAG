---
method: im.chat.mute
scope: im
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---


---

# Отключить уведомления от чата im.chat.mute



Тут может не хватать некоторых данных — дополним в ближайшее время







- нужны правки под стандарт написания
- не указаны типы параметров
- отсутствуют примеры





> Scope: [`im`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `im.chat.mute` отключает уведомления в чате.

#|
|| **Параметр** | **Пример** | **Описание** | **Ревизия** ||
|| **CHAT_ID^*^**
[`unknown`](../../data-types.md) | `17` | Идентификатор чата | 19 ||
|| **MUTE^*^**
[`unknown`](../../data-types.md) | `Y` | Варианты ключа MUTE: `Y` для отключения уведомлений и `N` для включения. | 19 ||
|#



## Примеры



- cURL

    // пример для cURL

- JS

    ```javascript
    BX24.callMethod(
        'im.chat.mute',
        {
            'CHAT_ID': 17,
            'MUTE': 'Y'
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
        'im.chat.mute',
        Array(
            'CHAT_ID' => 17,
            'MUTE' => 'Y'
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
|#
