---
method: catalog.price.list
scope: catalog
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object","properties":{"filter":{"type":"object"},"order":{"type":"object"},"select":{"type":"array","items":{"type":"string"}},"start":{"type":["integer","string"]}}}
returns: {"type":"array","items":{"type":"object"}}
---


---

# Получить список цен по фильтру catalog.price.list



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указана обязательность параметров
- отсутствует ответ в случае ошибки
- нет примеров на др. языках
  




> Scope: [`catalog`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

```http
catalog.price.list(select, filter, order, start)
```

Метод получает список цен по фильтру.

Если операция успешна, возвращается список цен в теле ответа.

## Параметры

#|
|| **Параметр** | **Описание** ||
|| **select** 
[`object`](../../data-types.md)| Поля, соответствующие доступному списку полей [`fields`](catalog-price-get-fields.md).||
|| **filter** 
[`object`](../../data-types.md)| Поля, соответствующие доступному списку полей [`fields`](catalog-price-get-fields.md). ||
|| **order**
[`object`](../../data-types.md)| Поля, соответствующие доступному списку полей [`fields`](catalog-price-get-fields.md). ||
|| **start** 
[`string`](../../data-types.md)| Номер страницы вывода. Работает для https запросов. ||
|#



## Примеры



- JS

    ```js
    BX24.callMethod(
        'catalog.price.list',
        {
            select: {
                id
            },
            filter: {
                productId: 8
            },
            order: {
                id: 'ASC'
            }
        },
        function(result)
        {
            if(result.error())
                console.error(result.error().ex);
            else
                console.log(result.data());
            result.next();
        }
    );
    ```



Пример HTTPS запроса

```
https://ваш_портал/rest/catalog.price.list?auth=_ключ_авторизации_&start=50
```



