---
method: crm.requisite.link.fields
scope: crm
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object"}
returns: {"type":"object"}
---

Auto-generated stub. Fill in params/returns/examples.

---

# Связи реквизитов с объектами CRM

> Scope: [`crm`](../../../scopes/permissions.md)
>
> Кто может выполнять методы: любой пользователь

Связи сохраняют соответствие объекта CRM и реквизитов, которые используются в контексте этого объекта. 

Например, есть счет на оплату. Для его печати требуются реквизиты компании-продавца (моей компании) и компании-покупателя (клиента). Так как у компании может быть несколько реквизитов, то не понятно, какие из них использовать для печати счета. Для указания нужных реквизитов и нужна связь. 

Поля **REQUISITE_ID** и **BANK_DETAIL_ID** хранят идентификаторы реквизита и банковского реквизита соответственно, которые используются для компании-покупателя. Поля **MC_REQUISITE_ID** и **MC_BANK_DETAIL_ID** хранят аналогичные идентификаторы для компании-продавца. 

Если какой-то идентификатор имеет значение `0`, то он считается невыбранным. Могут быть не выбраны реквизиты компании-продавца или банковские реквизиты.

## Поля связи реквизита с объектом CRM

#|
|| **Название** 
`тип` | **Описание** | **Чтение** | **Запись** | **Обязательное** | **Неизменяемое** ||
|| **ENTITY_TYPE_ID**
[`integer`](../../../data-types.md) | Идентификатор типа объекта, к которому относится связь.

Могут использоваться следующие типы:
- сделка (значение `2`)
- старый счет (значение `5`)
- предложение (значение `7`)
- новый счет (значение `31`)
- другие динамические объекты (для получения возможных значений смотрите метод [crm.type.list](../../universal/user-defined-object-types/crm-type-list.md)).

Идентификаторы типов объектов CRM можно получить с помощью метода [crm.enum.ownertype](../../auxiliary/enum/crm-enum-owner-type.md) | Да | Да | Да | Да ||
|| **ENTITY_ID**
[`integer`](../../../data-types.md) | Идентификатор объекта, к которому относится связь. 

Идентификаторы объектов можно получить с помощью следующих методов: [crm.deal.list](../../deals/crm-deal-list.md), [crm.quote.list](../../quote/crm-quote-list.md), [crm.item.list](../../universal/crm-item-list.md). | Да | Да | Да | Да ||
|| **REQUISITE_ID**
[`integer`](../../../data-types.md) | Идентификатор реквизита клиента, выбранного для объекта. 

Идентификаторы реквизитов можно получить с помощью метода [crm.requisite.list](../universal/crm-requisite-list.md) | Да | Да | Да | Нет ||
|| **BANK_DETAIL_ID**
[`integer`](../../../data-types.md) | Идентификатор банковского реквизита клиента, выбранного для объекта. 

Идентификаторы банковских реквизитов можно получить с помощью метода [crm.requisite.bankdetail.list](../bank-detail/crm-requisite-bank-detail-list.md) | Да | Да | Да | Нет ||
|| **MC_REQUISITE_ID**
[`integer`](../../../data-types.md) | Идентификатор реквизита моей компании, выбранного для объекта. 

Идентификаторы реквизитов можно получить с помощью метода [crm.requisite.list](../universal/crm-requisite-list.md) | Да | Да | Да | Нет ||
|| **MC_BANK_DETAIL_ID**
[`integer`](../../../data-types.md) | Идентификатор банковского реквизита моей компании, выбранного для объекта. 

Идентификаторы банковских реквизитов можно получить с помощью метода [crm.requisite.bankdetail.list](../bank-detail/crm-requisite-bank-detail-list.md) | Да | Да | Да | Нет ||
|#

## Обзор методов

#|
|| **Метод** | **Описание** ||
|| [crm.requisite.link.register](./crm-requisite-link-register.md) | Регистрирует связь реквизитов с объектом ||
|| [crm.requisite.link.get](./crm-requisite-link-get.md) | Возвращает связь реквизитов с объектом ||
|| [crm.requisite.link.list](./crm-requisite-link-list.md) | Возвращает список связей реквизитов по фильтру ||
|| [crm.requisite.link.unregister](./crm-requisite-link-unregister.md) | Удаляет связь реквизитов с объектом ||
|| [crm.requisite.link.fields](./crm-requisite-link-fields.md) | Возвращает формальное описание полей связи реквизитов ||
|#

