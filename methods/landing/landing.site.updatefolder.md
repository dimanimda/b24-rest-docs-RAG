---
method: landing.site.updatefolder
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

# Изменить папку в сайте landing.site.updateFolder



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

Метод `landing.site.updateFolder` изменяет папку в сайте.

## Параметры

#|
|| **Параметр** | **Описание** | **С версии** ||
|| **siteId**
[`unknown`](../../data-types.md) | Идентификатор сайта.



Требуются права на запись в указанный сайт.



 | ||
|| **folderId**
[`unknown`](../../data-types.md) | Идентификатор папки в сайте. | ||
|| **fields**
[`unknown`](../../data-types.md) | Поля папки: 
- ACTIVE – активность папки (Y/N). По умолчанию создается не активной;
- TITLE – заголовок (наименование) папки;
- INDEX_ID – идентификатор страницы внутри папки, которую требуется сделать индексной страницей папки;
- CODE – символьный код папки (часть URL страницы папки). По умолчанию транслитерируется из названия папки. | ||
|#

## Примеры



- JS

    ```js
    BX24.callMethod(
        'landing.site.updateFolder',
        {
            siteId: 1817,
            folderId: 736,
            fields: {
                TITLE: 'Измененная папка'
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




