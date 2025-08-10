---
method: landing.site.markundelete
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

# Восстановить сайт из корзины landing.site.markUnDelete



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указаны типы параметров
- не указана обязательность параметров
- отсутствуют примеры
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки





> Scope: [`landing`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `landing.site.markUnDelete` помечает сайт как не удаленный.

## Параметры

#|
|| **Параметр** | **Описание** | **Версия** ||
|| **ID**
[`unknown`](../../data-types.md) | Идентификатор страницы | ||
|#

## Примеры



- JS

    ```js
    BX24.callMethod(
        'landing.site.markUnDelete',
        {
            id: 1688
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




