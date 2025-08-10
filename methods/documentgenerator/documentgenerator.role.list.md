---
method: documentgenerator.role.list
scope: documentgenerator
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object","properties":{"filter":{"type":"object"},"order":{"type":"object"},"select":{"type":"array","items":{"type":"string"}},"start":{"type":["integer","string"]}}}
returns: {"type":"array","items":{"type":"object"}}
---

Auto-generated stub. Fill in params/returns/examples.

---

# Как работают роли в генераторе документов



Тут может не хватать некоторых данных — дополним в ближайшее время







- написать статью, т.к. совершенно непонятно, как работают роли в генераторе документов





> Scope: [`documentgenerator`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

#|
|| **Метод** | **Описание** ||
|| [documentgenerator.role.get](./document-generator-role-get.md) | Отдает информацию о роли и её правах доступа. ||
|| [documentgenerator.role.list](./document-generator-role-list.md) | Метод вернет список ролей без их прав доступа. ||
|| [documentgenerator.role.delete](./document-generator-role-delete.md) | Удаляет роль. ||
|| [documentgenerator.role.add](./document-generator-role-add.md) | Метод добавит новую роль. ||
|| [documentgenerator.role.update](./document-generator-role-update.md) | Обновление роли ||
|| [documentgenerator.role.fillaccesses](./document-generator-role-fill-accesses.md) | Метод установит набор ролей и их привязок. ||
|#

