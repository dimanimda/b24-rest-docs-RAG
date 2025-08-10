---
method: sale.paysystem.handler.update
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
curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"ID":3,"FIELDS":{"CODE":"newresthandlercode","NAME":"Новое название обработчика","SORT":200,"SETTINGS":{"CURRENCY":["RUB","BYN"],"FORM_DATA":{"ACTION_URI":"http://example.com/payment_form.php","METHOD":"POST","PARAMS":{"serviceid":"REST_SERVICE_ID_2","invoiceNumber":"PAYMENT_ID_2","Sum":"PAYMENT_SHOULD_PAY_2","customer":"PAYMENT_BUYER_ID_2"},"CODES":{"REST_SERVICE_ID_2":{"NAME":"Номер магазина","DESCRIPTION":"Номер магазина","SORT":"100"},"REST_SERVICE_KEY_2":{"NAME":"Секретный ключ","DESCRIPTION":"Секретный ключ","SORT":"300"},"PAYMENT_ID_2":{"NAME":"Номер оплаты","SORT":"400","GROUP":"PAYMENT","DEFAULT":{"PROVIDER_KEY":"PAYMENT","PROVIDER_VALUE":"ACCOUNT_NUMBER"}},"PAYMENT_SHOULD_PAY_2":{"NAME":"Сумма оплаты","SORT":"600","GROUP":"PAYMENT","DEFAULT":{"PROVIDER_KEY":"PAYMENT","PROVIDER_VALUE":"SUM"}},"PS_CHANGE_STATUS_PAY_2":{"NAME":"Автоматическая смена статуса оплаты","SORT":"700","INPUT":{"TYPE":"Y/N"}},"PAYMENT_BUYER_ID_2":{"NAME":"Код покупателя","SORT":"1000","GROUP":"PAYMENT","DEFAULT":{"PROVIDER_KEY":"ORDER","PROVIDER_VALUE":"USER_ID"}}}}}}' \
    https://**put_your_bitrix24_address**/rest/**put_your_user_id_here**/**put_your_webbhook_here**/sale.paysystem.handler.update
    ```

- cURL (OAuth)

    ```bash
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"ID":3,"FIELDS":{"CODE":"newresthandlercode","NAME":"Новое название обработчика","SORT":200,"SETTINGS":{"CURRENCY":["RUB","BYN"],"FORM_DATA":{"ACTION_URI":"http://example.com/payment_form.php","METHOD":"POST","PARAMS":{"serviceid":"REST_SERVICE_ID_2","invoiceNumber":"PAYMENT_ID_2","Sum":"PAYMENT_SHOULD_PAY_2","customer":"PAYMENT_BUYER_ID_2"},"CODES":{"REST_SERVICE_ID_2":{"NAME":"Номер магазина","DESCRIPTION":"Номер магазина","SORT":"100"},"REST_SERVICE_KEY_2":{"NAME":"Секретный ключ","DESCRIPTION":"Секретный ключ","SORT":"300"},"PAYMENT_ID_2":{"NAME":"Номер оплаты","SORT":"400","GROUP":"PAYMENT","DEFAULT":{"PROVIDER_KEY":"PAYMENT","PROVIDER_VALUE":"ACCOUNT_NUMBER"}},"PAYMENT_SHOULD_PAY_2":{"NAME":"Сумма оплаты","SORT":"600","GROUP":"PAYMENT","DEFAULT":{"PROVIDER_KEY":"PAYMENT","PROVIDER_VALUE":"SUM"}},"PS_CHANGE_STATUS_PAY_2":{"NAME":"Автоматическая смена статуса оплаты","SORT":"700","INPUT":{"TYPE":"Y/N"}},"PAYMENT_BUYER_ID_2":{"NAME":"Код покупателя","SORT":"1000","GROUP":"PAYMENT","DEFAULT":{"PROVIDER_KEY":"ORDER","PROVIDER_VALUE":"USER_ID"}}}}},"auth":"**put_access_token_here**"}' \
    https://**put_your_bitrix24_address**/rest/sale.paysystem.handler.update
```
