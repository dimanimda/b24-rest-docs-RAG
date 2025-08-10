---
method: crm.dealcategory.default.set
scope: crm
deprecated: true
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
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
    -d '{"name":"","auth":"**put_access_token_here**"}' \
    https://**put_your_bitrix24_address**/rest/crm.dealcategory.default.set
```

---

# Установить настройки общего направления сделок crm.dealcategory.default.set

> Scope: [`crm`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь



Метод устарел. Рекомендуется использовать методы воронок [`crm.category.*`](../../universal/category/index.md)



Метод записи настроек общего направления сделок.

## Параметры метода



#|
|| **Название**
`тип` | **Описание** ||
|| **name** 
[`string`](../../../data-types.md)| Название общего направления ||
|#

## Примеры кода





- cURL (Webhook)

    ```http
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":""}' \
    https://**put_your_bitrix24_address**/rest/**put_your_user_id_here**/**put_your_webhook_here**/crm.dealcategory.default.set
    ```

- cURL (OAuth)

    ```http
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"","auth":"**put_access_token_here**"}' \
    https://**put_your_bitrix24_address**/rest/crm.dealcategory.default.set
    ```

- JS

    ```js
    BX24.callMethod(
        "crm.dealcategory.default.set",
        { "name": "" },
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
        'crm.dealcategory.default.set',
        [
            'name' => ''
        ]
    );

    echo '<PRE>';
    print_r($result);
    echo '</PRE>';
    ```


