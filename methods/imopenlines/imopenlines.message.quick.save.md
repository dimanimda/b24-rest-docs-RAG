---
method: imopenlines.message.quick.save
scope: imopenlines
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---


---

# Сохранить сообщение в качестве быстрого ответа imopenlines.message.quick.save



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указаны типы параметров
- отсутствуют примеры
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки





> Scope: [`imopenlines`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод сохраняет сообщение в быстрые ответы.

## Параметры метода



#|
|| **Название**
`Тип` | **Пример** | **Описание** ||
|| **CHAT_ID***
[`unknown`](../../../data-types.md) | `2014` | Идентификатор чата ||
|| **MESSAGE_ID***
[`unknown`](../../../data-types.md) | `18715` | Идентификатор сообщения ||
|#

## Примеры





- cURL (Webhook)

    // пример для cURL (Webhook)

- cURL (OAuth)

    // пример для cURL (OAuth)

- JS

    ```js
    BX.callMethod(
        'imopenlines.message.quick.save',
        {
            CHAT_ID: 2014,
            MESSAGE_ID: 18715
        },
        function(result)
        {
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

    // пример для php



## Ответ в случае успеха

```json
true
```

## Ответ в случае ошибки

### Возможные коды ошибок

#|
|| **Код** | **Описание** ||
|| **ACCESS_DENIED** | У текущего пользователя нет доступа к указанному методу ||
|| **CANT_SAVE_QUICK_ANSWER** | Ошибка сохранения быстрого ответа ||
|#
