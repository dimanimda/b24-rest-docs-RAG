---
method: crm.lead.userfield.delete
scope: crm
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id"],"properties":{"id":{"type":"integer"}}}
returns: {"type":"object"}
---


---

# Удалить поле crm.lead.userfield.delete



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указаны типы параметров
- отсутствуют примеры (на других языках)
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки





> Scope: [`crm`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `crm.lead.userfield.delete` удаляет пользовательское поле лидов.

#|
|| **Параметр** | **Описание** ||
|| **id**^*^ | Идентификатор пользовательского поля. ||
|#



## Пример



- JS

    ```js
    var id = prompt("Введите ID");
    BX24.callMethod(
        "crm.lead.userfield.delete",
        {
            id: id
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




