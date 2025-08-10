---
method: telephony.externalline.update
scope: telephony
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id","fields"],"properties":{"id":{"type":"integer"},"fields":{"type":"object"}}}
returns: {"type":"object"}
---

Auto-generated stub. Fill in params/returns/examples.

---

# Изменить название внешней линии telephony.externalLine.update



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указана обязательность параметров
- отсутствуют примеры
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки







Метод `telephony.externalLine.update` позволяет изменить название внешней линии.

#|
|| **Параметр** / **Тип** | **Описание** ||
|| **NUMBER** 
[`string`](../data-types.md) | Номер внешней линии. ||
|| **NAME** 
[`string`](../data-types.md) | Название внешней линии. ||
|| **CRM_AUTO_CREATE** 
[`boolean`](../data-types.md) | Данный параметр отвечает за создание CRM-сущностей (сделка или лид, в зависимости от режима работы CRM) при исходящих звонках из интерфейса Битрикса (например, номеронабиратель в панели чата). Принимает значение Y\|N. По умолчанию Y. ||
|#
