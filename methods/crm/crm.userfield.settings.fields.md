---
method: crm.userfield.settings.fields
scope: crm
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object"}
returns: {"type":"object"}
---


---

# Получить описание полей настроек для типа пользовательского поля crm.userfield.settings.fields



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указаны типы параметров
- отсутствует ответ в случае ошибки и успеха





> Scope: [`crm`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `crm.userfield.settings.fields` возвращает описание полей настроек для типа пользовательского поля.

## Параметры

#|
|| **Параметр** | **Описание** ||
|| **type** | Тип пользовательского поля. Значение из списка возвращаемого методом [crm.userfield.types](crm-userfield-types.md).  ||
|#



## Пример



- JS
  
    ```js
    var id = prompt("Введите ID");
    BX24.callMethod(
        "crm.userfield.settings.fields",
        {
            type: "string"
        },
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

    $type = 'string'; // Замените на нужный тип

    $result = CRest::call(
        'crm.userfield.settings.fields',
        ['type' => $type]
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
    -d '{"type":"string"}' \
    https://**put_your_bitrix24_address**/rest/crm.userfield.settings.fields?auth=**put_access_token_here**
    ```

- CURL (webhook)

    ```
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"type":"string"}' \
    https://**put_your_bitrix24_address**/rest/**put_your_user_id_here**/**put_your_webhook_here**/crm.userfield.settings.fields
    ```





## Продолжите изучение

- [{#T}](../../../../tutorials/crm/how-to-add-crm-objects/how-to-add-precision-to-user-field.md)
