---
method: landing.landing.markdelete
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

# Пометить страницу как удаленную landing.landing.markDelete



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указаны типы параметров
- не указана обязательность параметров
- отсутствуют примеры
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки





> Scope: [`landing`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `landing.landing.markDelete` помечает страницу как удалённую.

## Параметры

#|
|| **Параметр** | **Описание** | **Версия** ||
|| **$lid**
[`unknown`](../../../data-types.md) | Идентификатор страницы. ||
|#

## Примеры



- JS

    ```js
    BX24.callMethod(
        'landing.landing.markDelete',
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




