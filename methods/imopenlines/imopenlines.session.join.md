---
method: imopenlines.session.join
scope: imopenlines
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---


---

# Присоединиться к диалогу imopenlines.session.join



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указаны типы параметров
- отсутствуют примеры
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки
- из файла Сергея: упомянуть, что это делается для пользователя, с чьими токенами вызывается метод





> Scope: [`imopenlines`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод позволяет присоединиться к сессии.

## Параметры метода



#|
|| **Название**
`Тип` | **Пример** | **Описание** ||
|| **CHAT_ID***
[`unknown`](../../../data-types.md) | 494 | Идентификатор чата ||
|#

## Примеры





- cURL (Webhook)

    // пример для cURL (Webhook)

- cURL (OAuth)

    // пример для cURL (OAuth)

- JS

    ```js
    BX24.callMethod(
        'imopenlines.session.join',
        {
            CHAT_ID: 2024
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
|| **ACCESS_DENIED** | У текущего пользователя нет доступа к указанному чату ||
|| **CHAT_TYPE** | Указанный чат не является открытой линией ||
|| **CHAT_ID** | Указан некорректный идентификатор чата ||
|#
