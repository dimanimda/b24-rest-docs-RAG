---
method: crm.deal.contact.delete
scope: crm
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id"],"properties":{"id":{"type":"integer"}}}
returns: {"type":"object"}
---


---

# Удалить контакт из указанной сделки crm.deal.contact.delete



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указаны типы параметров
- отсутствуют примеры
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки





> Scope: [`crm`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `crm.deal.contact.delete` удаляет контакт из указанной сделки.

#|
|| **Параметр** | **Описание** ||
|| **id**^*^ | Идентификатор сделки. ||
|| **fields** | Объект со следующими [полями](./crm-deal-contact-fields.md): 
- **CONTACT_ID** - идентификатор контакта (обязательное поле) ||
|#


