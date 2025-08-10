---
method: sale.cashbox.check.apply
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
curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"UUID":"check|example.com|1","PRINT_END_TIME":"1609459200","REG_NUMBER_KKT":"1234567891011121","FISCAL_DOC_ATTR":"1234567890","FISCAL_DOC_NUMBER":"12345","FISCAL_RECEIPT_NUMBER":"123","FN_NUMBER":"1234567891011121","SHIFT_NUMBER":"1"}' \
    https://**put_your_bitrix24_address**/rest/**put_your_user_id_here**/**put_your_webbhook_here**/sale.cashbox.check.apply
    ```

- cURL (OAuth)

    ```bash
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"UUID":"check|example.com|1","PRINT_END_TIME":"1609459200","REG_NUMBER_KKT":"1234567891011121","FISCAL_DOC_ATTR":"1234567890","FISCAL_DOC_NUMBER":"12345","FISCAL_RECEIPT_NUMBER":"123","FN_NUMBER":"1234567891011121","SHIFT_NUMBER":"1","auth":"**put_access_token_here**"}' \
    https://**put_your_bitrix24_address**/rest/sale.cashbox.check.apply
```
