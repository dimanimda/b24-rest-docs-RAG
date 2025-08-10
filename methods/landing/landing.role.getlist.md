---
method: landing.role.getlist
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

# Получить список ролей landing.role.getList



Тут может не хватать некоторых данных — дополним в ближайшее время







- отсутствуют примеры
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки







**Scope**: [`landing`](../../../scopes/permissions.md) | **Права на выполнение**: `администратор`



Метод `landing.role.getList` позволяет получить список ролей. Вернет массив идентификаторов и названий всех ролей.

## Параметры

Метод без параметров.

## Примеры



- JS

    ```js
    BX24.callMethod(
        'landing.role.getList',
        {
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




