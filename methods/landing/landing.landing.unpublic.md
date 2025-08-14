---
method: landing.landing.unpublic
scope: landing
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---


---

# Снять страницу с публикации landing.landing.unpublic



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указаны типы параметров
- не указана обязательность параметров
- отсутствуют примеры
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки





> Scope: [`landing`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `landing.landing.unpublic` снимает страницы с публикации. Возвращает *true* или ошибку.

## Параметры

#|
|| **Параметр** | **Описание** | **С версии** ||
|| **lid**
[`unknown`](../../../data-types.md) | Идентификатор страницы. ||
|#

## Примеры



- JS

    ```js
    BX24.callMethod(
        'landing.landing.unpublic',
        {
            lid: 351
        },
        function(result)
        {
            if(result.error())
            {
                console.error(result.error());
            }
            else
            {
                console.info(result.data());
            }
        }
    );
    ```




