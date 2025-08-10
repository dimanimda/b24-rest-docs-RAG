---
method: landing.site.markfolderdelete
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

# Пометить папку как удаленную landing.site.markFolderDelete



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указаны типы параметров
- не указана обязательность параметров
- отсутствуют примеры
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки





> Scope: [`landing`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `landing.site.markFolderDelete` помечает папку как удаленную (помещенную в корзину).

## Параметры

#|
|| **Параметр** | **Описание** | **Версия** ||
|| **id**
[`unknown`](../../data-types.md) | Идентификатор папки. Права на доступ к сайту папки должны быть на удаление. | ||
|#

## Пример



- JS

    ```js
    BX24.callMethod(
        'landing.site.markFolderDelete',
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




