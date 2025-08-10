---
method: crm.livefeedmessage.add
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
"SPERM": {
    "CRMCONTACT": ["CRMCONTACT3", "CRMCONTACT7"], // контакты CRM
    "CRMCOMPANY": ["CRMCOMPANY1", "CRMCOMPANY3"], // компании CRM
    "CRMDEAL": ["CRMDEAL3", "CRMDEAL5"], // сделки CRM
    "CRMLEAD": ["CRMLEAD9", "CRMLEAD11"], // лиды CRM
    "SG": ["SG5", "SG9"], // рабочие группы соцсети
    "U": ["U1", "U3"], // пользователи
    "DR": ["DR1", "DR7"], // подразделения с подотделами
}
``` 
||
|| **ENTITYTYPEID** 
[`integer`](../../../data-types.md)| Тип сущности, в которой опубликовано сообщение:
- 1 - лид;
- 2 - сделка;
- 3 - контакт;
- 4 - компания ||
|| **ENTITYID** 
[`integer`](../../../data-types.md)| ID конкретного лида/сделки/контакта/компании, в которой опубликовано сообщение. ||
|| **FILES**
[`file`](../../../data-types.md) | Файлы сообщения ||
|#

## Примеры кода

{% include [Сноска о примерах](../../../../_includes/examples.md) %}

### Пример 1

{% list tabs %}

- cURL (Webhook)

    ```http
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"fields":{"POST_TITLE":"Немного о сервисе","MESSAGE":"Битрикс24 создан на базе платформы Bitrix Framework.","SPERM":{"CRMCONTACT":["CRMCONTACT3","CRMCONTACT7"],"CRMCOMPANY":["CRMCOMPANY1","CRMCOMPANY3"],"CRMDEAL":["CRMDEAL3","CRMDEAL5"],"CRMLEAD":["CRMLEAD9","CRMLEAD11"],"SG":["SG5","SG9"],"U":["U1","U3"],"DR":["DR1","DR7"]},"ENTITYTYPEID":3,"ENTITYID":3}}' \
    https://**put_your_bitrix24_address**/rest/**put_your_user_id_here**/**put_your_webbhook_here**/crm.livefeedmessage.add
    ```

- cURL (OAuth)

    ```http
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"fields":{"POST_TITLE":"Немного о сервисе","MESSAGE":"Битрикс24 создан на базе платформы Bitrix Framework.","SPERM":{"CRMCONTACT":["CRMCONTACT3","CRMCONTACT7"],"CRMCOMPANY":["CRMCOMPANY1","CRMCOMPANY3"],"CRMDEAL":["CRMDEAL3","CRMDEAL5"],"CRMLEAD":["CRMLEAD9","CRMLEAD11"],"SG":["SG5","SG9"],"U":["U1","U3"],"DR":["DR1","DR7"]},"ENTITYTYPEID":3,"ENTITYID":3},"auth":"**put_access_token_here**"}' \
    https://**put_your_bitrix24_address**/rest/crm.livefeedmessage.add
```
