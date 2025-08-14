---
method: crm.invoice.status.get
scope: crm
deprecated: true
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id"],"properties":{"id":{"type":"integer"}}}
returns: {"type":"object"}
---


---

# Получить статус счета по идентификатору crm.invoice.status.get

> Scope: [`crm`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `crm.invoice.status.get` возвращает статус счета по идентификатору.



С версии 19.0.0 рекомендуется использовать метод [crm.status.get](../../../crm/status/crm-status-get.md)



## Параметры метода



#|
|| **Название**
`тип` | **Описание** ||
|| **id*** 
[`integer`](../../../data-types.md) | Идентификатор статуса счета ||
|#

