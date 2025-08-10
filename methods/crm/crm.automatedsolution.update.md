---
method: crm.automatedsolution.update
scope: crm
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

#|
|| **Название**
`тип` | **Описание** ||
|| **title**
[`string`](../../data-types.md) | Название цифрового рабочего места.

Будьте внимательны с изменением поля `title`. Так как ссылка на цифровое рабочее место строится на основании названия, при его изменении изменится и ссылка на цифровое рабочее место ||
|| **typeIds**
[`crm_dynamic_type.id[]`](../data-types.md) | Массив идентификаторов смарт-процессов, которые нужно привязать к этому рабочему месту.

Чтобы изменить список привязанных смарт-процессов, нужно передать поле `typeIds` с желаемым набором смарт-процессов.

{% note warning %}

Настройки переписываются полностью. При изменении списка привязанных смарт-процессов, надо передавать набор `typeIds` целиком, либо опустить ключ `typeIds` вообще 

{% endnote %}

 ||
|#

## Примеры кода

{% include [Сноска о примерах](../../../_includes/examples.md) %}

1. Изменить название цифрового рабочего места

    {% list tabs %}

    - cURL (Webhook)

        ```bash
        curl -X POST \
        -H "Content-Type: application/json" \
        -H "Accept: application/json" \
        -d '{"id":238,"fields":{"title":"HR & Customer Success"}}' \
        https://**put_your_bitrix24_address**/rest/**put_your_user_id_here**/**put_your_webhook_here**/crm.automatedsolution.update
        ```

    - cURL (OAuth)

        ```bash
        curl -X POST \
        -H "Content-Type: application/json" \
        -H "Accept: application/json" \
        -d '{"id":238,"fields":{"title":"HR & Customer Success"},"auth":"**put_access_token_here**"}' \
        https://**put_your_bitrix24_address**/rest/crm.automatedsolution.update
```
