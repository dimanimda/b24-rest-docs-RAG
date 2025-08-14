---
method: catalog.document.element.add
scope: catalog
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["fields"],"properties":{"fields":{"type":"object"}}}
returns: {"type":"object"}
---


---

# Добавить товар документа складского учета catalog.document.element.add



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указана обязательность параметров
- отсутствует ответ в случае ошибки
- нет примеров на др. языках
  




> Scope: [`catalog`](../../../scopes/permissions.md)
>
> Кто может подписаться: любой пользователь

## Описание

```http
catalog.document.element.add(fields)
```

Метод добавляет товар документа складского учёта.
Если операция успешна, возвращается `id` добавленного товара.

## Параметры

#|
|| **Параметр** | **Описание** ||
|| **fields**
[`array`](../../../data-types.md)| Параметры добавляемого товара. Поля соответствуют доступному списку полей [`fields`](catalog-document-element-get-fields.md) ||
|#



## Примеры



- js
  
    ```js
    BX24.callMethod(
        'catalog.document.element.add',
        {
            'fields': {
                'docId': 1,
                'storeFrom': 0,
                'storeTo': 1,
                'elementId': 42,
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
        'catalog.document.element.add',
        [
            'fields' => [
                'docId' => 1,
                'storeFrom' => 0,
                'storeTo' => 1,
                'elementId' => 42,
                'amount' => 10,
                'purchasingPrice' => 25,
            ],
        ]
    );

    echo '<pre>';
    print_r($result);
    echo '</pre>';
    ```




