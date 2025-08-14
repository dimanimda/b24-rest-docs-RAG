---
method: catalog.document.element.update
scope: catalog
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id","fields"],"properties":{"id":{"type":"integer"},"fields":{"type":"object"}}}
returns: {"type":"object"}
---


---

# Изменить товар документа складского учета catalog.document.element.update



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указана обязательность параметров
- отсутствует ответ в случае ошибки 
- нет примеров на др. языках
- уточнить тип параметра id
  




> Scope: [`catalog`](../../../scopes/permissions.md)
>
> Кто может подписаться: любой пользователь

```http
catalog.document.element.update(id, fields)
```

Метод для обновления товара документа складского учёта.
Если операция успешна, возвращается `true`.

## Параметры

#|
|| **Параметр** | **Описание** ||
|| **id**
[`integer`](../../../data-types.md) | Идентификатор обновляемого товара. ||
|| **fields** 
[`array`](../../../data-types.md)|  Параметры обновляемого товара. ||
|#



## Примеры



- js
  
    ```js
    BX24.callMethod(
    'catalog.document.element.update',
    {
        'id': 42,
        'fields': {
            'amount': 10,
            'purchasingPrice': 25,
        }
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
        'catalog.document.element.update',
        [
            'id' => 11,
            'fields' => [
                'amount' => 10,
                'purchasingPrice' => 25,
            ],
        ]
    );

    echo '<pre>';
    print_r($result);
    echo '</pre>';
    ```





