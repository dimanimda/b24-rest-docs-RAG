---
method: entity.item.property.add
scope: entity
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["fields"],"properties":{"fields":{"type":"object"}}}
returns: {"type":"object"}
---


---

# Добавить дополнительное свойство элементов хранилища entity.item.property.add



Тут может не хватать некоторых данных — дополним в ближайшее время







- нужны правки под стандарт написания
- отсутствуют примеры
- отсутствует ответ в случае ошибки





> Scope: [`entity`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `entity.item.property.add` добавляет дополнительное свойство элементов хранилища. Пользователь должен обладать правами на управление (**Х**) хранилищем.

## Параметры

#|
|| **Параметр** | **Описание** ||
|| **ENTITY^*^**
[`string`](../../../data-types.md) | Обязательный. Строковый идентификатор хранилища. ||
|| **PROPERTY^*^**
[`string`](../../../data-types.md) | Обязательный. Строковый идентификатор свойства. ||
|| **NAME^*^**
[`string`](../../../data-types.md) | Обязательный. Наименование свойства. ||
|| **TYPE^*^**
[`unknown`](../../../data-types.md) | Обязательный. Тип свойства (**S** - строка, **N** - число, **F** - файл). ||
|#



## Примеры



- JS

    ```js
    BX24.callMethod(
        'entity.item.property.add',
        {
            ENTITY: 'menu_new',
            PROPERTY: 'new_prop',
            NAME: 'Новое свойство',
            TYPE: 'S'
        }
    );
    ```

- HTTP

    ```http
    https://my.bitrix24.ru/rest/entity.item.property.add.json?ENTITY=menu_new&NAME=%D0%9D%D0%BE%D0%B2%D0%BE%D0%B5%20%D1%81%D0%B2%D0%BE%D0%B9%D1%81%D1%82%D0%B2%D0%BE&PROPERTY=new_prop&TYPE=S&auth=e690b44d2b3827d2eb9d4dbe59406dbb
    ```





## Ответ в случае успеха

> 200 OK
```json
{"result":true}
```
