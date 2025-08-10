---
method: catalog.vat.delete
scope: catalog
deprecated: true
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id"],"properties":{"id":{"type":"integer"}}}
returns: {"type":"object"}
---

Auto-generated stub. Fill in params/returns/examples.

---

# Удалить ставку НДС crm.vat.delete

> Scope: [`crm`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: пользователь с правами администратора CRM



Метод `crm.vat.delete` продолжает работать, но у него есть более актуальный аналог [catalog.vat.delete](../../../catalog/vat/catalog-vat-delete.md).



Метод `crm.vat.delete` удаляет ставку НДС по идентификатору.

## Параметры метода



#|
|| **Название**
`тип` | **Описание** ||
|| **id*** 
[`integer`](../../../data-types.md) | Идентификатор ставки НДС, которую требуется удалить. 
Получить список ставок с идентификаторами можно методом [crm.vat.list](./crm-vat-list.md) ||
|#

## Примеры кода





- JS

    ```js
    BX24.callMethod(
        "crm.vat.delete",
        {
            id: 7
        },
        function(result) {
            if(result.error())
                console.error(result.error());
            else
                console.dir(result.data());
        }
    );
    ```

- cURL (Webhook)

    ```bash
    curl -X POST \
         -H "Content-Type: application/json" \
         -H "Accept: application/json" \
         -d '{"id":7}' \
         https://**put_your_bitrix24_address**/rest/**put_your_user_id_here**/**put_your_webbhook_here**/crm.vat.delete
    ```

- cURL (OAuth)

    ```bash
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":7,"auth":"**put_access_token_here**"}' \
    https://**put_your_bitrix24_address**/rest/crm.vat.delete
    ```

- PHP

    ```php
    require_once('crest.php');

    $result = CRest::call(
        'crm.vat.delete',
        [
            'id' => 7
        ]
    );

    echo '<PRE>';
    print_r($result);
    echo '</PRE>';
    ```



## Обработка ответа

HTTP-статус: **200**

```json
{
    "result": true,
    "time": {
        "start": 1751983429.678159,
        "finish": 1751983429.873604,
        "duration": 0.19544506072998047,
        "processing": 0.01796698570251465,
        "date_start": "2025-07-08T17:03:49+03:00",
        "date_finish": "2025-07-08T17:03:49+03:00",
        "operating_reset_at": 1751984029,
        "operating": 0
    }
}
```

### Возвращаемые данные

#|
|| **Название**
`тип` | **Описание** ||
|| **result** 
[`boolean`](../../../data-types.md) |  Корневой элемент ответа, содержит `true` в случае успеха ||
|| **time** 
[`time`](../../../data-types.md#time) | Информация о времени выполнения запроса ||
|#

## Обработка ошибок

HTTP-статус: **400**

```json
{
    "error": "Invalid identifier.",
    "error_description": "Передан некорректный идентификатор."
}
```



### Возможные коды ошибок

#|
|| **Код** | **Описание** | **Значение** ||
|| `400`     | `The Commercial Catalog module is not installed.` | Модуль catalog не установлен ||
|| `400`     | `Invalid identifier.` | Передан некорректный идентификатор ||
|| `400`     | `Access denied.` | Нет прав на выполнение операции ||
|| `400`     | `Error on deleting VAT rate.` | Ошибка при удалении ставки НДС ||
|#



## Продолжите изучение

- [{#T}](./crm-vat-fields.md)
- [{#T}](./crm-vat-list.md)
- [{#T}](./crm-vat-get.md)
- [{#T}](./crm-vat-add.md)
- [{#T}](./crm-vat-update.md) 
