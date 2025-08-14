---
method: crm.lead.details.configuration.get
scope: crm
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id"],"properties":{"id":{"type":"integer"}}}
returns: {"type":"object"}
---


---

# Получить параметры карточки crm.lead.details.configuration.get



Тут может не хватать некоторых данных — дополним в ближайшее время







- нужны правки под стандарт написания
- не указаны типы параметров
- не указана обязательность параметров
- отсутствуют примеры
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки





> Scope: [`crm`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `crm.lead.details.configuration.get` получает параметры настройки карточки лидов. Метод читает личные настройки карточки указанного пользователя или общие настройки, заданные для всех пользователей.



Обратите внимание, что настройки карточки повторных лидов могут отличаться от настроек карточки простых лидов. Для переключения между настройками карточек лидов применяется параметр **leadCustomerType**.



#|
|| **Параметр** | **Описание** ||
|| **scope**
[`unknown`](../../../data-types.md) | Область применения настроек. Допустимые значения:

- **P** - личные настройки,
- **C** - общие настройки. 
  ||
|| **userId**
[`unknown`](../../../data-types.md) | Идентификатор пользователя. Если не задан, то берётся текущий. Нужен только при запросе личных настроек. ||
|| **extras**
[`unknown`](../../../data-types.md) | Дополнительные параметры. Здесь для лидов может быть задан параметр `leadCustomerType`, с допустимыми значениями:

- **1** - простые лиды,
- **2** - повторные лиды.
  ||
|#

## Примеры



- JS

    ```js
    //--
    //Запрос личных настроек карточки лидов для пользователя с идентификатором 1.
    BX24.callMethod(
        "crm.lead.details.configuration.get",
        {
            scope: "P",
            userId: 1
        },
        function(result)
        {
            if(result.error())
                console.error(result.error());
            else
                console.dir(result.data());
        }
    );
    //Запрос общих настроек карточки лидов.
    BX24.callMethod(
        "crm.lead.details.configuration.get",
        {
            scope: "C"
        },
        function(result)
        {
            if(result.error())
                console.error(result.error());
            else
                console.dir(result.data());
        }
    );
    //Запрос общих настроек карточки повторных лидов.
    BX24.callMethod(
        "crm.lead.details.configuration.get",
        {
            scope: "C",
            extras: { leadCustomerType: 2 }
        },
        function(result)
        {
            if(result.error())
                console.error(result.error());
            else
                console.dir(result.data());
        }
    );
    //--
    ```




