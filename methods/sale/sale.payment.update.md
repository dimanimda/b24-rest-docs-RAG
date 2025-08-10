---
method: sale.payment.update
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

## Параметр fields

{% include [Сноска об обязательных параметрах](../../../_includes/required.md) %}

#|
|| **Название**
`тип` | **Описание** ||
|| **paySystemId***
[`sale_paysystem.id`](../data-types.md) | Идентификатор платежной системы ||
|| **paid**
[`string`](../../data-types.md) | Оплата оплачена:

- `Y` — да
- `N` — нет

По умолчанию устанавливается `N` ||
|| **datePaid**
[`datetime`](../../data-types.md) | Дата оплаты ||
|| **empPaidId**
[`user.id`](../../data-types.md) | Идентификатор пользователя, который оплатил оплату ||
|| **psStatus**
[`string`](../../data-types.md) | Флаг статуса платежной системы — успешно ли оплачена оплата. Варианты:

- `Y` — да
- `N` — нет

По умолчанию устанавливается `null` ||
|| **psStatusCode**
[`string`](../../data-types.md) | Код статуса платёжной системы ||
|| **psStatusDescription**
[`string`](../../data-types.md) | Описание результата работы платежной системы ||
|| **psStatusMessage**
[`string`](../../data-types.md) | Сообщение от платежной системы ||
|| **psSum**
[`double`](../../data-types.md) | Сумма платежной системы ||
|| **psCurrency**
[`string`](../../data-types.md) | Валюта платежной системы ||
|| **psResponseDate**
[`datetime`](../../data-types.md) | Дата ответа платежной системы ||
|| **payVoucherNum**
[`string`](../../data-types.md) | Номер платежного документа ||
|| **payVoucherDate**
[`datetime`](../../data-types.md) | Дата платежного документа ||
|| **datePayBefore**
[`datetime`](../../data-types.md) | Устаревший.

Дата, по которой необходимо оплатить счет ||
|| **dateBill**
[`datetime`](../../data-types.md) | Дата выставления счета ||
|| **xmlId**
[`string`](../../data-types.md) | Внешний идентификатор ||
|| **sum**
[`double`](../../data-types.md) | Сумма оплаты ||
|| **companyId**
[`integer`](../../data-types.md) | Идентификатор компании, которая будет принимать оплату

В настоящий момент не используется ||
|| **payReturnNum**
[`string`](../../data-types.md) | Номер документа возврата ||
|| **priceCod**
[`double`](../../data-types.md) | Актуально только для коробочной версии
Стоимость оплаты при доставке. Используется для наложенного платежа ||
|| **payReturnDate**
[`date`](../../data-types.md) | Дата документа возврата ||
|| **empReturnId**
[`user.id`](../../data-types.md) | Идентификатор пользователя, который выполнял возврат ||
|| **payReturnComment**
[`string`](../../data-types.md) | Комментарий к возврату ||
|| **responsibleId**
[`user.id`](../../data-types.md) | Идентификатор пользователя, ответственного за оплату ||
|| **empResponsibleId**
[`user.id`](../../data-types.md) | Идентификатор пользователя, назначившего ответственного ||
|| **isReturn**
[`string`](../../data-types.md) | Выполнялся ли возврат:

- `Y` — да
- `N` — нет

По умолчанию устанавливается N ||
|| **comments**
[`string`](../../data-types.md) | Комментарии к оплате ||
|| **updated1c**
[`string`](../../data-types.md) | Оплата обновлена через 1С:

- `Y` — да
- `N` — нет

По умолчанию устанавливается N ||
|| **id1c**
[`string`](../../data-types.md) | Идентификатор в 1С ||
|| **version1c**
[`string`](../../data-types.md) | Версия документа оплаты от 1С ||
|| **externalPayment**
[`string`](../../data-types.md) | Актуально только для коробочной версии
Внешняя оплата или нет. Используется для импорта из 1С через XML

- `Y` — да
- `F` — да, загружена вместе с заказом
- `N` — нет

По умолчанию устанавливается `N` ||
|| **psInvoiceId**
[`string`](../../data-types.md) | Идентификатор оплаты в платежной системе ||
|| **marked**
[`string`](../../data-types.md) | Флаг маркировки. Признак того, является ли оплата отмеченной как проблемная:

- `Y` — да
- `N` — нет

По умолчанию устанавливается `N` ||
|| **reasonMarked**
[`string`](../../data-types.md) | Причина маркировки ||
|| **empMarkedId**
[`user.id`](../../data-types.md) | Идентификатор пользователя, промаркировавшего оплату ||
|#

## Примеры кода

{% include [Сноска о примерах](../../../_includes/examples.md) %}

{% list tabs %}

- cURL (Webhook)

    ```bash
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":144,"fields":{"paySystemId":1,"paid":"Y","datePaid":"2024-04-10T10:00:00","empPaidId":1,"psStatus":"Y","psSum":100,"psCurrency":"RUB","psResponseDate":"2024-04-10T10:00:00","sum":100,"companyId":1,"responsibleId":1,"empResponsibleId":1,"isReturn":"N","externalPayment":"N","psInvoiceId":1,"marked":"N"}}' \
    https://**put_your_bitrix24_address**/rest/**put_your_user_id_here**/**put_your_webbhook_here**/sale.payment.update
    ```

- cURL (OAuth)

    ```bash
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":144,"fields":{"paySystemId":1,"paid":"Y","datePaid":"2024-04-10T10:00:00","empPaidId":1,"psStatus":"Y","psSum":100,"psCurrency":"RUB","psResponseDate":"2024-04-10T10:00:00","sum":100,"companyId":1,"responsibleId":1,"empResponsibleId":1,"isReturn":"N","externalPayment":"N","psInvoiceId":1,"marked":"N"},"auth":"**put_access_token_here**"}' \
    https://**put_your_bitrix24_address**/rest/sale.payment.update
```
