---
method: catalog.productproperty.getfields
scope: catalog
deprecated: true
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---

Auto-generated stub. Fill in params/returns/examples.

---

# Получить поля свойства товаров crm.product.property.fields

> Scope: [`crm`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь



Метод `crm.product.property.fields` продолжает работать, но у него есть более актуальный аналог [catalog.productProperty.getFields](../../../catalog/product-property/catalog-product-property-get-fields.md).



Метод `crm.product.property.fields` возвращает описание полей для свойств товаров.

Без параметров.

## Примеры кода





- cURL (Webhook)

    ```http
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{}' \
    https://**put_your_bitrix24_address**/rest/**put_your_user_id_here**/**put_your_webbhook_here**/crm.product.property.fields
   ```

- cURL (OAuth)

    ```http
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"auth":"**put_access_token_here**"}' \
    https://**put_your_bitrix24_address**/rest/crm.product.property.fields
    ```

- JS

    ```js
    BX24.callMethod(
        "crm.product.property.fields",
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
        'crm.product.property.fields',
        []
    );

    echo '<PRE>';
    print_r($result);
    echo '</PRE>';
    ```


