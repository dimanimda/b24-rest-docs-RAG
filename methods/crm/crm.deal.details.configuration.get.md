---
method: crm.deal.details.configuration.get
scope: crm
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id"],"properties":{"id":{"type":"integer"}}}
returns: {"type":"object"}
---


---

# Получить параметры карточки crm.deal.details.configuration.get



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

Метод `crm.deal.details.configuration.get` получает настройки карточки сделок. Метод читает личные настройки карточки указанного пользователя или общие настройки, заданные для всех пользователей.



Обратите внимание, что настройки карточки сделок разных направлений (или воронок) могут отличаться друг от друга.
Для переключения между настройками карточек сделок разных направлений применяется параметр **dealCategoryId**.



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
[`unknown`](../../../data-types.md) | Дополнительные параметры. Здесь для сделок может быть задан параметр `dealCategoryId`. ||
|#

## Примеры



- JS

    ```js
    //--
    //Запрос личных настроек карточки сделок для пользователя с идентификатором 1.
    BX24.callMethod(
        "crm.deal.details.configuration.get",
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
    //Запрос общих настроек карточки сделок для общего направления.
    BX24.callMethod(
        "crm.deal.details.configuration.get",
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
    //Запрос общих настроек карточки сделок для направления с идентификатором 1.
    BX24.callMethod(
        "crm.deal.details.configuration.get",
        {
            scope: "C",
            extras: { dealCategoryId: 1 }
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




