---
method: landing.syspage.getspecialpage
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

# Получить адрес специальной страницы сайта landing.syspage.getSpecialPage



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

Метод `landing.syspage.getSpecialPage` возвращает адрес специальной страницы сайта. В примере показано как получить ссылку на страницу персонального раздела сайта.



- JS

    ```js
    BX24.callMethod(
        'landing.syspage.getSpecialPage',
        {
            siteId: 1391,// ИД сайта
            type: 'personal',// тип специальной страницы
            additional: {// необязательный массив доп. параметров, которые будут добавлены к URL
                SECTION: 'private'
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




