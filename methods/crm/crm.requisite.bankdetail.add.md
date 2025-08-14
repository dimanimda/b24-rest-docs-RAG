---
method: crm.requisite.bankdetail.add
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
    -d '{"fields":{"ENTITY_ID":27,"COUNTRY_ID":1,"NAME":"Супербанк","RQ_BANK_NAME":"ПАО Супербанк","RQ_BANK_ADDR":"117312, г. Москва, улица Вавилова, дом 19","RQ_BIK":"044525225","RQ_ACC_NUM":"40702810938000060473","RQ_ACC_CURRENCY":"RUR","RQ_COR_ACC_NUM":"30101810400000000225","XML_ID":"1e4641fd-2dd9-31e6-b2f2-105056c00008","ACTIVE":"Y","SORT":600}}' \
    https://**put_your_bitrix24_address**/rest/**put_your_user_id_here**/**put_your_webhook_here**/crm.requisite.bankdetail.add
    ```

- cURL (OAuth) 

    ```bash
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"fields":{"ENTITY_ID":27,"COUNTRY_ID":1,"NAME":"Супербанк","RQ_BANK_NAME":"ПАО Супербанк","RQ_BANK_ADDR":"117312, г. Москва, улица Вавилова, дом 19","RQ_BIK":"044525225","RQ_ACC_NUM":"40702810938000060473","RQ_ACC_CURRENCY":"RUR","RQ_COR_ACC_NUM":"30101810400000000225","XML_ID":"1e4641fd-2dd9-31e6-b2f2-105056c00008","ACTIVE":"Y","SORT":600},"auth":"**put_access_token_here**"}' \
    https://**put_your_bitrix24_address**/rest/crm.requisite.bankdetail.add
```
