---
method: landing.site.addfolder
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

# Добавить папку на сайт landing.site.addFolder



Тут может не хватать некоторых данных — дополним в ближайшее время







- нужны правки под стандарт написания
- не указаны типы параметров
- не указана обязательность параметров
- отсутствуют примеры
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки





> Scope: [`landing`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `landing.site.addFolder` добавляет папку в сайт.

## Параметры

#|
|| **Параметр** | **Описание** | **С версии** ||
|| **siteId**
[`unknown`](../../data-types.md) | Идентификатор сайта. 



Требуются права на запись в указанный сайт.



 | ||

|| **fields**
[`unknown`](../../data-types.md) | Поля папки: 
- ACTIVE – активность папки (Y/N). По умолчанию создается не активной;
- TITLE – заголовок (наименование) папки; 
- CODE – символьный код папки (часть URL страницы папки). По умолчанию транслитерируется из названия папки. | ||
|#

## Примеры



- JS

    ```js
    BX24.callMethod(
        'landing.site.addFolder',
        {
            siteId: 1817,
            fields: {
                TITLE: 'Новая папка'
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




