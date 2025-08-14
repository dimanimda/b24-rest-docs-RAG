---
method: crm.company.list
scope: crm
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: start
params: {"type":"object","properties":{"filter":{"type":"object"},"order":{"type":"object"},"select":{"type":"array","items":{"type":"string"}},"start":{"type":["integer","string"]}}}
returns: {"type":"array","items":{"type":"object"}}
---


---

# Получить список компаний по фильтру crm.company.list



Тут может не хватать некоторых данных — дополним в ближайшее время







- нужны правки под стандарт написания
- отсутствуют параметры или поля
- отсутствуют примеры
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки





> Scope: [`crm`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `crm.company.list` возвращает список компаний по фильтру. Является реализацией списочного метода для компаний.

При выборке используйте маски:
- "*" - для выборки всех полей (без пользовательских и множественных)
- "UF_*" - для выборки всех пользовательских полей (без множественных)

Маски для выборки множественных полей нет. Для выборки множественных полей укажите нужные в списке выбора ("PHONE", "EMAIL" и так далее).

## Параметры

См. описание [списочных методов](../../how-to-call-rest-api/list-methods-pecularities.md).

## Примеры

**Поиск компаний по сфере деятельности и типу**



- JS

    ```js
    BX24.callMethod(
        "crm.company.list",
        {
            order: { "DATE_CREATE": "ASC" },
            filter: { "INDUSTRY": "MANUFACTURING", "COMPANY_TYPE": "CUSTOMER" },
            select: [ "ID", "TITLE", "CURRENCY_ID", "REVENUE" ]
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



**Поиск компании по телефону**



- JS

    ```js
    BX24.callMethod(
        "crm.company.list",
        {
            filter: { "PHONE": "555888" },
            select: [ "ID", "TITLE" ]
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





## Продолжите изучение

- [{#T}](../../../tutorials/crm/how-to-get-lists/search-by-phone-and-email.md)
