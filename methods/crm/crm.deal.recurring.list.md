---
method: crm.deal.recurring.list
scope: crm
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: start
params: {"type":"object","properties":{"filter":{"type":"object"},"order":{"type":"object"},"select":{"type":"array","items":{"type":"string"}},"start":{"type":["integer","string"]}}}
returns: {"type":"array","items":{"type":"object"}}
---


---

# Получить список настроек шаблонов регулярных сделок crm.deal.recurring.list



Тут может не хватать некоторых данных — дополним в ближайшее время







- отсутствуют примеры (на других языках)
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки





> Scope: [`crm`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `crm.deal.recurring.list` возвращает список настроек шаблонов регулярных сделок по фильтру.

При выборке используйте маску "*" для выборки всех полей (без пользовательских и множественных).

См. описание [списочных методов](../../../how-to-call-rest-api/list-methods-pecularities.md).

## Пример



- JS
  
    ```js
    BX24.callMethod(
        "crm.deal.recurring.list",
        {
            order: { "DEAL_ID": "ASC" },
            filter: { ">COUNTER_REPEAT": 5 },
            select: [ "ID", "DEAL_ID ", "NEXT_EXECUTION", "LAST_EXECUTION", "CATEGORY_ID", "IS_LIMIT" ]
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




