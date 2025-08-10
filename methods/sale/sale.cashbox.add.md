---
method: sale.cashbox.add
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
curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"NAME":"Rest-касса","REST_CODE":"restcashbox01","EMAIL":"user@example.com","NUMBER_KKM":"123","ACTIVE":"Y","SORT":100,"OFD":"bx_ofdruofd","OFD_SETTINGS":{"OFD_MODE":{"IS_TEST":"N"}},"SETTINGS":{"AUTH":{"KEYWORD":"top_secret!","PREFERENCE":"SECOND"},"INTERACTION":{"MODE":"ACTIVE"}}}' \
    https://**put_your_bitrix24_address**/rest/**put_your_user_id_here**/**put_your_webbhook_here**/sale.cashbox.add
    ```

- cURL (OAuth)

    ```bash
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"NAME":"Rest-касса","REST_CODE":"restcashbox01","EMAIL":"user@example.com","NUMBER_KKM":"123","ACTIVE":"Y","SORT":100,"OFD":"bx_ofdruofd","OFD_SETTINGS":{"OFD_MODE":{"IS_TEST":"N"}},"SETTINGS":{"AUTH":{"KEYWORD":"top_secret!","PREFERENCE":"SECOND"},"INTERACTION":{"MODE":"ACTIVE"}},"auth":"**put_access_token_here**"}' \
    https://**put_your_bitrix24_address**/rest/sale.cashbox.add
```
