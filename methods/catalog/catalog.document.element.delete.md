---
method: catalog.document.element.delete
scope: catalog
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id"],"properties":{"id":{"type":"integer"}}}
returns: {"type":"object"}
---


---

# Удалить товар документа складского учета catalog.document.element.delete



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указана обязательность параметров
- отсутствует ответ в случае ошибки
  




> Scope: [`catalog`](../../../scopes/permissions.md)
>
> Кто может подписаться: любой пользователь

## Описание

```http
catalog.document.element.delete(id)
```

Метод для удаления товара документа складского учёта.
Если операция успешна, возвращается `true` в теле ответа.

## Параметры

#|
|| **Параметр** | **Описание** ||
|| **id** 
[`integer`](../../../data-types.md)| Идентификатор позиции документа. ||
|#



## Примеры



- js
  
    ```js
    BX24.callMethod(
        'catalog.document.element.delete',
        {
            'id': 42,
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

- php
  
    ```php
    $result = CRest::call(
        'catalog.document.element.delete',
        [
            'id' => 42,
        ]
    );

    echo '<pre>';
    print_r($result);
    echo '</pre>';
    ```





