---
method: landing.syspage.set
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

# Установить специальную страницу для сайта landing.syspage.set



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

Метод `landing.syspage.set` устанавливает для сайта специальную страницу. Если параметр **lid** не передан, то соответствующий тип страницы, не сама страница, будет удален. Метод не возвращает результата.

## Примеры



- JS

    ```js
    BX24.callMethod(
        'landing.syspage.set',
        {
            id: 1390,// ИД сайта
            type: 'personal',// тип страницы
            lid: 8593// ИД страницы, которая в рамках сайта будет считаться данного типа
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
    )
    ```




