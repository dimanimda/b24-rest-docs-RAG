---
method: landing.landing.move
scope: landing
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---


---

# Переместить страницу в другой сайт / папку landing.landing.move



Тут может не хватать некоторых данных — дополним в ближайшее время







- нужны правки под стандарт написания
- не указаны типы параметров
- не указана обязательность параметров
- отсутствуют примеры
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки





> Scope: [`landing`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `landing.landing.move` перемещает страницу в другой сайт и/или папку.

## Параметры

#|
|| **Параметры** | **Описание** | **С версии** ||
|| **lid**
[`unknown`](../../../data-types.md) | Идентификатор страницы, которую надо переместить. ||
|| **toSiteId**
[`unknown`](../../../data-types.md) | Идентификатор сайта, куда надо переместить страницу. Должны быть права на запись в данный сайт. ||
|| **toFolderId**
[`unknown`](../../../data-types.md) | Идентификатор папки сайта, куда надо переместить страницу. Папка должна находиться в указанном сайте. Для перемещения в корень сайта параметр следует опустить. (для перемещения в текущем сайте - опустить и параметр toSiteId). ||
|#

## Примеры



- JS

    ```js
    BX24.callMethod(
        'landing.landing.move',
        {
            lid: 11262,
            toSiteId: 1817,
            toFolderId: 737
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




