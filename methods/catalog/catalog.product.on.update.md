---
method: catalog.product.on.update
scope: catalog
deprecated: true
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id","fields"],"properties":{"id":{"type":"integer"},"fields":{"type":"object"}}}
returns: {"type":"object"}
---

Auto-generated stub. Fill in params/returns/examples.

---

# Событие на обновление товара onCrmProductUpdate



Событие `onCrmProductUpdate` продолжает работать, но у него есть более актуальный аналог [CATALOG.PRODUCT.ON.UPDATE](../../../../catalog/product/events/catalog-product-on-update.md).



Событие вызывается при обновлении товара.

## Параметры



#|
|| **Название**
`тип` | **Описание** ||
|| **FIELDS** | Массив содержит поле ID со значением идентификатора обновлённого товара ||
|#
