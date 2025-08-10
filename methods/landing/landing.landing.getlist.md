---
method: landing.landing.getlist
scope: landing
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object","properties":{"filter":{"type":"object"},"order":{"type":"object"},"select":{"type":"array","items":{"type":"string"}},"start":{"type":["integer","string"]}}}
returns: {"type":"array","items":{"type":"object"}}
---

Auto-generated stub. Fill in params/returns/examples.

---

# Работа с типами сайтов и скоупами



Тут может не хватать некоторых данных — дополним в ближайшее время







- нужны правки под стандарт написания





## Типы сайтов

Сайты могут быть следующих типов.

- Основные:
  - PAGE (от Home Page) - обычные сайты.
  - STORE - магазины.
  - SMN - сайты, использующиеся в разделе Сайты24 в административном разделе в БУС.

- Дополнительные:
  - KNOWLEDGE – базы знаний.
  - GROUP – базы знаний групп соц.сети.

На данный момент не поддерживается расширение типов.

## Скоупы

Помимо разделительной функции на уровне компонентов существует также разграничение по правам, получившее название скоупов.

Если вы работаете с **основными типами**, ничего делать не нужно.
Если с **дополнительными**, перед работой нужно установить скоуп. В случае rest сделать это можно, передав дополнительным параметром **scope**.

## Пример

В примере дан метод получения списка страниц, но правило распространяется на любой другой метод, в том числе на работу с правами и изменениями сущностей.



- JS

    ```js
    BX24.callMethod(
        'landing.landing.getList',
        {
            params: {
                select: [
                    'ID', 'TITLE'
                ],
                filter: {
                    TITLE: '%услуги%',
                    SITE_ID: 205
                },
                order: {
                    ID: 'DESC'
                }
            },
            scope: 'knowledge'
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




