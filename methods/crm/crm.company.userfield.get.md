---
method: crm.company.userfield.get
scope: crm
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id"],"properties":{"id":{"type":"integer"}}}
returns: {"type":"object"}
---


---

# Получить пользовательское поле компаний по идентификатору crm.company.userfield.get



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указаны типы параметров
- не указана обязательность параметров
- отсутствуют примеры
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки





> Scope: [`crm`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

`crm.company.userfield.get(id)`

Метод `crm.company.userfield.get` возвращает пользовательское поле компаний по идентификатору.

## Параметры

#|
|| **Параметр** | **Описание** ||
|| **id**
[`unknown`](../../../data-types.md) | Идентификатор пользовательского поля. ||
|#

## Пример



- JS

    ```js
    var id = prompt("Введите ID");
    BX24.callMethod(
        "crm.company.userfield.get",
        {
            id: id
        },
        function(result)
        {
            if(result.error())
                console.error(result.error());
            else
                console.dir(result.data());
        }
    );
    ```




