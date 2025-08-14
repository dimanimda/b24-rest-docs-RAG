---
method: catalog.document.update
scope: catalog
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id","fields"],"properties":{"id":{"type":"integer"},"fields":{"type":"object"}}}
returns: {"type":"object"}
---


---

# Изменить документ складского учета catalog.document.update



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указана обязательность параметров
- отсутствует ответ в случае ошибки 
- нет примеров на др. языках
- уточнить тип параметра id
  




> Scope: [`catalog`](../../scopes/permissions.md)
>
> Кто может подписаться: любой пользователь

```http
catalog.document.update(id, fields)
```

Метод для обновления документа складского учёта.
Если операция успешна, возвращается `true` добавленного склада.

## Параметры

#|
|| **Параметр** | **Описание** ||
|| **id**
[`string`](../../data-types.md) | Идентификатор документа. ||
|| **fields** 
[`array`](../../data-types.md)|  Параметры документа. ||
|#



## Примеры



- JS
  
    ```js
    BX24.callMethod(
        'catalog.document.update',
        {
            'id': 42,
            'fields': {
                'total': '1000', // общая сумма всех PURCHASING_PRICE умноженных на AMOUNT
                'commentary': 'first document.',
                'title': 'Новый документ', //заголовок (поле доступно с версии catalog 22.200.0)
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

- PHP

    ```php
    $result = CRest::call(
        'catalog.document.update',
        [
            'id' => 42,
            'fields' => [
                'total' => '1000',
                'commentary' => 'first document.',
                'title' => 'Новый документ',
            ],
        ]
    );
    echo '<pre>';
    print_r($result);
    echo '</pre>';
    ```





