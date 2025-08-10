---
method: task.items.getlist
scope: task
deprecated: false
aliases: ["tasks.task.list"]
rate_limit_per_sec: 2
pagination: nav_params
params: {"type":"array","positional":["order","filter","select","params"]}
returns: {"type":"array","items":{"type":"object"}}
---

Auto-generated stub. Fill in params/returns/examples.

Example (curl):

```bash
curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{}' \
    https://**put_your_bitrix24_address**/rest/**put_your_user_id_here**/**put_your_webhook_here**/task.items.getlist
    ```

- cURL (OAuth)

    ```bash
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{}' \
    https://**put_your_bitrix24_address**/rest/task.items.getlist?auth=**put_access_token_here**
```
