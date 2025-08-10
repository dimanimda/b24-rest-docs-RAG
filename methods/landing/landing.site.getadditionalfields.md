---
method: landing.site.getadditionalfields
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

# Получить дополнительные поля сайта landing.site.getadditionalfields



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указаны типы параметров
- не указана обязательность параметров
- отсутствуют примеры
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки





> Scope: [`landing`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `landing.site.getadditionalfields` получает [дополнительные поля](./additional-fields.md) сайта. Возвращает дополнительные поля сайта или ошибку.

## Параметры

#|
|| **Метод** | **Описание** | **С версии** ||
|| **id**
[`unknown`](../../data-types.md) | идентификатор сайта | ||
|#

## Пример



- JS

    ```js
    BX24.callMethod(
        'landing.site.getadditionalfields',
        {
            id: 205
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




