---
method: telephony.externalcall.hide
scope: telephony
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---

Auto-generated stub. Fill in params/returns/examples.

---

# Скрыть карточку звонка у пользователя telephony.externalcall.hide



Тут может не хватать некоторых данных — дополним в ближайшее время







- отсутствуют примеры
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки







Метод `telephony.externalcall.hide` скрывает карточку звонка у пользователя.

#|
|| **Параметр** / **Тип** | **Описание** ||
|| **CALL_ID**^*^ 
[`string`](../data-types.md) | Идентификатор звонка из метода [telephony.externalcall.register](telephony-external-call-register.md). ||
|| **USER_ID**^*^ 
[`int`](../data-types.md) | Идентификатор, либо массив идентификаторов пользователей, у которых надо скрыть звонок, если карточка показывается не у одного пользователя. ||
|#


