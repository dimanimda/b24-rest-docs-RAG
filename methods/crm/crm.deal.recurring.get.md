---
method: crm.deal.recurring.get
scope: crm
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id"],"properties":{"id":{"type":"integer"}}}
returns: {"type":"object"}
---


---

# Получить поля настройки шаблона регулярной сделки по Id crm.deal.recurring.get



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указан тип параметра
- отсутствуют примеры (на других языках)
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки





> Scope: [`crm`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `crm.deal.recurring.get` возвращает поля настройки шаблона регулярной сделки по идентификатору.

#|
|| **Параметр** | **Описание** ||
|| **id**^*^ | Идентификатор настройки шаблона регулярной сделки. ||
|#



## Пример



- JS
  
    ```js
    var id = prompt("Введите ID");
    BX24.callMethod(
        "crm.deal.recurring.get",
        { id: id },
        function(result)
        {
            if(result.error())
                console.error(result.error());
            else
                console.dir(result.data());
        }
    );
    ```




