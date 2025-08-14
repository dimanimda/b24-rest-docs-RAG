---
method: crm.invoice.status.delete
scope: crm
deprecated: true
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id"],"properties":{"id":{"type":"integer"}}}
returns: {"type":"object"}
---


---

# Удалить статус счета crm.invoice.status.delete

> Scope: [`crm`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `crm.invoice.status.delete` удаляет статус счета.



С версии 19.0.0 рекомендуется использовать метод [crm.status.delete](../../../crm/status/crm-status-delete.md)



## Параметры метода



#|
|| **Название**
`тип` | **Описание** ||
|| **id***
[`integer`](../../data-types.md) | Идентификатор статуса счета ||
|#

