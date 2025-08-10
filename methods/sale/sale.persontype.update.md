---
method: sale.persontype.update
scope: sale
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id","fields"],"properties":{"id":{"type":"integer"},"fields":{"type":"object"}}}
returns: {"type":"object"}
---

Auto-generated stub. Fill in params/returns/examples.

Example (curl):

```bash
||
|#

### Параметр fields

{% include [Сноска об обязательных параметрах](../../../_includes/required.md) %}

#|
|| **Название**
`тип` | **Описание** ||
|| **name***
[`string`](../../data-types.md) | Название типа плательщика ||
|| **code**
[`string`](../../data-types.md) | Код типа плательщика. Должен быть уникальным ||
|| **sort**
[`string`](../../data-types.md) | Сортировка. По умолчанию значение равно `150` ||
|| **active**
[`string`](../../data-types.md) | Флаг активности. Может принимать значения `Y` / `N`. По умолчанию установлено `Y` ||
|| **xmlId**
[`string`](../../data-types.md) | Внешний идентификатор.

Можно использовать для синхронизации текущего типа плательщика с аналогичной позицией во внешней системе
||
|#

## Примеры кода

{% include [Сноска о примерах](../../../_includes/examples.md) %}

{% list tabs %}

- cURL (Webhook)

    ```bash
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":12,"fields":{"name":"Юр. лицо"}}' \
    https://**put_your_bitrix24_address**/rest/**put_your_user_id_here**/**put_your_webhook_here**/sale.persontype.update
    ```

- cURL (OAuth)

    ```bash
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":12,"fields":{"name":"Юр. лицо"},"auth":"**put_access_token_here**"}' \
    https://**put_your_bitrix24_address**/rest/sale.persontype.update
```
