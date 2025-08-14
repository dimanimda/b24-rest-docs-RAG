---
method: catalog.document.cancel
scope: catalog
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---


---

# Отменить проведение документа складского учета catalog.document.cancel



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указана обязательность параметров
- отсутствует ответ в случае ошибки
- нет примеров на др. языках
  




> Scope: [`catalog`](../../scopes/permissions.md)
>
> Кто может подписаться: любой пользователь

## Описание

```http
catalog.document.cancel(id)
```

Метод отменяет проведение документа по ID.

## Параметры

#|
|| **Параметр** | **Описание** ||
|| **id**
[`integer`](../../data-types.md)| Идентификатор документа складского учёта. ||
|#



## Примеры



- JS

    ```js
    BX24.callMethod(
        'catalog.document.cancel',
        {
            id: 112
        },
        function(result)
        {
            if(result.error())
                console.error(result.error().ex);
            else
                console.log(result.data());
        }
    );
    ```




