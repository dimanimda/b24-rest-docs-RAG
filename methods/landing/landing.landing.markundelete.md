---
method: landing.landing.markundelete
scope: landing
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---

Auto-generated stub. Fill in params/returns/examples.

---

# Пометить страницу как неудаленную landing.landing.markUnDelete



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указаны типы параметров
- не указана обязательность параметров
- отсутствуют примеры
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки





> Scope: [`landing`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `landing.landing.markUnDelete` помечает страницу как неудаленную.

## Параметры

#|
|| **Параметр** | **Описание** | **Версия** ||
|| **$lid**
[`unknown`](../../../data-types.md) | Идентификатор страницы. ||
|#

## Пример



- JS

    ```js
    BX24.callMethod(
        'landing.landing.markUnDelete',
        {
            lid: 1688
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




