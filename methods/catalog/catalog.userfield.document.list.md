---
method: catalog.userfield.document.list
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

# Пользовательские поля документов складского учёта



Тут может не хватать некоторых данных — дополним в ближайшее время







- добавить ссылку на [`userfieldconfig.*`](.)
  




> Scope: [`catalog`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Для создания пользовательских полей документов складского учёта используются стандартные методы класса [`userfieldconfig.*`](.).

Получить список значений пользовательских полей документов складского учёта и обновить информацию в них можно с помощью следующих методов:

#|
|| **Метод** | **Описание** ||
|| [catalog.userfield.document.list](./catalog-userfield-document-list.md) | Возвращает список значений пользовательских полей документов складского учёта. ||
|| [catalog.userfield.document.update](./catalog-userfield-document-update.md) | Обновляет значения пользовательских полей документов складского учёта. ||
|#

