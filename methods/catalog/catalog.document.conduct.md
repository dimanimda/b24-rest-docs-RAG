---
method: catalog.document.conduct
scope: catalog
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---


---

# Провести документ складского учета catalog.document.conduct



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указана обязательность параметров
- отсутствует ответ в случае ошибки
- нет примеров на др. языках
  




> Scope: [`catalog`](../../scopes/permissions.md)
>
> Кто может подписаться: любой пользователь

## Описание

```http
catalog.document.conduct(id)
```

Метод для проведения документа складского учёта.
Если операция успешна, возвращается `true` в теле ответа.


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
        'catalog.document.conduct',
        {
            id: 112
        },
        function(result)
        {
            if(result.error())
                console.error(result.error());
            else
                console.log(result.data());
        }
    );
    ```




