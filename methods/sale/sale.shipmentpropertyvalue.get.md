---
method: sale.shipmentpropertyvalue.get
scope: sale
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id"],"properties":{"id":{"type":"integer"}}}
returns: {"type":"object"}
---

Auto-generated stub. Fill in params/returns/examples.

Example (curl):

```bash
curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":38164}' \
    https://**put_your_bitrix24_address**/rest/**put_your_user_id_here**/**put_your_webhook_here**/sale.shipmentpropertyvalue.get
    ```

- cURL (OAuth)

    ```bash
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":38164,"auth":"**put_access_token_here**"}' \
    https://**put_your_bitrix24_address**/rest/sale.shipmentpropertyvalue.get
```

---

# Получить значения свойства отгрузки по id sale.shipmentpropertyvalue.get

> Scope: [`sale`](../../scopes/permissions.md)
>
> Кто может выполнять метод: администратор

Метод возвращает значения свойства отгрузки.

## Параметры метода



#|
|| **Название**
`тип` | **Описание** ||
|| **id***
[`sale_shipment_property_value.id`](../data-types.md#sale_shipment_property_value) | Идентификатор значения свойства отгрузки ||
|#

## Примеры кода





- cURL (Webhook)

    ```bash
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":38164}' \
    https://**put_your_bitrix24_address**/rest/**put_your_user_id_here**/**put_your_webhook_here**/sale.shipmentpropertyvalue.get
    ```

- cURL (OAuth)

    ```bash
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":38164,"auth":"**put_access_token_here**"}' \
    https://**put_your_bitrix24_address**/rest/sale.shipmentpropertyvalue.get
    ```

- JS

    ```js
    BX24.callMethod(
        "sale.shipmentpropertyvalue.get", {
            "id": 38164
        },
        function(result) {
            if (result.error()) {
                console.error(result.error());
            } else {
                console.info(result.data());
            }
        }
    );
    ```

- PHP

    ```php
    require_once('crest.php');

    $result = CRest::call(
        'sale.shipmentpropertyvalue.get',
        [
            'id' => 38164
        ]
    );

    echo '<PRE>';
    print_r($result);
    echo '</PRE>';
    ```



## Ответ в случае успеха

HTTP-статус: **200**

```json
{
    "result":{
        "propertyValue":{
            "code":null,
            "id":38164,
            "name":"Comments",
            "shipmentPropsId":105,
            "value":"Comments value"
        }
    },
    "time":{
        "start":1718023082.525679,
        "finish":1718023082.798483,
        "duration":0.27280378341674805,
        "processing":0.055876970291137695,
        "date_start":"2024-06-10T15:38:02+03:00",
        "date_finish":"2024-06-10T15:38:02+03:00"
    }
}
```

### Возвращаемые данные

#|
|| **Название**
`тип` | **Описание** ||
|| **result**
[`object`](../../data-types.md) | Корневой элемент ответа ||
|| **propertyValue**
[`sale_shipment_property_value.id`](../data-types.md#sale_shipment_property_value) | Информация о значении свойства отгрузки ||
|| **time**
[`time`](../../data-types.md) | Информация о времени выполнения запроса ||
|#

## Обработка ошибок

HTTP-статус: **400**

```json
{
    "error":201040400001,
    "error_description":"Property value has not been found"
}
```



### Возможные коды ошибок

#|
|| **Код** | **Описание** ||
|| `201040400001` | Значение свойства не найдено ||
|| `200040300010` | Недостаточно прав для чтения значения свойства ||
|| `100` | Не указан параметр `id` ||
|| `0` | Другие ошибки (например, фатальные ошибки) ||
|#



## Продолжите изучение

- [{#T}](./sale-shipment-property-value-modify.md)
- [{#T}](./sale-shipment-property-value-list.md)
- [{#T}](./sale-shipment-propertyvalue-delete.md)
- [{#T}](./sale-shipment-property-value-get-fields.md)
