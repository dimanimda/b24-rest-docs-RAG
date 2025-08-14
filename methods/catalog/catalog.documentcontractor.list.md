---
method: catalog.documentcontractor.list
scope: catalog
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object","properties":{"filter":{"type":"object"},"order":{"type":"object"},"select":{"type":"array","items":{"type":"string"}},"start":{"type":["integer","string"]}}}
returns: {"type":"array","items":{"type":"object"}}
---


---

# Получить список привязок CRM-сущностей (Контакта/Компании) к документам catalog.documentcontractor.list



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указана обязательность параметров
- отсутствует ответ в случае ошибки
- нет примеров на др. языках
  




> Scope: [`catalog`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

```http
catalog.documentcontractor.list(select, filter, order, start)
```

Метод получает список привязок CRM-сущностей (Контакта/Компании) к документам по фильтру. 

Возвращает список привязок со структурой, описанной в параметре **select** (если не задан, то выводятся все поля, как в методе [getFields](catalog-documentcontractor-get-fields.md)).

## Параметры

#|
|| **Параметр** | **Описание** ||
|| **select**
[`object`](../../data-types.md) | Поля, соответствующие доступному списку полей [fields](catalog-documentcontractor-get-fields.md). ||
|| **filter**
[`object`](../../data-types.md) | Поля, соответствующие доступному списку полей [fields](catalog-documentcontractor-get-fields.md). ||
|| **order**
[`object`](../../data-types.md) | Поля, соответствующие доступному списку полей [fields](catalog-documentcontractor-get-fields.md). ||
|| **start**
[`string`](../../data-types.md) | Номер страницы вывода. Работает для https запросов. ||
|#



## Примеры



- JS
  
    ```js
    BX.callMethod(
        'catalog.documentcontractor.list',
        {
            select: ['id', 'documentId'],
            order: {'id': 'desc'},
            filter:
            {
                'documentId': 6,
                'entityTypeId': 3
            }
        },

        function(result)
        {
            console.log(result.data())
            result.next();
        }
    );
    ```
- Для HTTPS:

    ```http
    https://ваш_портал/rest/catalog.documentcontractor.list?auth=_ключ_авторизации_&start=50
    ```





