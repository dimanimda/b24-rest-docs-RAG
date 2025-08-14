---
method: crm.stagehistory.list
scope: crm
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: start
params: {"type":"object","properties":{"filter":{"type":"object"},"order":{"type":"object"},"select":{"type":"array","items":{"type":"string"}},"start":{"type":["integer","string"]}}}
returns: {"type":"array","items":{"type":"object"}}
---

Auto-generated stub. Fill in params/returns/examples.

Example (curl):

```bash
curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"entityTypeId":2,"order":{"ID":"ASC"},"filter":{"OWNER_ID":1},"select":["ID","STAGE_ID","CREATED_TIME"]}' \
    https://**put_your_bitrix24_address**/rest/**put_your_user_id_here**/**put_your_webbhook_here**/crm.stagehistory.list
    ```

- cURL (OAuth)

    ```bash
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"entityTypeId":2,"order":{"ID":"ASC"},"filter":{"OWNER_ID":1},"select":["ID","STAGE_ID","CREATED_TIME"],"auth":"**put_access_token_here**"}' \
    https://**put_your_bitrix24_address**/rest/crm.stagehistory.list
```
