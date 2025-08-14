---
method: imopenlines.session.head.vote
scope: imopenlines
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---


---

# Поставить оценку работе сотрудника в диалоге imopenlines.session.head.vote



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указаны типы параметров
- отсутствуют примеры
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки





> Scope: [`imopenlines`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод для оценки диалога руководителем.

## Параметры метода



#|
|| **Название**
`Тип` | **Пример** | **Описание** ||
|| **SESSION_ID***
[`unknown`](../../../data-types.md) | `494` | Идентификатор сессии ||
|| **RATING**
[`unknown`](../../../data-types.md) | `5` | Количество звёзд от 1 до 5 ||
|| **COMMENT**
[`unknown`](../../../data-types.md) | `Молодец` | Комментарий руководителя ||
|#

**Обратите внимание:** несмотря на то, что два параметра не обязательны, как минимум один из них должен быть заполнен.

## Примеры





- cURL (Webhook)

    // пример для cURL (Webhook)

- cURL (OAuth)

    // пример для cURL (OAuth)

- JS


    ```js
    BX24.callMethod(
        'imopenlines.session.head.vote',
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
|| **CHAT_ID** | Указан не корректный идентификатор чата ||
|| **WRONG_PARAMETER** | Как минимум один из необязательных параметров должен быть указан ||
|#
