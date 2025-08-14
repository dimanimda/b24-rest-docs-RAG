---
method: landing.syspage.get
scope: landing
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id"],"properties":{"id":{"type":"integer"}}}
returns: {"type":"object"}
---


---

# Получить список специальных страниц landing.syspage.get



Тут может не хватать некоторых данных — дополним в ближайшее время







- отсутствуют параметры или поля
- не указаны типы параметров
- не указана обязательность параметров
- отсутствуют примеры
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки





> Scope: [`landing`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `landing.syspage.get` возвращает список страниц сайта, которые установлены как специальные.

## Примеры



- JS

    ```js
    BX24.callMethod(
        'landing.syspage.get',
        {
            id: 1390,// ИД сайта
            active: true// Если true, то вернутся только активные страницы сайта (по умолчанию все)
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




