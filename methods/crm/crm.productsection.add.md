---
method: crm.productsection.add
scope: crm
deprecated: true
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["fields"],"properties":{"fields":{"type":"object"}}}
returns: {"type":"object"}
---

Auto-generated stub. Fill in params/returns/examples.

Example (curl):

```bash
catalogId=$(prompt "Введите ID каталога")
    sectionId=$(prompt "Введите ID родительской секции (если в корне, то 0)")
    sectionName=$(prompt "Введите название секции")

    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{
        "fields": {
            "CATALOG_ID": '"$catalogId"',
            "NAME": "'"$sectionName"'",
            "SECTION_ID": '"$sectionId"'
        }
    }' \
    https://**put_your_bitrix24_address**/rest/**put_your_user_id_here**/**put_your_webbhook_here**/crm.productsection.add
    ```

- cURL (OAuth)

    ```curl
    catalogId=$(prompt "Введите ID каталога")
    sectionId=$(prompt "Введите ID родительской секции (если в корне, то 0)")
    sectionName=$(prompt "Введите название секции")

    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{
        "fields": {
            "CATALOG_ID": '"$catalogId"',
            "NAME": "'"$sectionName"'",
            "SECTION_ID": '"$sectionId"'
        },
        "auth": "**put_access_token_here**"
    }' \
    https://**put_your_bitrix24_address**/rest/crm.productsection.add
```
