---
method: crm.company.contact.items.get
scope: crm
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id"],"properties":{"id":{"type":"integer"}}}
returns: {"type":"object"}
---


---

# Получить набор контактов, связанных с указанной компанией crm.company.contact.items.get



Тут может не хватать некоторых данных — дополним в ближайшее время







- нужны правки под стандарт написания
- отсутствуют параметры или поля
- не указаны типы параметров
- не указана обязательность параметров
- отсутствуют примеры
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки
- не прописаны ссылки на несозданные ещё страницы





> Scope: [`crm`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `crm.company.contact.items.get` возвращает набор контактов, связанных с указанной компанией.

## Параметры

#|
|| **Параметр** | **Описание** ||
|| **id**
[`unknown`](../../../data-types.md) | Идентификатор компании. ||
|#

Результат возвращается в виде массива объектов, каждый из которых содержит следующие поля:

#|
|| **Поле** | **Описание** ||
|| **CONTACT_ID**
[`unknown`](../../../data-types.md) | Идентификатор контакта ||
|| **SORT**
[`unknown`](../../../data-types.md) | Индекс сортировки ||
|| **ROLE_ID**
[`unknown`](../../../data-types.md) | Идентификатор роли (зарезервировано) ||
|| **IS_PRIMARY**
[`unknown`](../../../data-types.md) | Флаг первичного контакта ||
|#

## Примеры



- JS

    ```js
    var id = prompt("Введите ID");
    BX24.callMethod(
        "crm.company.contact.items.get",
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




