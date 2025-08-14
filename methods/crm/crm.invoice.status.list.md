---
method: crm.invoice.status.list
scope: crm
deprecated: true
aliases: []
rate_limit_per_sec: 2
pagination: start
params: {"type":"object","properties":{"filter":{"type":"object"},"order":{"type":"object"},"select":{"type":"array","items":{"type":"string"}},"start":{"type":["integer","string"]}}}
returns: {"type":"array","items":{"type":"object"}}
---


---

# Получить список статусов счета crm.invoice.status.list

> Scope: [`crm`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь



С версии 19.0.0 рекомендуется использовать метод [crm.status.list](../../../crm/status/crm-status-list.md)



Метод `crm.invoice.status.list` возвращает список статусов счета по фильтру. Является реализацией списочных методов для статусов счета.

## Параметры метода

Cм. описание [списочных методов](../../../how-to-call-rest-api/list-methods-pecularities.md)
