---
method: telephony.externalcall.show
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

# Показать карточку звонка пользователю telephony.externalcall.show



Тут может не хватать некоторых данных — дополним в ближайшее время







- отсутствуют примеры
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки







Метод `telephony.externalcall.show` показывает карточку звонка пользователю.

#|
|| **Параметр** / **Тип** | **Описание** ||
|| **CALL_ID**^*^ 
[`string`](../data-types.md) | Идентификатор звонка из метода [telephony.externalcall.register](telephony-external-call-register.md). ||
|| **USER_ID** 
[`int`](../data-types.md) | Идентификатор, либо массив идентификаторов пользователей в стандартном для PHP формате: `USER_ID[0]=11&USER_ID[1]=24&USER_ID[2]=31`. ||
|#


