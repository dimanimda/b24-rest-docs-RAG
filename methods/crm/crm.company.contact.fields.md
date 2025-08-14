---
method: crm.company.contact.fields
scope: crm
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object"}
returns: {"type":"object"}
---


---

# Получить описание полей для связи компания-контакт crm.company.contact.fields



Тут может не хватать некоторых данных — дополним в ближайшее время







- отсутствуют примеры
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки





> Scope: [`crm`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `crm.company.contact.fields` возвращает для связи компания-контакт описание полей, используемых методами семейства `crm.company.contact.*`, то есть `crm.company.contact.items.get`, `crm.company.contact.items.set`, `crm.company.contact.add` и т.д.

## Параметры

Без параметров.

## Примеры



- JS
  
    ```js
    BX24.callMethod(
        "crm.company.contact.fields",
        {},
        function(result)
        {
            if(result.error())
                console.error(result.error());
            else
                console.dir(result.data());
        }
    );
    ```




