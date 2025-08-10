---
method: sale.paysystem.settings.update
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
    -d '{"ID":11,"PERSON_TYPE_ID":1,"SETTINGS":{"REST_SERVICE_KEY_IFRAME":{"TYPE":"VALUE","VALUE":"NEW_KEY"}}}' \
    https://**put_your_bitrix24_address**/rest/**put_your_user_id_here**/**put_your_webhook_here**/sale.paysystem.settings.update
    ```

- cURL (OAuth)

    ```bash
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"ID":11,"PERSON_TYPE_ID":1,"SETTINGS":{"REST_SERVICE_KEY_IFRAME":{"TYPE":"VALUE","VALUE":"NEW_KEY"}},"auth":"**put_access_token_here**"}' \
    https://**put_your_bitrix24_address**/rest/sale.paysystem.settings.update
```
