---
method: crm.company.details.configuration.reset
scope: crm
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---


---

# Сбросить параметры карточки crm.company.details.configuration.reset



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

Метод `crm.company.details.configuration.reset` сбрасывает настройки карточки компаний. Метод удаляет личные настройки карточки указанного пользователя или общие настройки, заданные для всех пользователей.

#|
|| **Параметр** | **Описание** ||
|| **scope**
[`unknown`](../../../data-types.md) | Область применения настроек. Допустимые значения:

- **P** - личные настройки,
- **C** - общие настройки.
 ||
|| **userId**
[`unknown`](../../../data-types.md) | Идентификатор пользователя. Если не задан, то берётся текущий. Нужен только при сбросе личных настроек. ||
|#

## Примеры



- JS

    ```js
    //---
    //Сброс личных настроек карточки компаний для пользователя с идентификатором 1.
    BX24.callMethod(
        "crm.company.details.configuration.reset",
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
    //---
    ```





