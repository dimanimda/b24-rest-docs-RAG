---
method: crm.userfield.fields
scope: crm
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object"}
returns: {"type":"object"}
---


---

# Получить описание для пользовательских полей crm.userfield.fields



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указаны параметры и их типы
- отсутствует ответ в случае ошибки и успеха





> Scope: [`crm`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `crm.userfield.fields` возвращает описание полей для пользовательских полей.


## Пример



- JS
  
    ```js
    BX24.callMethod(
        "crm.userfield.fields",
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
  
    ```
    require_once('crest.php');

    $result = CRest::call(
        'crm.userfield.fields',
        []
    );

    echo '<PRE>';
    print_r($result);
    echo '</PRE>';
    ```

- CURL (oauth)

    ```
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{}' \
    https://**put_your_bitrix24_address**/rest/crm.userfield.fields?auth=**put_access_token_here**
    ```

- CURL (webhook)

    ```
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{}' \
    https://**put_your_bitrix24_address**/rest/**put_your_user_id_here**/**put_your_webhook_here**/crm.userfield.fields
    ```




