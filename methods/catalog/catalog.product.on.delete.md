---
method: catalog.product.on.delete
scope: catalog
deprecated: true
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id"],"properties":{"id":{"type":"integer"}}}
returns: {"type":"object"}
---

Auto-generated stub. Fill in params/returns/examples.

---

# Событие на удаление товара onCrmProductDelete



Событие `onCrmProductDelete` продолжает работать, но у него есть более актуальный аналог [CATALOG.PRODUCT.ON.DELETE](../../../../catalog/product/events/catalog-product-on-delete.md).



Событие вызывается при удалении товара.

## Параметры



#|
|| **Название**
`тип` | **Описание** ||
|| **FIELDS** | Массив содержит поле ID со значением идентификатора удалённого товара ||
|#
