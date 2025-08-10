---
method: crm.measure.list
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
> Кто может выполнять методы: любой пользователь

#|
|| **Метод** | **Описание** ||
|| [crm.measure.add](./crm-measure-add.md) | Добавляет новую единицу измерения ||
|| [crm.measure.update](./crm-measure-update.md) | Обновляет существующую единицу измерения ||
|| [crm.measure.get](./crm-measure-get.md) | Возвращает значения всех полей единицы измерения по ее идентификатору ||
|| [crm.measure.list](./crm-measure-list.md) | Возвращает список единиц измерения ||
|| [crm.measure.delete](./crm-measure-delete.md) | Удаляет единицу измерения ||
|| [crm.measure.fields](./crm-measure-fields.md) | Возвращает описание полей для единиц измерения ||
|#

