---
method: crm.company.add
scope: crm
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["fields"],"properties":{"fields":{"type":"object"}}}
returns: {"type":"object"}
---


---

# Создать новую компанию crm.company.add



Тут может не хватать некоторых данных — дополним в ближайшее время







- нужны правки под стандарт написания
- не указана обязательность параметров
- отсутствуют примеры
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки





> Scope: [`crm`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `crm.company.add` создаёт новую компанию.

## Параметры

#|
|| **Параметр** | **Описание** ||
|| **fields**
[`array`](../../data-types.md) | Набор полей - массив вида array("поле"=>"значение"[, ...]), содержащий значения полей компании. 



Чтобы узнать требуемый формат полей, выполните метод [crm.company.fields](./crm-company-fields.md) и посмотрите формат пришедших значений этих полей.


 ||
|| **params**
[`array`](../../data-types.md) | Набор параметров. REGISTER_SONET_EVENT - произвести регистрацию события добавления компании в живой ленте. Дополнительно будет отправлено уведомление ответственному за компанию. ||
|#

## Примеры



- JS

    ```js
    BX24.callMethod(
        "crm.company.add",
        {
            fields:
            {
                "TITLE": "ИП Титов",
                "COMPANY_TYPE": "CUSTOMER",
                "INDUSTRY": "MANUFACTURING",
                "EMPLOYEES": "EMPLOYEES_2",
                "CURRENCY_ID": "RUB",
                "REVENUE" : 3000000,
                "LOGO": { "fileData": document.getElementById('logo') },
                "OPENED": "Y",
                "ASSIGNED_BY_ID": 1,
                "PHONE": [ { "VALUE": "555888", "VALUE_TYPE": "WORK" } ]     
            },
            params: { "REGISTER_SONET_EVENT": "Y" }        
        },
        function(result)
        {
            if(result.error())
                console.error(result.error());
            else
                console.info("Создана компания с ID " + result.data());
        }
    );
    ```





## Продолжите изучение 

- [{#T}](./index.md)
- [{#T}](../../../tutorials/crm/how-to-add-crm-objects/how-to-add-company.md)
- [{#T}](../../../tutorials/crm/how-to-add-crm-objects/how-to-add-company-with-requisite.md)
- [{#T}](../../../tutorials/crm/how-to-add-crm-objects/how-to-add-deal-with-choice-of-requisite.md)
