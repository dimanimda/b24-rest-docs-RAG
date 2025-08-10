---
method: landing.template.getlandingref
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

# Получить список включаемых областей для страницы landing.template.getLandingRef



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

Метод `landing.template.getLandingRef` получает список включаемых областей для страницы. Ключами возвращаемого массива являются идентификаторы включаемых областей, а значениями - идентификаторы страниц.

## Параметры

#|
|| **Метод** | **Описание** ||
|| **ID**
[`unknown`](../../data-types.md) | Идентификатор страницы ||
|#

## Примеры



- JS

    ```js
    BX24.callMethod(
        'landing.template.getLandingRef',
        {
            id: 557
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







