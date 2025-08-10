---
method: timeman.networkrange.set
scope: timeman
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---

Auto-generated stub. Fill in params/returns/examples.

Example (curl):

```bash
Диапазон может содержать:
- блок адресов, например, `10.0.0.0-10.255.255.255`
- один адрес, например, `10.10.0.1` ||
|#

## Примеры кода

{% include [Сноска о примерах](../../../_includes/examples.md) %}

{% list tabs %}

- cURL (Webhook)

    ```bash
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"ranges":[{"ip_range":"10.0.0.0-10.255.255.255","name":"Офисная сеть 10.x.x.x"},{"ip_range":"172.16.0.0-172.31.255.255","name":"Офисная сеть 172.x.x.x"},{"ip_range":"192.168.0.0-192.168.255.255","name":"Офисная сеть 192.168.x.x"}]}' \
    https://**put_your_bitrix24_address**/rest/**put_your_user_id_here**/**put_your_webbhook_here**/timeman.networkrange.set
    ```

- cURL (OAuth)

    ```bash
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"ranges":[{"ip_range":"10.0.0.0-10.255.255.255","name":"Офисная сеть 10.x.x.x"},{"ip_range":"172.16.0.0-172.31.255.255","name":"Офисная сеть 172.x.x.x"},{"ip_range":"192.168.0.0-192.168.255.255","name":"Офисная сеть 192.168.x.x"}],"auth":"**put_access_token_here**"}' \
    https://**put_your_bitrix24_address**/rest/timeman.networkrange.set
```
