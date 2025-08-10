---
method: landing.site.getfolders
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

# Получить папки сайта landing.site.getFolders



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

Метод `landing.site.getFolders` получает папки сайта.

## Параметры

#|
|| **Параметр** | **Описание** | **С версии** ||
|| **siteId**
[`unknown`](../../data-types.md) | Идентификатор сайта. 



Требуются права на запись в указанный сайт. 



| ||
|| **filter**
[`unknown`](../../data-types.md) | Опциональный фильтр. Может принимать поля:
- ACTIVE – активность папки (Y/N). По умолчанию создается не активной;
- DELETED – папка удалена (Y/N). По умолчанию возвращаются не удаленные папки;
- PARENT_ID – идентификатор родительской папки;
- TITLE – заголовок папки;
- INDEX_ID – идентификатор индексной страницы папки;
- CODE – символьный код папки;
- CREATED_BY_ID – идентификатор пользователя, создавшего папку;
- MODIFIED_BY_ID – идентификатор пользователя, изменившего папку; | ||
|#

## Примеры



- JS

    ```js
    BX24.callMethod(
        'landing.site.getFolders',
        {
            siteId: 1817,
            filter: {
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




