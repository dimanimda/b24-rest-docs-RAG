---
method: crm.company.userfield.list
scope: crm
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: start
params: {"type":"object","properties":{"filter":{"type":"object"},"order":{"type":"object"},"select":{"type":"array","items":{"type":"string"}},"start":{"type":["integer","string"]}}}
returns: {"type":"array","items":{"type":"object"}}
---


---

# Получить список пользовательских полей компаний по фильтру crm.company.userfield.list



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указаны типы параметров
- не указана обязательность параметров
- отсутствуют примеры
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки





> Scope: [`crm`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `crm.company.userfield.list` возвращает список пользовательских полей компаний по фильтру.

## Параметры

#|
|| **Параметр** | **Описание** ||
|| **order**
[`array`](../../../data-types.md) | Поля сортировки. ||
|| **filter**
[`array`](../../../data-types.md) | Поля фильтра. ||
|| **START** | Порядковый номер элемента списка, начиная с которого необходимо возвращать следующие элементы при вызове текущего метода. Подробности в статье [{#T}](../../../how-to-call-rest-api/list-methods-pecularities.md) ||
|#

## Пример



- JS
  
    ```js
    BX24.callMethod(
        "crm.company.userfield.list",
        {
            order: { "SORT": "ASC" },
            filter: { "MANDATORY": "N" }
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




