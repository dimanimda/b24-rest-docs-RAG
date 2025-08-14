---
method: landing.repo.unbind
scope: landing
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---


---

# Удалить места встраивания landing.repo.unbind



Тут может не хватать некоторых данных — дополним в ближайшее время







- отсутствуют параметры или поля
- не указаны типы параметров
- не указана обязательность параметров
- отсутствуют примеры
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки





> Scope: [`landing`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Удаление происходит собственным методом модуля `landing.repo.unbind`, которому просто передаётся код места встраивания. Удалятся все места встраивания по этому коду. Если приложением зарегистрировано несколько мест с различными путями, то удалить конкретное можно, передав адрес места встраивания.

## Примеры



- JS

    ```js
    BX24.callMethod(
        'landing.repo.unbind',
        {
            code: 'LANDING_SETTINGS',
    //        handler: 'https://site.ru/rt/placement.php?version=3'
        },
        function(result)
        {
            if(result.error())
                console.error(result.error());
            else
                console.info(result.data());
        }
    );
    ```




