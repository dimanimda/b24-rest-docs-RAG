---
method: im.recent.unread
scope: im
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---


---

# Установить или снять признак «прочитано» у чата im.recent.unread



Тут может не хватать некоторых данных — дополним в ближайшее время







- нужны правки под стандарт написания
- не указаны типы параметров
- отсутствуют примеры





> Scope: [`im`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `im.recent.unread` устанавливает метку «не прочитан» на чат или диалог.

#|
|| **Параметр** | **Пример** | **Описание** | **Ревизия** ||
|| **DIALOG_ID^*^**
[`unknown`](../../data-types.md) | `'chat74'` | Идентификатор диалога. Формат:
- **chatXXX** – чат получателя, если сообщение для чата
- **XXX** – идентификатор получателя, если сообщение для приватного диалога | 30 ||
|| **ACTION**
[`unknown`](../../data-types.md) | `'Y'` | Поставить / снять метку «не прочитан» на диалог - `'Y'|'N'` | 30 ||
|#



## Примеры



- JS

    ```js
    BX24.callMethod(
        'im.recent.unread',
        {
            DIALOG_ID: 'chat74',
            ACTION: 'Y'
        },
        res => {
            if (res.error())
            {
            console.error(result.error().ex);
            }
            else
            {
            console.log(res.data())
            }
        }
    )
    ```





## Ответ в случае успеха

```json
{
    "result": true //если удалось поставить|снять метку
}
```

## Ответ в случае ошибки

```json
{
    "error":"DIALOG_ID_EMPTY",
    "error_description":"Dialog ID can't be empty"
}
```

### Описание ключей

- `error` – код возникшей ошибки
- `error_description` – краткое описание возникшей ошибки

### Возможные коды ошибок

#|
|| **Код** | **Описание** ||
|| **DIALOG_ID_EMPTY** | Не передан параметр `DIALOG_ID` или он не соответствует формату. ||
|#
