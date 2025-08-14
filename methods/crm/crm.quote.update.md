---
method: crm.quote.update
scope: crm
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id","fields"],"properties":{"id":{"type":"integer"},"fields":{"type":"object"}}}
returns: {"type":"object"}
---


---

# Изменить коммерческое предложение crm.quote.update



Тут может не хватать некоторых данных — дополним в ближайшее время







- нужны правки под стандарт написания
- не указаны типы параметров
- не указана обязательность параметров
- отсутствуют примеры (должно быть три примера - curl, js, php)
- отсутствует ответ в случае ошибки
- отсутствует ответ в случае успеха





> Scope: [`crm`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `crm.quote.update` обновляет существующее предложение.


#|
||  **Параметр** / **Тип**| **Описание** ||
|| **id**
[`unknown`](../../data-types.md) | Идентификатор предложения. ||
|| **fields**
[`unknown`](../../data-types.md) | [Набор полей](./crm-quote-add.md) - массив вида `array("обновляемое поле"=>"значение"[, ...])`, где "обновляемое поле" может принимать значения из возвращаемых методом [crm.quote.fields](./crm-quote-fields.md). 


Чтобы узнать требуемый формат полей, выполните метод [crm.quote.fields](./crm-quote-fields.md) и посмотрите формат пришедших значений этих полей. 


||
|| **params**
[`unknown`](../../data-types.md) | Набор параметров. `REGISTER_HISTORY_EVENT` - создать запись в истории, значение по умолчанию: "Y". Дополнительно будет отправлено уведомление ответственному за предложение. ||
|#

## Пример



- JS

    ```js
    var id = prompt("Введите ID");
    BX24.callMethod(
        "crm.quote.update",
        {
            id: id,
            fields: { "STATUS_ID": "SENT" }    
        },
        function(result)
        {
            if(result.error())
                console.error(result.error());
            else
                console.info(result.data());
        }
    );
    ```




