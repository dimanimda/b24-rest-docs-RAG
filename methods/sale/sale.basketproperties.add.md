---
method: sale.basketproperties.add
scope: sale
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["fields"],"properties":{"fields":{"type":"object"}}}
returns: {"type":"object"}
---

Auto-generated stub. Fill in params/returns/examples.

Example (curl):

```bash
||
|#

### Параметр fields {#parametr-fields}

{% include [Сноска об обязательных параметрах](../../../_includes/required.md) %}

#|
|| **Название**
`тип` | **Описание** ||
|| **basketId***
[`sale_basket_item.id`](../data-types.md) | Идентификатор элемента (позиции) корзины заказа.
Может быть получен методами [`sale.basketitem.get`](../basket-item/sale-basket-item-get.md) или [`sale.basketitem.list`](../basket-item/sale-basket-item-list.md) ||
|| **name***
[`string`](../../data-types.md) | Название свойства ||
|| **value***
[`string`](../../data-types.md) | Значение свойства ||
|| **code***
[`string`](../../data-types.md) | Символьный код свойства ||
|| **sort**
[`integer`](../../data-types.md) | Положение в списке свойств.
Если не указать, будет присвоено значение по умолчанию — 100 ||
|| **xmlId**
[`string`](../../data-types.md) | Внешний код свойства.
Если не указать, будет сгенерирован автоматически ||
|#

## Примеры кода

{% include [Сноска о примерах](../../../_includes/examples.md) %}

{% list tabs %}

- cURL (Webhook)

    ```http
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"fields":{"basketId":6806,"name":"Артикул","value":"4653-4877","code":"ARTICUL"}}' \
    https://**put_your_bitrix24_address**/rest/**put_your_user_id_here**/**put_your_webbhook_here**/sale.basketproperties.add
    ```

- cURL (OAuth)

    ```http
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"fields":{"basketId":6806,"name":"Артикул","value":"4653-4877","code":"ARTICUL"},"auth":"**put_access_token_here**"}' \
    https://**put_your_bitrix24_address**/rest/sale.basketproperties.add
```
