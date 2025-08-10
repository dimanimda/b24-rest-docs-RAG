---
method: landing.demos.getpagelist
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

# Добавить страницу по шаблону landing.landing.addByTemplate



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указаны типы параметров
- не указана обязательность параметров
- отсутствуют примеры
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки





> Scope: [`landing`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `landing.landing.addByTemplate` добавляет страницу по шаблону (список шаблонов, который видит пользователь перед созданием страницы). Возвращает `ID` созданной страницы или ошибку.

Вы не можете влиять на поля создаваемой страницы, для этого вам поможет [landing.landing.add](./landing-landing-add.md).

## Параметры

#|
|| **Параметр** | **Описание** | **С версии** ||
|| **siteId**
[`unknown`](../../../data-types.md) | `ID` сайта, в котором требуется создать страницу. ||
|| **code**
[`unknown`](../../../data-types.md) | Идентификатор шаблона для создания. Список шаблонов вы можете получить методом [landing.demos.getPageList](../../demos/landing-demos-get-page-list.md). ||
|| **fields**
[`unknown`](../../../data-types.md) | Необязательный. Можно передать массив полей для создаваемой страницы. Пока поддерживается только ключ TITLE и DESCRIPTION. ||
|#

## Примеры



- JS

    ```js
    BX24.callMethod(
        'landing.landing.addByTemplate',
        {
            siteId: 870,
            code: 'agency',
            fields: {
                TITLE: 'Заголовок страницы',
                DESCRIPTION: 'Описание страницы'
            }
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




