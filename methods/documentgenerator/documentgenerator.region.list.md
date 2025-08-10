---
method: documentgenerator.region.list
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

# Зачем нужны страны в генераторе документов



Тут может не хватать некоторых данных — дополним в ближайшее время







- нужна пояснительная статья





> Scope: [`documentgenerator`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

#|
|| **Метод** | **Описание** ||
|| [documentgenerator.region.get](./document-generator-region-get.md) | Возвращает информацию о регионе по его идентификатору. ||
|| [documentgenerator.region.list](./document-generator-region-list.md) | Возвращает список регионов, как установленных по умолчанию, так и пользовательских. ||
|| [documentgenerator.region.delete](./document-generator-region-delete.md) | Удаляет регион. ||
|| [documentgenerator.region.add](./document-generator-region-add.md) | Добавляет новый регион. ||
|| [documentgenerator.region.update](./document-generator-region-update.md) | Метод обновляет существующую страну. ||
|#

