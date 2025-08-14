---
method: imopenlines.session.open
scope: imopenlines
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---


---

# Получить чат по символьному коду imopenlines.session.open



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указаны типы параметров
- отсутствуют примеры
- отсутствует ответ в случае ошибки
- из файла Сергея: порекомендовать также метод получения чата по id объекта CRM, как более надежный





> Scope: [`imopenlines`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод возвращает идентификатор чата по USER_CODE.

## Параметры метода



#|
|| **Название**
`Тип` | **Пример** | **Описание** ||
|| **USER_CODE***
[`unknown`](../../../data-types.md) | `livechat`\|`58`\|`2042`\|`479` | Код чата, можно найти в ENTITY_ID ||
|#

## Примеры





- cURL (Webhook)

    // пример для cURL (Webhook)

- cURL (OAuth)

    // пример для cURL (OAuth)

- JS
    
    ```js
    BX24.callMethod(
        'imopenlines.session.open',
        {
            CHAT_ID: 2024
        },
        function(result)
        {
            if(result.error())
            {
                console.warn(result.error().ex);
                return false;
            }
            console.log(result.data());
        }
    );
    ```

- PHP

    // пример для php



## Ответ в случае успеха

```json
{
    "chatId":"2043"
}
```

## Ответ в случае ошибки

### Возможные коды ошибок

#|
|| **Код** | **Описание** ||
|| **ACCESS_DENIED** | У текущего пользователя нет доступа к указанному чату ||
|#
