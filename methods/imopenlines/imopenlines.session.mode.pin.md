---
method: imopenlines.session.mode.pin
scope: imopenlines
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---


---

# Закрепить или открепить диалог imopenlines.session.mode.pin



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указаны типы параметров
- отсутствуют примеры
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки





> Scope: [`imopenlines`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод закрепляет или открепляет диалог за текущим оператором.

## Параметры метода



#|
|| **Название**
`Тип` | **Пример** | **По умолчанию** | **Описание** ||
|| **CHAT_ID***
[`unknown`](../../../data-types.md) | `2020` | | Идентификатор чата ||
|| **ACTIVATE**
[`unknown`](../../../data-types.md) | `Y` | N | Флаг активации ||
|#

## Примеры





- cURL (Webhook)

    // пример для cURL (Webhook)

- cURL (OAuth)

    // пример для cURL (OAuth)

- JS

    ```js
    BX24.callMethod(
        'imopenlines.session.mode.pin',
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
true
```

### Возможные коды ошибок

#|
|| **Код** | **Описание** ||
|| **ACCESS_DENIED** | У текущего пользователя нет доступа к указанному чату ||
|| **CHAT_TYPE** | Указанный чат не является открытой линией ||
|| **CHAT_ID** | Указан не корректный идентификатор чата ||
|| **ERROR_USER_NOT_OPERATOR** | Попытка закрепить/открепить чат пользователем, не являющимся оператором ||
|#
