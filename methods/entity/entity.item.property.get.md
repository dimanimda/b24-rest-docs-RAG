---
method: entity.item.property.get
scope: entity
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id"],"properties":{"id":{"type":"integer"}}}
returns: {"type":"object"}
---


---

# Получить список дополнительных свойств элементов хранилища entity.item.property.get



Тут может не хватать некоторых данных — дополним в ближайшее время







- отсутствуют примеры
- отсутствует ответ в случае ошибки





> Scope: [`entity`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `entity.item.property.get` получает список дополнительных свойств элементов хранилища.

## Параметры

#|
|| **Параметр** | **Описание** ||
|| **ENTITY^*^**
[`string`](../../../data-types.md) | Обязательный. Строковый идентификатор хранилища. ||
|| **PROPERTY**
[`string`](../../../data-types.md) | Строковый идентификатор требуемого свойства. ||
|#



## Примеры



- JS

    ```js
    BX24.callMethod(
        'entity.item.property.get',
        {
            ENTITY: 'menu_new'
        },
        function(r){
            console.log(r.data());
        }
    );
    ```

- HTTP

    ```http
    https://my.bitrix24.ru/rest/entity.item.property.get.json?ENTITY=menu_new&auth=340bf57f35ee95e0debf98399632999c
    ```





## Ответ в случае успеха

> 200 OK
```json
{
    "result":
    [
        {
            "PROPERTY":"test",
            "NAME":"Тестовое свойство",
            "TYPE":"S"
        },
        {
            "PROPERTY":"test1",
            "NAME":"Второе тестовое свойство",
            "TYPE":"N"
        },
        {
            "PROPERTY":"test_file",
            "NAME":"Файло",
            "TYPE":"F"
        }
    ]
}
```
