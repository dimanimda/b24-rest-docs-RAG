---
method: crm.productrow.fields
scope: crm
deprecated: true
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object"}
returns: {"type":"object"}
---


---

# Получить описания полей товарных позиций crm.productrow.fields

> Scope: [`crm`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь



Метод устарел. Рекомендуется использовать  [`crm.item.productrow.fields`](../../universal/product-rows/crm-item-productrow-fields.md)




Метод получает информацию о структуре данных товарных позиций в CRM, включая типы полей и их назначение.

Без параметров.

## Примеры кода





- cURL (Webhook)

    ```http
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{}' \
    https://**put_your_bitrix24_address**/rest/**put_your_user_id_here**/**put_your_webhook_here**/crm.productrow.fields
    ```

- cURL (OAuth)

    ```http
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"auth":"**put_access_token_here**"}' \
    https://**put_your_bitrix24_address**/rest/crm.productrow.fields
    ```

- JS

    ```js
    BX24.callMethod(
        "crm.productrow.fields",
        {},
        function(result)
        {
            if(result.error())
                console.error(result.error());
            else
                console.dir(result.data());
        }
    );
    ```

- PHP

    ```php
    require_once('crest.php');

    $result = CRest::call(
        'crm.productrow.fields',
        []
    );

    echo '<PRE>';
    print_r($result);
    echo '</PRE>';
    ```


