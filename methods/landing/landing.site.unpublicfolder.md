---
method: landing.site.unpublicfolder
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

# Снять папку сайта с публикации landing.site.unPublicFolder



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указаны типы параметров
- не указана обязательность параметров
- отсутствуют примеры
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки





> Scope: [`landing`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `landing.site.unPublicFolder` снимает с публикации папку сайта. Должны быть права на публикацию сайта папки.

## Параметры

#|
|| **Параметр** | **Описание** | **Версия** ||
|| **folderId**
[`unknown`](../../data-types.md) | Идентификатор папки. | ||
|#

## Пример



- JS

    ```js
    BX24.callMethod(
        'landing.site.unPublicFolder',
        {
            id: 737
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




