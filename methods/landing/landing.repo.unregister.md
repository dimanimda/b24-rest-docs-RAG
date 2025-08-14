---
method: landing.repo.unregister
scope: landing
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---


---

# Удалить пользовательский блок landing.repo.unregister



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указаны типы параметров
- не указана обязательность параметров
- отсутствуют примеры
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки





> Scope: [`landing`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `landing.repo.unregister` удаляет блок. Возвращает *true* при удалении или *false*, если блок уже удален или его не было.

## Параметры

#|
|| **Метод** | **Описание** ||
|| **code**
[`unknown`](../../data-types.md) | Уникальный код удаляемого блока. ||
|#

## Примеры



- JS

    ```js
    BX24.callMethod(
        'landing.repo.unregister',
        {code: 'myblockx'},
        function(result)
        {
            if(result.error())
                console.error(result.error());
            else
                console.info(result.data());
        }
    );
    ```




