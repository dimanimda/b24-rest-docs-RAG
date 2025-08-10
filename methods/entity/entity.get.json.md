---
method: entity.get.json
scope: entity
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---

Auto-generated stub. Fill in params/returns/examples.

---

# Получить параметры хранилища или список всех хранилищ entity.get



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указана обязательность параметров
- отсутствуют примеры
- отсутствует ответ в случае ошибки





> Scope: [`entity`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `entity.get` получает параметры хранилища или список всех хранилищ приложения.

## Параметры

#|
|| **Параметр** | **Описание** ||
|| **ENTITY**
[`string`](../../data-types.md) | Строковой идентификатор требуемого хранилища. ||
|#



## Примеры



- JS

    ```javascript
    BX24.callMethod('entity.get');
    ```

- HTTP

    ```http
    https://my.bitrix24.ru/rest/entity.get.json?auth=59efe32d01c0e9dc5732e8dfa68a4baa
    ```



Пример корректного получения списка всех доступных хранилищ:



- JS

    ```javascript
    BX24.callMethod(
        "entity.get",
        {},
        function(result)
        {
            if(result.error())
                console.error(result.error());
            else
            {
                console.info("Список созданных хранилищ:", result.data());
            }
        }
    );
    ```





## Ответ в случае успеха

> 200 OK
```json
{"result":
    [
        {
            "ENTITY":"dish",
            "NAME":"Dishes"
        },
        {
            "ENTITY":"menu",
            "NAME":"Menu"
        }
    ]
}
```


