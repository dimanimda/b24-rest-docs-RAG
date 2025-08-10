---
method: sale.shipment.add
scope: sale
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
- cURL (OAuth)

    ```http
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"fields":{"orderId":2068,"allowDelivery":"Y","deducted":"Y","deliveryId":2,"statusId":"DN","deliveryDocDate":"2024-02-13T14:05:48","deliveryDocNum":"DocumentNumber123456","trackingNumber":"trackingNumber","basePriceDelivery":999.99,"comments":"My comment for manager","responsibleId":25,"xmlId":"myXmlId"},"auth":"**put_access_token_here**"}' \
    https://**put_your_bitrix24_address**/rest/sale.shipment.add
```
