---
method: catalog.pricetypegroup.list
scope: catalog
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object","properties":{"filter":{"type":"object"},"order":{"type":"object"},"select":{"type":"array","items":{"type":"string"}},"start":{"type":["integer","string"]}}}
returns: {"type":"array","items":{"type":"object"}}
---

Auto-generated stub. Fill in params/returns/examples.

---

# Привязка типов цен к группам покупателей



Тут может не хватать некоторых данных — дополним в ближайшее время



> Scope: [`catalog`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Методы работы с типами цен:

#|
|| **Метод** | **Описание** ||
|| [catalog.priceTypeGroup.add](./catalog-price-type-group-add.md) | Добавляет привязку типа цены к группе покупателей ||
|| [catalog.priceTypeGroup.list](./catalog-price-type-group-list.md) | Возвращает список привязок типов цены к группам покупателей ||
|| [catalog.priceTypeGroup.delete](./catalog-price-type-group-delete.md) | Удаляет привязку типа цены к группе покупателей ||
|| [catalog.priceTypeGroup.getFields](./catalog-price-type-group-get-fields.md) | Возвращает поля привязки типов цены к группам покупателей ||
|#
