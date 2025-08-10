---
method: landing.syspage.deleteforlanding
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

# Удалить все упоминания страницы как специальной landing.syspage.deleteForLanding



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

Метод `landing.syspage.deleteForLanding` удаляет все упоминания страницы как специальной

## Примеры



- JS

    ```js
    BX24.callMethod(
        'landing.syspage.deleteForLanding',
        {
            id: 8613 // ИД страницы
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




