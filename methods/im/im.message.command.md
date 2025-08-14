---
method: im.message.command
scope: im
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---


---

# Использование команды бота im.message.command



Тут может не хватать некоторых данных — дополним в ближайшее время







- нужны правки под стандарт написания
- не указаны типы параметров
- отсутствуют примеры





> Scope: [`im`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `im.message.command` использует команды бота.

#|
|| **Параметр** | **Пример** | **Описание** | **Ревизия** ||
|| **MESSAGE_ID^*^**
[`unknown`](../../data-types.md) | `278` | Идентификатор сообщения с возможностью отдать команду боту | 30 ||
|| **BOT_ID^*^**
[`unknown`](../../data-types.md) | `1` | Идентификатор бота в чате | 30 ||
|| **COMMAND^*^**
[`unknown`](../../data-types.md) | `'KEYBOARD'` | Команда, которую должен выполнить бот | 30 ||
|| **COMMAND_PARAMS^*^**
[`unknown`](../../data-types.md) | `'stop'` | Параметры команды | 30 ||
|#



Необходимо передавать сообщение, в котором есть выбор команд бота.

## Примеры



- JS

    ```javascript
    B24.callMethod(
        'im.message.command',
        {
            MESSAGE_ID: 278,
            BOT_ID: 1,
            COMMAND: 'KEYBOARD',
            COMMAND_PARAMS: 'stop'
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
    "result": true
}
```

## Ответ в случае ошибки

```json
{
    "error": "PARAMS_ERROR",
    "error_description": "Incorrect params"
}
```

### Описание ключей

- `error` – код возникшей ошибки
- `error_description` – краткое описание возникшей ошибки

### Возможные коды ошибок

#|
|| **Код** | **Описание** ||
|| **MESSAGE_ID_ERROR** | Параметр `MESSAGE_ID` не задан или не является числом ||
|| **BOT_ID_ERROR** | Параметр `BOT_ID` не задан или не является числом ||
|| **COMMAND_ERROR** | Параметр `COMMAND` не задан ||
|| **PARAMS_ERROR** | Параметр `COMMAND_PARAMS` не задан или не соответствует параметру команды бота ||
|#
