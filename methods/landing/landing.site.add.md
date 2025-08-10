---
method: landing.site.add
scope: landing
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["fields"],"properties":{"fields":{"type":"object"}}}
returns: {"type":"object"}
---

Auto-generated stub. Fill in params/returns/examples.

---

# Добавить сайт landing.site.add



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указаны типы параметров
- не указана обязательность параметров
- отсутствуют примеры
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки





> Scope: [`landing`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `landing.site.add` добавляет сайт. Возвращает `ID` созданного сайта или ошибку.

## Параметры

#|
|| **Параметр** | **Описание** | **С версии** ||
|| **fields**
[`unknown`](../../data-types.md) | [Поля сущности](./base-fields.md) | ||
|#

## Примеры



- JS

    ```js
    BX24.callMethod(
        'landing.site.add',
        {
            fields: {
                TITLE: 'My first site!',
                CODE: 'firstsite',
                DOMAIN_ID: 'my.bitrix24.site'
            }
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




