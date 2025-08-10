---
method: landing.landing.add
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

# Добавить страницу landing.landing.add



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указаны типы параметров
- не указана обязательность параметров
- отсутствуют примеры
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки





> Scope: [`landing`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `landing.landing.add` добавляет страницу. Возвращает `LID` созданной страницы или ошибку.

## Параметры

#|
|| **Параметр** | **Описание** ||
|| **fields**
[`unknown`](../../../data-types.md) | [Поля сущности](../index.md) ||
|#

## Примеры



- JS

    ```js
    BX24.callMethod(
        'landing.landing.add',
        {
            fields: {
                TITLE: 'My first page!',
                CODE: 'firstpage',
                SITE_ID: 292,
                ADDITIONAL_FIELDS: {
                    THEME_CODE: 'wedding'
                }
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







При создании страницы передается код темы страницы (`THEME_CODE: 'wedding'`). Это необходимо, чтобы страница была в соответствующей [цветовой схеме](../color-themes.md). Если этого не сделать, страница будет в теме по-умолчанию.


