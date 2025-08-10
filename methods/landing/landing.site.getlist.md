---
method: landing.site.getlist
scope: landing
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object","properties":{"filter":{"type":"object"},"order":{"type":"object"},"select":{"type":"array","items":{"type":"string"}},"start":{"type":["integer","string"]}}}
returns: {"type":"array","items":{"type":"object"}}
---

Auto-generated stub. Fill in params/returns/examples.

---

# Получить список сайтов landing.site.getList



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

Метод `landing.site.getList` получает список сайтов.



Обратите внимание, помеченные как удаленные страницы не фигурируют в выборках. Чтобы получить их явно, необходимо при фильтрации указать ключ `DELETED` со значением Y или N.



## Параметры

#|
|| **Метод** | **Описание** | **С версии** ||
|| **params**
[`unknown`](../../data-types.md) | Опциональный массив, с опциональными ключами: **select**, **filter**, **order**, **group**, которые содержат значения таблицы [основных полей](./base-fields.md) сущности. | ||
|#

## Примеры



- JS

    ```js
    BX24.callMethod(
        'landing.site.getList',
        {
            params: {
                select: [
                    'ID', 'TITLE', 'DOMAIN.DOMAIN'
                ],
                filter: {
                    TITLE: '%услуги%'
                },
                order: {
                    ID: 'DESC'
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




