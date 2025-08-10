---
method: sale.propertyvalue.modify
scope: sale
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---

Auto-generated stub. Fill in params/returns/examples.

Example (curl):

```bash
||
|#

### Параметр fields

{% include [Сноска об обязательных параметрах](../../../_includes/required.md) %}

#|
|| **Название**
`тип` | **Описание** ||
|| **order***
[`object`](../../data-types.md) | Объект, содержащий значения идентификатора заказа и значения свойств заказа в виде структуры:

```json
"id": "значение",
"propertyValues": {
    "orderPropsId": "значение",
    "value": "значение"
},
```

||
|#

### Параметр order

{% include [Сноска об обязательных параметрах](../../../_includes/required.md) %}

#|
|| **Название**
`тип` | **Описание** ||
|| **id***
[`sale_order.id`](../data-types.md) | Идентификатор заказа ||
|| **propertyValues***
[`object[]`](../../data-types.md) | Массив объектов (смотрите описание объекта `propertyValues` [ниже](#parametr-propertyvalues)), содержащих идентификатор свойства заказа и значение свойства ||
|#

### Параметр propertyValues

{% include [Сноска об обязательных параметрах](../../../_includes/required.md) %}

#|
|| **Значение**
`тип` | **Описание** ||
|| **orderPropsId***
[`sale_order_property.id`](../data-types.md) | Идентификатор свойства заказа ||
|| **value***
[`string`](../../data-types.md) | Значение свойства заказа ||
|#

## Примеры кода

{% include [Сноска о примерах](../../../_includes/examples.md) %}

{% list tabs %}

- cURL (Webhook)

    ```http
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"fields":{"order":{"id":2066,"propertyValues":[{"orderPropsId":20,"value":"John Smith"},{"orderPropsId":21,"value":"johnsmith@example.com"},{"orderPropsId":22,"value":"+10907996161"},{"orderPropsId":25,"value":"0000073738"},{"orderPropsId":26,"value":"900 S Holland Ave, Springfield, MO 65806, United States"},{"orderPropsId":51,"value":"17.04.2024"},{"orderPropsId":52,"value":"Y"},{"orderPropsId":53,"value":"948"},{"orderPropsId":54,"value":"10"}]}}}' \
    https://**put_your_bitrix24_address**/rest/**put_your_user_id_here**/**put_your_webbhook_here**/sale.propertyvalue.modify
    ```

- cURL (OAuth)

    ```http
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"fields":{"order":{"id":2066,"propertyValues":[{"orderPropsId":20,"value":"John Smith"},{"orderPropsId":21,"value":"johnsmith@example.com"},{"orderPropsId":22,"value":"+10907996161"},{"orderPropsId":25,"value":"0000073738"},{"orderPropsId":26,"value":"900 S Holland Ave, Springfield, MO 65806, United States"},{"orderPropsId":51,"value":"17.04.2024"},{"orderPropsId":52,"value":"Y"},{"orderPropsId":53,"value":"948"},{"orderPropsId":54,"value":"10"}]}},"auth":"**put_access_token_here**"}' \
    https://**put_your_bitrix24_address**/rest/sale.propertyvalue.modify
```
