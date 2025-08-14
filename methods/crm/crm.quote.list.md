---
method: crm.quote.list
scope: crm
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: start
params: {"type":"object","properties":{"filter":{"type":"object"},"order":{"type":"object"},"select":{"type":"array","items":{"type":"string"}},"start":{"type":["integer","string"]}}}
returns: {"type":"array","items":{"type":"object"}}
---


---

# Получить список предложений по фильтру crm.quote.list



Тут может не хватать некоторых данных — дополним в ближайшее время







- нужно описать параметры здесь
- не указаны типы параметров
- не указана обязательность параметров
- отсутствуют примеры (должно быть три примера - curl, js, php)
- отсутствует ответ в случае ошибки
- отсутствует ответ в случае успеха





> Scope: [`crm`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `crm.quote.list` возвращает список предложений по фильтру. Является реализацией списочного метода для предложений.

Cм. описание [списочных методов](../../how-to-call-rest-api/list-methods-pecularities.md).

## Пример



- JS

    ```javascript
    BX24.callMethod(
        "crm.quote.list",
        {
            order: { "STATUS_ID": "ASC" },
            filter: { "=COMPANY_ID": 1 },
            select: [ "ID", "TITLE", "STATUS_ID", "OPPORTUNITY", "CURRENCY_ID" ]
        },
        function(result)
        {
            if(result.error())
                console.error(result.error());
            else
            {
                console.dir(result.data());
                if(result.more())
                    result.next();
            }
        }
    );
    ```




