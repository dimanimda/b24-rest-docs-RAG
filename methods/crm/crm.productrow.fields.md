---
method: crm.productrow.fields
scope: crm
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object"}
returns: {"type":"object"}
---

Auto-generated stub. Fill in params/returns/examples.

---

# Создать/изменить товарные позиции предложения crm.quote.productrows.set



Тут может не хватать некоторых данных — дополним в ближайшее время







- нужны правки под стандарт написания
- не указаны типы параметров
- не указана обязательность параметров
- отсутствуют примеры (должно быть три примера - curl, js, php)
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки





> Scope: [`crm`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `crm.quote.productrows.set` устанавливает (создаёт или обновляет) товарные позиции предложения.

#|
||  **Параметр** / **Тип**| **Описание** ||
|| **id**
[`unknown`](../../data-types.md) | Идентификатор предложения. ||
|| **rows**
[`unknown`](../../data-types.md) | Товарные позиции - массив вида `array(array("поле"=>"значение"[, ...])[, ...])`, где "поле" может принимать значения из возвращаемых методом [crm.productrow.fields](../../crm/outdated/productrow-old/crm-productrow-fields.md). Товарные позиции предложения, существующие до момента вызова метода, будут заменены новыми. После сохранения будет произведён пересчёт суммы предложения. ||
|#

## Пример



- JS

    ```js
    var id = prompt("Введите ID");
    BX24.callMethod(
        "crm.quote.productrows.set",
        {
            id: id,
            rows:
            [
                { "PRODUCT_ID": 1, "PRICE": 100.00, "QUANTITY": 2 },
                { "PRODUCT_ID": 2, "PRICE": 200.00, "QUANTITY": 1 }
            ]
        },
        function(result)
        {
            if(result.error())
                console.error(result.error());
            else
                console.info(result.data());
        }
    );
    ```




