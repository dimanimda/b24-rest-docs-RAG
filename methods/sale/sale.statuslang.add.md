---
method: sale.statuslang.add
scope: sale
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
|| **statusId***
[`sale_status.id`](../data-types.md) | Символьный идентификатор статуса ||
|| **lid***
[` sale_lang.lid`](../data-types.md) | Идентификатор языка. Текущие возможные значения приведены ниже:

- ar — арабский
- br — португальский
- de — немецкий
- en — английский
- fr — французский
- hi — хинди
- id — индонезийский
- in — английский (Индия)
- it — итальянский
- ja — японский
- la — испанский
- ms — малайский
- pl — польский
- ru — русский
- sc — китайский (упрощенный)
- tc — китайский (традиционный)
- th — тайский
- tr — турецкий
- ua — украинский
- vn — вьетнамский

Список актуальных языков можно получить методом [sale.statuslang.getlistlangs](./sale-status-lang-get-list-langs.md)
||
|| **name***
[`string`](../../data-types.md) | Название статуса для создаваемой локализации ||
|| **description**
[`string`](../../data-types.md) | Описание статуса для создаваемой локализации ||
|#

## Примеры кода

{% include [Сноска о примерах](../../../_includes/examples.md) %}

{% list tabs %}

- cURL (Webhook)

    ```bash
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"fields":{"statusId":"RD","lid":"ru","name":"Возвращен покупателем","description":"Покупатель вернул товар по причине наличия дефекта"}}' \
    https://**put_your_bitrix24_address**/rest/**put_your_user_id_here**/**put_your_webhook_here**/sale.statuslang.add
    ```

- cURL (OAuth)

    ```bash
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"fields":{"statusId":"RD","lid":"ru","name":"Возвращен покупателем","description":"Покупатель вернул товар по причине наличия дефекта"},"auth":"**put_access_token_here**"}' \
    https://**put_your_bitrix24_address**/rest/sale.statuslang.add
```
