---
method: im.dialog.writing
scope: im
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---


---

# Отправить признак «вам пишут...» im.dialog.writing



Тут может не хватать некоторых данных — дополним в ближайшее время







- нужны правки под стандарт написания
- не указаны типы параметров
- отсутствуют примеры





> Scope: [`im`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `im.dialog.writing` отправляет статус «вам пишут...».

#|
|| **Параметр** | **Пример** | **Описание** | **Ревизия** ||
|| **DIALOG_ID^*^**
[`unknown`](../../data-types.md) | `13` | Идентификатор диалога. Формат:
- **chatXXX** – чат получателя, если сообщение для чата
- **XXX** – идентификатор получателя, если сообщение для приватного диалога | 30 ||
|#



## Примеры



- JS

    ```js
    B24.callMethod(
        'im.dialog.writing',
        {
            'DIALOG_ID': '13'
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
    "error_description": "Не передан идентификатор чата"
}
```

### Описание ключей

- `error` – код возникшей ошибки
- `error_description` – краткое описание возникшей ошибки

### Возможные коды ошибок

#|
|| **Код** | **Описание** ||
|| **DIALOG_ID_EMPTY** | Параметр `DIALOG_ID` не передан либо не соответствует формату `XXX` ||
|| **CHAT_ID_EMPTY** | Параметр `DIALOG_ID` не передан либо не соответствует формату `chatXXX` ||
|| **ACCESS_ERROR**| У пользователя нет прав на данный чат ||
|#
