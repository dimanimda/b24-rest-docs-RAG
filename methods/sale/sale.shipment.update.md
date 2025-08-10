---
method: sale.shipment.update
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
- cURL (OAuth)

    ```http
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":2452,"fields":{"allowDelivery":"N","deducted":"N","deliveryId":3,"statusId":"DD","deliveryDocDate":"2024-02-13T15:05:49","deliveryDocNum":"MyDocumentNumber","trackingNumber":"MyTrackingNumber","basePriceDelivery":1999.99,"comments":"My new comment for manager","responsibleId":1,"xmlId":"myNewXmlId"},"auth":"**put_access_token_here**"}' \
    https://**put_your_bitrix24_address**/rest/sale.shipment.update
```
