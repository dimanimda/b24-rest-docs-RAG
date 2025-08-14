---
method: crm.automatedsolution.add
scope: crm
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["fields"],"properties":{"fields":{"type":"object"}}}
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
|| **title***
[`string`](../../data-types.md) | Название цифрового рабочего места. На основании заголовка цифрового рабочего места будет строиться ссылка на соответствующий раздел на портале ||
|| **typeIds**
[`crm_dynamic_type.id[]`](../data-types.md) | Массив идентификаторов смарт-процессов, которые нужно привязать к этому рабочему месту.

Если смарт-процесс до этого был привязан к другому рабочему месту или к CRM, то после привязки к новому рабочему месту, он оттуда пропадет.

Цифровое рабочее место без смарт-процессов не будет выводиться в левое меню. Но его можно будет найти в списке цифровых рабочих мест ||
|#

## Примеры кода

{% include [Сноска о примерах](../../../_includes/examples.md) %}

1. Создать цифровое рабочее место и сразу привязать к нему смарт-процессы

    {% list tabs %}

    - cURL (Webhook)

        ```bash
        curl -X POST \
        -H "Content-Type: application/json" \
        -H "Accept: application/json" \
        -d '{"fields":{"title":"HR","typeIds":[1,2,3]}}' \
        https://**put_your_bitrix24_address**/rest/**put_your_user_id_here**/**put_your_webhook_here**/crm.automatedsolution.add
        ```

    - cURL (OAuth)

        ```bash
        curl -X POST \
        -H "Content-Type: application/json" \
        -H "Accept: application/json" \
        -d '{"fields":{"title":"HR","typeIds":[1,2,3]},"auth":"**put_access_token_here**"}' \
        https://**put_your_bitrix24_address**/rest/crm.automatedsolution.add
```
