---
method: crm.item.payment.product.delete
scope: crm
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id"],"properties":{"id":{"type":"integer"}}}
returns: {"type":"object"}
---


---

# Удалить товарную позицию из оплаты crm.item.payment.product.delete

> Scope: [`crm`](../../../../scopes/permissions.md)
>
> Кто может выполнять метод: требуется право на изменение заказа, из которого удаляется товарная позиция


Метод удаляет товарную позицию из оплаты.

## Параметры метода



#|
|| **Название**
`тип` | **Описание** ||
|| **id***
[`integer`](../../../../data-types.md) | Идентификатор товарной позиции в оплате.
Можно получить с помощью [`crm.item.payment.product.list`](../../../../crm/universal/payment/products-in-payment/crm-item-payment-product-list.md)
 ||
|#

## Примеры кода





- cURL (Webhook)

    ```http
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":1194}' \
    https://**put_your_bitrix24_address**/rest/**put_your_user_id_here**/**put_your_webhook_here**/crm.item.payment.product.delete
    ```

- cURL (OAuth)

    ```http
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":1194,"auth":"**put_access_token_here**"}' \
    https://**put_your_bitrix24_address**/rest/crm.item.payment.product.delete
    ```

- JS

    ```js
    BX24.callMethod(
        'crm.item.payment.product.delete', {
            id: 1194,
        },
        function(result) {
            if (result.error()) {
                console.error(result.error());
            } else {
                console.log(result.data());
            }
        }
    );
    ```

- PHP

    ```php
    require_once('crest.php');

    $result = CRest::call(
        'crm.item.payment.product.delete',
        [
            'id' => 1194
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
   "result":true,
   "time":{
      "start":1716281948.98814,
      "finish":1716281949.752528,
      "duration":0.764387845993042,
      "processing":0.488523006439209,
      "date_start":"2024-05-21T11:59:08+03:00",
      "date_finish":"2024-05-21T11:59:09+03:00"
   }
}
```

### Возвращаемые данные

#|
|| **Название**
`тип` | **Описание** ||
|| **result**
[`boolean`](../../../../data-types.md) | Результат операции ||
|| **time**
[`time`](../../../../data-types.md) | Информация о времени выполнения запроса ||
|#

## Обработка ошибок

HTTP-статус: **400**

```json
{
   "error":0,
   "error_description":"Payable item has not been found"
}
```



### Возможные коды ошибок

#|
|| **Код** | **Описание** ||
|| `0` | Товарная позиция не найдена ||
|| `0` | Доступ запрещен ||
|| `100` | Не указан параметр id ||
|| `0` | Другие ошибки (например, фатальные ошибки) ||
|#



## Продолжите изучение

- [{#T}](./crm-item-payment-product-add.md)
- [{#T}](./crm-item-payment-product-list.md)
- [{#T}](./crm-item-payment-product-delete.md)
