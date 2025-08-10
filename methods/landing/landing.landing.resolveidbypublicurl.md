---
method: landing.landing.resolveidbypublicurl
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

# Получить идентификатор страницы по URL landing.landing.resolveIdByPublicUrl



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указаны типы параметров
- не указана обязательность параметров
- отсутствуют примеры
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки





> Scope: [`landing`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `landing.landing.resolveIdByPublicUrl` возвращает идентификатор страницы по переданному относительному URL страницы.

## Параметры

#|
|| **Параметр** | **Описание** | **Версия** ||
|| **landingUrl**
[`unknown`](../../../data-types.md) | Относительный URL страницы. ||
|| **siteId**
[`unknown`](../../../data-types.md) | Идентификатор сайта. ||
|#

## Примеры



- JS

    ```js
    BX24.callMethod(
        'landing.landing.resolveIdByPublicUrl',
        {
            landingUrl: '/folder/sub/folder/page/',
            siteId: 1817
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




