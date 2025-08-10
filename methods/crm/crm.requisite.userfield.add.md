---
method: crm.requisite.userfield.add
scope: crm
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
    -d '{"fields":{"USER_TYPE_ID":"string","ENTITY_ID":"CRM_REQUISITE","SORT":100,"MULTIPLE":"N","MANDATORY":"N","SHOW_FILTER":"E","SHOW_IN_LIST":"Y","EDIT_FORM_LABEL":"ПП - Строка","LIST_COLUMN_LABEL":"ПП - Строка","LIST_FILTER_LABEL":"ПП - Строка","FIELD_NAME":"NEWTECH_v1_STRING"}}' \
    https://**put_your_bitrix24_address**/rest/**put_your_user_id_here**/**put_your_webbhook_here**/crm.requisite.userfield.add
    ```

- cURL (OAuth) 

    ```bash
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"fields":{"USER_TYPE_ID":"string","ENTITY_ID":"CRM_REQUISITE","SORT":100,"MULTIPLE":"N","MANDATORY":"N","SHOW_FILTER":"E","SHOW_IN_LIST":"Y","EDIT_FORM_LABEL":"ПП - Строка","LIST_COLUMN_LABEL":"ПП - Строка","LIST_FILTER_LABEL":"ПП - Строка","FIELD_NAME":"NEWTECH_v1_STRING"},"auth":"**put_access_token_here**"}' \
    https://**put_your_bitrix24_address**/rest/crm.requisite.userfield.add
```
