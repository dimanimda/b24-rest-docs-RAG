---
method: catalog.price.modify
scope: catalog
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---


---

# Изменить элементы коллекции цен товара catalog.price.modify



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указана обязательность параметров
- отсутствует ответ в случае ошибки 
- нет примеров на др. языках
  




> Scope: [`catalog`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

```http
catalog.price.modify(fields)
```

Метод для изменения элементов коллекции цен товара.



**Внимение!** Все сущности, которые не переданы или у которых не указаны ID, будут удалены.



Если операция успешна, возвращается [ресурс цены](resource.md) в теле ответа.

## Параметры

#|
|| **Параметр** | **Описание** ||
|| **fields.product.id** 
[`string`](../../data-types.md) | Номер цены. ||
|| **fields.product.prices[]** 
[`list`](../../data-types.md) | Поля, соответствующие доступному списку полей [fields](catalog-price-get-fields.md). ||
|#



## Примеры



- JS

    ```js
    BX24.callMethod(
        'catalog.price.modify',
        {
            fields: {
                product: {
                    id: 8,
                    prices: [
                        {
                            catalogGroupId: 1,
                            currency: 'RUB',
                            price: 2001,
                            quantityFrom: 1,
                            quantityTo: 2
                        },
                        {
                            catalogGroupId: 1,
                            currency: 'RUB',
                            price: 2001,                
                            quantityFrom: 3,
                            quantityTo: 4
                        },
                        {
                            catalogGroupId: 1,
                            currency: 'RUB',
                            price: 2001,                
                            quantityFrom: 5,
                            id: 122
                        },
                    ]
                },
            }
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





