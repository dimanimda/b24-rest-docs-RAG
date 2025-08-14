---
method: crm.productsection.update
scope: crm
deprecated: true
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id","fields"],"properties":{"id":{"type":"integer"},"fields":{"type":"object"}}}
returns: {"type":"object"}
---

Auto-generated stub. Fill in params/returns/examples.

Example (curl):

```bash
id=$(prompt "Введите ID")
    sectionName=$(prompt "Введите название секции")

    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{
        "id": '"$id"',
        "fields": {
            "NAME": "'"$sectionName"'"
        }
    }' \
    https://**put_your_bitrix24_address**/rest/**put_your_user_id_here**/**put_your_webbhook_here**/crm.productsection.update
    ```

- cURL (OAuth)

    ```curl
    id=$(prompt "Введите ID")
    sectionName=$(prompt "Введите название секции")

    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{
        "id": '"$id"',
        "fields": {
            "NAME": "'"$sectionName"'"
        },
        "auth": "**put_access_token_here**"
    }' \
    https://**put_your_bitrix24_address**/rest/crm.productsection.update
```
