---
method: landing.demos.unregister
scope: landing
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---


---

# Удалить зарегистрированный партнерский шаблон landing.demos.unregister



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указаны типы параметров
- не указана обязательность параметров
- отсутствуют примеры
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки





> Scope: [`landing`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `landing.demos.unregister` удаляет зарегистрированный партнёрский шаблон. Возвращает *true* или ошибку. В случае, если шаблон уже был удален, или не найден, вернет *false*.



Удаляется как шаблон сайта с данным кодом, так и все шаблоны страниц с данным кодом. Созданные сайты и страниц по этим шаблонам остаются нетронутыми.



## Параметры

#|
|| **Параметр** | **Описание** ||
|| **code**
[`unknown`](../../data-types.md) | Символьный код шаблона. ||
|#

## Примеры



- JS

    ```js
    BX24.callMethod(
        'landing.demos.unregister',
        {
            code: 'myfirstsite'
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




