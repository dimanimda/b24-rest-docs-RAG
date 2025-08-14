---
method: crm.invoice.status.add
scope: crm
deprecated: true
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["fields"],"properties":{"fields":{"type":"object"}}}
returns: {"type":"object"}
---


---

# Создать новый статус счета crm.invoice.status.add

> Scope: [`crm`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `crm.invoice.status.add` создает новый статус счета.



С версии 19.0.0 рекомендуется использовать метод [crm.status.add](../../../crm/status/crm-status-add.md)



## Параметры метода



#|
|| **Название**
`тип` | **Описание** ||
|| **fields***
[`array`](../../data-types.md) | Набор полей — массив вида `array("поле"=>"значение"[, ...])`, содержащий значения полей статуса счета. 



Чтобы узнать требуемый формат полей, выполните метод [crm.invoice.status.fields](./crm-invoice-status-fields.md) и посмотрите формат пришедших значений этих полей 



||
|#

