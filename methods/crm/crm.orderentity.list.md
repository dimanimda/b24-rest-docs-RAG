---
method: crm.orderentity.list
scope: crm
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: start
params: {"type":"object","properties":{"filter":{"type":"object"},"order":{"type":"object"},"select":{"type":"array","items":{"type":"string"}},"start":{"type":["integer","string"]}}}
returns: {"type":"array","items":{"type":"object"}}
---

Auto-generated stub. Fill in params/returns/examples.

---

# Привязка заказа к другим объектам CRM

> Scope: [`crm`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: в зависимости от метода

#|
|| **Метод** | **Описание** ||
|| [crm.orderentity.add](./crm-order-entity-add.md) | Добавляет привязку заказа к объекту CRM ||
|| [crm.orderentity.list](./crm-order-entity-list.md) | Возвращает список привязок заказов к объектам CRM ||
|| [crm.orderentity.deleteByFilter](./crm-order-entity-delete-by-filter.md) | Удаляет привязку заказа к объекту CRM ||
|| [crm.orderentity.getFields](./crm-order-entity-get-fields.md) | Возвращает список доступных полей привязки заказа ||
|#
