---
method: landing.repo.bind
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

# Меню настроек LANDING_SETTINGS



Тут может не хватать некоторых данных — дополним в ближайшее время







- нужны правки под стандарт написания
- не указаны типы параметров
- не указана обязательность параметров





Место встраивания **LANDING_SETTINGS** позволяет добавить новый пункт в меню настроек (Страницы / Сайта) в режиме редактирования страницы.

## Параметры

Для данного места встраивания доступны параметры:

#|
|| **Параметр** | **Описание** | **С версии** ||
|| **SITE_ID**
[`unknown`](../../data-types.md) | идентификатор сайта. | ||
|| **LID**
[`unknown`](../../data-types.md) | идентификатор страницы. | ||
|#

Получить параметры можно из PLACEMENT_OPTIONS:

```php
$placement = isset($_REQUEST['PLACEMENT_OPTIONS'])
    ? json_decode($_REQUEST['PLACEMENT_OPTIONS'], true)
    : [];
```

## Примеры



- JS

    ```js
    BX24.callMethod(
        'landing.repo.bind',
        {
            fields: {
                PLACEMENT: 'LANDING_SETTINGS',
                PLACEMENT_HANDLER: 'https://cpe/rest/settings.php',
                TITLE: 'My settings'
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




