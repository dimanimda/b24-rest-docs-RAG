---
method: crm.deal.contact.add
scope: crm
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["fields"],"properties":{"fields":{"type":"object"}}}
returns: {"type":"object"}
---


---

# Добавить контакт к сделке crm.deal.contact.add



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указаны типы параметров
- не указана обязательность параметров
- отсутствуют примеры
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки





> Scope: [`crm`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `crm.deal.contact.add` добавляет контакт к указанной сделке.

#|
|| **Параметр** | **Описание** ||
|| **id** | Идентификатор сделки. ||
|| **fields** | Объект со следующими [полями](./crm-deal-contact-fields.md): 
- **CONTACT_ID** - идентификатор контакта (обязательное поле) 
- **SORT** - индекс сортировки 
- **IS_PRIMARY** - флаг первичного контакта 



Чтобы узнать требуемый формат полей, выполните метод [crm.deal.contact.fields](./crm-deal-contact-fields.md) и посмотрите формат пришедших значений этих полей. 


||
|#
