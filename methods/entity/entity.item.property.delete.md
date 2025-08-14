---
method: entity.item.property.delete
scope: entity
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id"],"properties":{"id":{"type":"integer"}}}
returns: {"type":"object"}
---


---

# Удалить дополнительное свойство элементов хранилища entity.item.property.delete



Тут может не хватать некоторых данных — дополним в ближайшее время







- отсутствуют примеры
- отсутствует ответ в случае ошибки





> Scope: [`entity`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод  удаляет дополнительные свойства элементов хранилища. Пользователь должен обладать правами на управление (**Х**) хранилищем.

## Параметры

#|
|| **Параметр** | **Описание** ||
|| **ENTITY^*^**
[`string`](../../../data-types.md) | Обязательный. Строковый идентификатор хранилища. ||
|| **PROPERTY^*^**
[`string`](../../../data-types.md) | Обязательный. Строковый идентификатор свойства. ||
|#



## Примеры



- JS

    ```js
    BX24.callMethod(
        'entity.item.property.delete',
        {
            ENTITY: 'menu_new',
            PROPERTY: 'new_prop'
        }
    );
    ```

- HTTP

    ```http
    https://my.bitrix24.ru/rest/entity.item.property.delete.json?ENTITY=menu_new&PROPERTY=new_prop&auth=d92dd12b9b9b904254776104eed2bb76
    ```





## Ответ в случае успеха

> 200 OK
```json
{"result":true}
```
