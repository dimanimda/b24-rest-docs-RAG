---
method: catalog.extra.list
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
|| [catalog.extra.get](catalog-extra-get.md) | Возвращает информацию о наценке по ее идентификатору ||
|| [catalog.extra.list](catalog-extra-list.md) | Возвращает список наценок по фильтру ||
|| [catalog.extra.getFields](catalog-extra-get-fields.md) | Возвращает поля наценки ||
|#
