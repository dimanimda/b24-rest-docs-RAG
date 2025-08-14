---
method: crm.deal.recurring.expose
scope: crm
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---


---

# Создать новую сделку из шаблона crm.deal.recurring.expose



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указан тип параметра
- отсутствуют примеры (на других языках)
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки





> Scope: [`crm`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `crm.deal.recurring.expose` создаёт новую сделку из шаблона.

#|
|| **Параметр** | **Описание** ||
|| **id**^*^ | Идентификатор настройки шаблона регулярной сделки. ||
|#



## Пример



- JS

    ```js
    var id = prompt("Введите ID");
    BX24.callMethod(
        "crm.deal.recurring.expose",
        {
            id: id,
        },
        function(result)
        {
            if(result.error())
                console.error(result.error());
            else
            {
                console.info(result.data());
            }
        }
    );
    ```




