---
method: catalog.ratio.list
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

# Обзор методов

> Scope: [`catalog`](../../scopes/permissions.md)
>
> Кто может выполнять методы: администратор

#|
|| **Метод** | **Описание** ||
|| [catalog.ratio.get](./catalog-ratio-get.md) | Возвращает значения полей коэффициента единицы измерения по идентификатору ||
|| [catalog.ratio.list](./catalog-ratio-list.md) | Возвращает список коэффициентов единиц измерения ||
|| [catalog.ratio.getFields](./catalog-ratio-get-fields.md) | Возвращает доступные поля коэффициента единицы измерения ||
|#
