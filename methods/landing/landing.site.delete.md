---
method: landing.site.delete
scope: landing
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id"],"properties":{"id":{"type":"integer"}}}
returns: {"type":"object"}
---


---

# Удалить сайт landing.site.delete



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указаны типы параметров
- не указана обязательность параметров
- отсутствуют примеры
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки





> Scope: [`landing`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `landing.site.delete` удаляет сайт. Возвращает `true` в случае успеха, или ошибку.

## Параметры

#|
|| **Метод** | **Описание** | **С версии** ||
|| **id**
[`unknown`](../../data-types.md) | `id` сущности. | ||
|#

## Примеры



- JS

    ```js
    BX24.callMethod(
        'landing.site.delete',
        {
            id: 206
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




