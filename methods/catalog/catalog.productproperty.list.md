---
method: catalog.productproperty.list
scope: catalog
deprecated: true
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object","properties":{"filter":{"type":"object"},"order":{"type":"object"},"select":{"type":"array","items":{"type":"string"}},"start":{"type":["integer","string"]}}}
returns: {"type":"array","items":{"type":"object"}}
---

Auto-generated stub. Fill in params/returns/examples.

---

# Получить список свойств товаров crm.product.property.list

> Scope: [`crm`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь



Метод `crm.product.property.list` продолжает работать, но у него есть более актуальный аналог [catalog.productProperty.list](../../../catalog/product-property/catalog-product-property-list.md).



Метод `crm.product.property.list` возвращает список свойств товаров.

## Параметры метода



#|
|| **Название**
`тип` | **Описание** ||
|| **order** |  Сортировка ||
|| **filter** | Поля фильтра ||
|#

## Примеры кода





- cURL (Webhook)

    ```http
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"order":{"SORT":"ASC"},"filter":{"PROPERTY_TYPE":"S","USER_TYPE":"HTML"}}' \
    https://**put_your_bitrix24_address**/rest/**put_your_user_id_here**/**put_your_webbhook_here**/crm.product.property.list
    ```

- cURL (OAuth)

    ```http
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"order":{"SORT":"ASC"},"filter":{"PROPERTY_TYPE":"S","USER_TYPE":"HTML"},"auth":"**put_access_token_here**"}' \
    https://**put_your_bitrix24_address**/rest/crm.product.property.list
    ```

- JS

    ```js
    BX24.callMethod(
        "crm.product.property.list", {
            order: {"SORT": "ASC"},
            filter: {
                "PROPERTY_TYPE": "S",
                "USER_TYPE": "HTML"
            }
        },
        function (result)
        {
            if (result.error())
            {
                console.error(result.error());
            }
            else
            {
                console.dir(result.data());
                if (result.more())
                    result.next();
            }
        }
    );
    ```

- PHP

    ```php
    require_once('crest.php');

    $result = CRest::call(
        'crm.product.property.list',
        [
            'order' => ['SORT' => 'ASC'],
            'filter' => [
                'PROPERTY_TYPE' => 'S',
                'USER_TYPE' => 'HTML'
            ]
        ]
    );

    echo '<PRE>';
    print_r($result);
    echo '</PRE>';
    ```


