---
method: landing.template.setlandingref
scope: landing
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---

Auto-generated stub. Fill in params/returns/examples.

---

# Установить включаемые области для страницы landing.template.setLandingRef



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указаны типы параметров
- не указана обязательность параметров
- отсутствуют примеры
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки





> Scope: [`landing`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `landing.template.setLandingRef` устанавливает включаемые области для страницы в рамках конкретного шаблона (страница должна быть уже привязана к шаблону через поле TPL_ID). Вернет *true* в случае успеха, или ошибку.

## Параметры

#|
|| **Параметр** | **Описание** ||
|| **id**
[`unknown`](../../data-types.md) | Идентификатор страницы. ||
|| **data**
[`unknown`](../../data-types.md) | Массив данных для установки (если массив пустой или не передан, установленные области сбросятся). Ключами массива являются идентификаторы областей, а значениями идентификаторы страниц, которые необходимо установить как область. ||
|#

## Примеры



- JS

    ```js
    BX24.callMethod(
        'landing.template.setLandingRef',
        {
            id: 557,
            data: {
                1: 614,
                2: 615,
                3: 616
            }
        },
        function(result)
        {
            if(result.error())
            {
                console.error(result.error());
            }
            else
            {
                console.info(result.data());
            }
        }
    );
    ```




