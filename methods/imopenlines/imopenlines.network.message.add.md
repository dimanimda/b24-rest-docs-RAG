---
method: imopenlines.network.message.add
scope: imopenlines
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
    -d '{"CODE":"ab515f5d85a8b844d484f6ea75a2e494","USER_ID":2,"MESSAGE":"message text","ATTACH":"","KEYBOARD":"","URL_PREVIEW":"Y","auth":"**put_access_token_here**"}' \
    https://**put_your_bitrix24_address**/rest/imopenlines.network.message.add
```
