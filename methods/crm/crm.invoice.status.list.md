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

Auto-generated stub. Fill in params/returns/examples.

---

# Обзор методов

> Scope: [`crm`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь



С версии 19.0.0 рекомендуется использовать [общие методы работы со справочниками](../../status/index.md)



#|
|| **Метод** | **Описание** ||
|| [crm.invoice.status.add](./crm-invoice-status-add.md) | Создает новый статус счета ||
|| [crm.invoice.status.delete](./crm-invoice-status-delete.md) | Удаляет статус счета ||
|| [crm.invoice.status.get](./crm-invoice-status-get.md) | Получает статус счета по идентификатору ||
|| [crm.invoice.status.fields](./crm-invoice-status-fields.md) | Получает поля статуса счета ||
|| [crm.invoice.status.list](./crm-invoice-status-list.md) | Получает список статусов счета ||
|| [crm.invoice.status.update](./crm-invoice-status-update.md) | Изменяет статус счета ||
|#
