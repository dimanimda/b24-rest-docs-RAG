---
method: crm.catalog.list
scope: crm
deprecated: true
aliases: []
rate_limit_per_sec: 2
pagination: start
params: {"type":"object","properties":{"filter":{"type":"object"},"order":{"type":"object"},"select":{"type":"array","items":{"type":"string"}},"start":{"type":["integer","string"]}}}
returns: {"type":"array","items":{"type":"object"}}
---


---

# Получить список товарных каталогов crm.catalog.list

> Scope: [`crm`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод возвращает список товарных каталогов. Является реализацией списочного метода для товарных каталогов.

Cмотрите описание [списочных методов](../../../../api-reference/how-to-call-rest-api/list-methods-pecularities.md).

## Примеры кода





- cURL (Webhook)

    ```bash
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{}' \
    https://**put_your_bitrix24_address**/rest/**put_your_user_id_here**/**put_your_webhook_here**/crm.catalog.list
    ```

- cURL (OAuth)

    ```bash
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{}' \
    https://**put_your_bitrix24_address**/rest/crm.catalog.list?auth=**put_access_token_here**
    ```

- JS

    ```js
    BX24.callMethod(
        "crm.catalog.list",
        {},
        function(result)
        {
            if(result.error())
                console.error(result.error());
            else
            {
                console.dir(result.data());
                if(result.more())
                    result.next();
            }
        }
    );
    ```

- PHP

    ```php
    require_once('crest.php');

    $result = CRest::call(
        'crm.catalog.list',
        []
    );

    echo '<PRE>';
    print_r($result);
    echo '</PRE>';
    ```


