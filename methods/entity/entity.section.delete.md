---
method: entity.section.delete
scope: entity
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id"],"properties":{"id":{"type":"integer"}}}
returns: {"type":"object"}
---


---

# Удалить раздел хранилища entity.section.delete



Тут может не хватать некоторых данных — дополним в ближайшее время







- отсутствуют примеры
- отсутствует ответ в случае ошибки





> Scope: [`entity`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `entity.section.delete` удаляет раздел хранилища. Пользователь должен обладать хотя бы правами на запись (**W**) в хранилище.

## Параметры

#|
|| **Параметр** | **Описание** ||
|| **ENTITY^*^**
[`string`](../../data-types.md) | Обязательный. Строковой идентификатор хранилища. ||
|| **ID**^*^
[`integer`](../../data-types.md) | Обязательный. Идентификатор удаляемого раздела. ||
|#



## Примеры



- JS

    ```javascript
    BX24.callMethod(
        'entity.section.delete',
        {
            ENTITY: 'menu_new',
            ID: 220
        }
    );
    ```

- HTTP

    ```http
    https://my.bitrix24.ru/rest/entity.section.delete.json?ENTITY=menu_new&ID=220&auth=9affe382af74d9c5caa588e28096e872
    ```





## Ответ в случае успеха

> 200 OK
```json
{"result":true}
```
