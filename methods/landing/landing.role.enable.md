---
method: landing.role.enable
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

# Переключить модели landing.role.enable



Тут может не хватать некоторых данных — дополним в ближайшее время







- отсутствуют параметры или поля
- отсутствуют примеры
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки





> Scope: [`landing`](../../scopes/permissions.md)
>
> Кто может выполнять метод: администратор

Метод `landing.role.enable` осуществляет переключение между расширенной и ролевой моделями.

## Примеры



- JS

    ```js
    BX24.callMethod(
        'landing.role.enable',
        {
            mode: 1// 1 – для включения ролевой модели, 0 – для выключения (включения расширенной)
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






