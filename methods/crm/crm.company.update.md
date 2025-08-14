---
method: crm.company.update
scope: crm
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id","fields"],"properties":{"id":{"type":"integer"},"fields":{"type":"object"}}}
returns: {"type":"object"}
---


---

# Обновить существующую компанию crm.company.update



Тут может не хватать некоторых данных — дополним в ближайшее время







- нужны правки под стандарт написания
- не указаны типы параметров
- не указана обязательность параметров
- отсутствуют примеры
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки





> Scope: [`crm`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `crm.company.update` обновляет существующую компанию.



Настоятельно рекомендуется при обновлении адреса передавать полный набор полей адреса в метод обновления. Особенности обновления полей адреса описаны [здесь](../data-types.md).



## Параметры

#|
|| **Параметр** | **Описание** ||
|| **id**
[`unknown`](../../data-types.md) | Идентификатор компании. ||
|| **fields**
[`unknown`](../../data-types.md) | [Набор полей](./crm-company-add.md) - массив вида array("обновляемое поле"=>"значение"[, ...]), где "обновляемое поле" может принимать значения из возвращаемых методом [crm.company.fields](./crm-company-fields.md). 



Чтобы узнать требуемый формат полей, выполните метод [crm.company.fields](./crm-company-fields.md) и посмотрите формат пришедших значений этих полей.



 ||
|| **params**
[`unknown`](../../data-types.md) | Набор параметров. `REGISTER_SONET_EVENT` - произвести регистрацию события изменения компании в живой ленте. Дополнительно будет отправлено уведомление ответственному за компанию. ||
|#

## Примеры



- JS

    ```js
    var id = prompt("Введите ID");
    BX24.callMethod(
        "crm.company.update",
        {
            id: id,
            fields:
            {
                "CURRENCY_ID": "RUB",
                "REVENUE" : 500000,
                "EMPLOYEES": "EMPLOYEES_3"
            },
            params: { "REGISTER_SONET_EVENT": "Y" }
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




