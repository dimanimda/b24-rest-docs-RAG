---
method: entity.item.delete
scope: entity
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id"],"properties":{"id":{"type":"integer"}}}
returns: {"type":"object"}
---


---

# Удалить элемент хранилища entity.item.delete



Тут может не хватать некоторых данных — дополним в ближайшее время







- отсутствуют примеры
- отсутствует ответ в случае ошибки





> Scope: [`entity`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `entity.item.delete` удаляет элемент хранилища. Пользователь должен обладать хотя бы правами на запись (**W**) в хранилище.

## Параметры

#|
|| **Параметр** | **Описание** ||
|| **ENTITY^*^**
[`string`](../../data-types.md) | Обязательный. Строковый идентификатор хранилища. ||
|| **ID^*^**
[`integer`](../../data-types.md) | Обязательный. Идентификатор элемента. ||
|#



## Пример



- JS

    ```js
    BX24.callMethod(
        'entity.item.delete',
        {
            ENTITY: 'menu_new',
            ID: 842
        }
    );
    ```

- HTTP

    ```http
    https://my.bitrix24.ru/rest/entity.item.delete.json?ENTITY=menu_new&ID=842&auth=340bf57f35ee95e0debf98399632999c
    ```





## Ответ в случае успеха

> 200 OK
```json
{"result":true}
```
