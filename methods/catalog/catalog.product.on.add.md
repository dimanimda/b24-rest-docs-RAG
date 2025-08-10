---
method: catalog.product.on.add
scope: catalog
deprecated: true
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["fields"],"properties":{"fields":{"type":"object"}}}
returns: {"type":"object"}
---

Auto-generated stub. Fill in params/returns/examples.

---

# Событие на добавление товара onCrmProductAdd



Событие `onCrmProductAdd` продолжает работать, но у него есть более актуальный аналог [CATALOG.PRODUCT.ON.ADD](../../../../catalog/product/events/catalog-product-on-add.md).



Событие вызывается при создании товара.

## Параметры



#|
|| **Название**
`тип` | **Описание** ||
|| **FIELDS** | Массив содержит поле ID со значением идентификатора созданного товара ||
|#
