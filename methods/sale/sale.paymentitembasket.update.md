---
method: sale.paymentitembasket.update
scope: sale
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id","fields"],"properties":{"id":{"type":"integer"},"fields":{"type":"object"}}}
returns: {"type":"object"}
---

Auto-generated stub. Fill in params/returns/examples.

Example (curl):

```bash
- cURL (OAuth)

    ```http
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":1186,"fields":{"quantity":1,"xmlId":"myNewXmlId"},"auth":"**put_access_token_here**"}' \
    https://**put_your_bitrix24_address**/rest/sale.paymentitembasket.update
```

---

# Обновить привязку элемента корзины к оплате sale.paymentitembasket.update

> Scope: [`sale`](../../scopes/permissions.md)
>
> Кто может выполнять метод: администратор

Метод обновляет привязку элемента корзины к оплате.

## Параметры метода



#|
|| **Название**
`тип` | **Описание** ||
|| **id***
[`sale_payment_item_basket.id`](../data-types.md) | Идентификатор привязки элемента корзины к оплате ||
|| **fields***
[`object`](../../data-types.md) | Значения полей для обновления привязки элемента корзины к оплате ||
|#

### Параметр fields



#|
|| **Название**
`тип` | **Описание** ||
|| **quantity***
[`double`](../../data-types.md) | Количество товара ||
|| **xmlId**
[`string`](../../data-types.md) | Внешний идентификатор записи ||
|#

## Примеры кода





- cURL (Webhook)

    ```http
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":1186,"fields":{"quantity":1,"xmlId":"myNewXmlId"}}' \
    https://**put_your_bitrix24_address**/rest/**put_your_user_id_here**/**put_your_webbhook_here**/sale.paymentitembasket.update
    ```

- cURL (OAuth)

    ```http
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":1186,"fields":{"quantity":1,"xmlId":"myNewXmlId"},"auth":"**put_access_token_here**"}' \
    https://**put_your_bitrix24_address**/rest/sale.paymentitembasket.update
    ```

- JS

    ```js
    BX24.callMethod(
        'sale.paymentitembasket.update', {
            id: 1186,
            fields: {
                quantity: 1,
                xmlId: 'myNewXmlId',
            }
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
        'sale.paymentitembasket.update',
        [
            'id' => 1186,
            'fields' =>
            [
                'quantity' => 1,
                'xmlId' => 'myNewXmlId',
            ]
        ]
    );

    echo '<PRE>';
    print_r($result);
    echo '</PRE>';
    ```



## Обработка ответа

HTTP-статус: **200**

```json
{
    "result":{
        "paymentItemBasket":{
            "basketId":2722,
            "dateInsert":"2024-04-17T09:37:45+03:00",
            "id":1186,
            "paymentId":1025,
            "quantity":1,
            "xmlId":"myNewXmlId"
        }
    },
    "time":{
        "start":1713341342.331169,
        "finish":1713341343.013559,
        "duration":0.6823902130126953,
        "processing":0.4167962074279785,
        "date_start":"2024-04-17T11:09:02+03:00",
        "date_finish":"2024-04-17T11:09:03+03:00"
    }
}
```

### Возвращаемые данные

#|
|| **Название**
`тип` | **Описание** ||
|| **result**
[`object`](../../data-types.md) | Корневой элемент ответа ||
|| **paymentItemBasket**
[`sale_payment_item_basket`](../data-types.md) | Объект с информацией об обновленной привязке элемента корзины к оплате ||
|| **time**
[`time`](../../data-types.md) | Информация о времени выполнения запроса ||
|#

## Обработка ошибок

HTTP-статус: **400**

```json
{
    "error":201240400001,
    "error_description":"payment item is not exists"
}
```



### Возможные коды ошибок

#|
|| **Код** | **Описание** ||
|| `201240400001` | Обновляемая привязка элемента корзины к оплате не найдена ||
|| `200040300020` | Недостаточно прав для обновления привязки элемента корзины к оплате ||
|| `100` | Не указан параметр `id` ||
|| `100` | Не указан или пустой параметр `fields` ||
|| `0` | Не переданы обязательные поля структуры `fields` ||
|| `0` | Другие ошибки (например, фатальные ошибки) ||
|#



## Продолжите изучение

- [{#T}](./index.md)
- [{#T}](./sale-payment-item-basket-add.md)
- [{#T}](./sale-payment-item-basket-get.md)
- [{#T}](./sale-payment-item-basket-list.md)
- [{#T}](./sale-payment-item-basket-delete.md)
- [{#T}](./sale-payment-item-basket-get-fields.md)
