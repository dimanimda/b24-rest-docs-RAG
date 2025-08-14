---
method: catalog.userfield.document.list
scope: catalog
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object","properties":{"filter":{"type":"object"},"order":{"type":"object"},"select":{"type":"array","items":{"type":"string"}},"start":{"type":["integer","string"]}}}
returns: {"type":"array","items":{"type":"object"}}
---


---

# Получить список значений пользовательских полей документов складского учета catalog.userfield.document.list



Тут может не хватать некоторых данных — дополним в ближайшее время







- добавить ссылку на `userfieldconfig.list`(.)
- не указана обязательность параметров
- отсутствует ответ в случае ошибки
- нет примеров на др. языках
  




> Scope: [`catalog`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

```http
catalog.userfield.document.list(select, filter, order, start)
```

Метод возвращает список значений пользовательских полей документов складского учёта.

## Параметры

#|
|| **Параметр** | **Описание** ||
|| **select**
[`array`](../../data-types.md)| Массив с полями, которые надо показать. Обязательно должен быть указан `documentType` – [тип документов складского учёта](../enum/catalog-enum-get-store-document-types.md). | ||
|| **order** 
[`object`](../../data-types.md)| Список для определения порядка отображения, где ключ – название поля, а значение – `ASC` или `DESC`. | ||
|| **filter** 
[`object`](../../data-types.md)| Список для фильтрации. Обязательно должен быть указан `documentType` – [тип документов складского учёта](../enum/catalog-enum-get-store-document-types.md). | ||
|| **start** 
[`string`](../../data-types.md)| Номер страницы вывода. Работает для https запросов. ||
|#



## Пример

В API используются названия полей в виде `field[ID поля в базе]` – например, `field288`. ID поля можно узнать с помощью метода [`userfieldconfig.list`](.).



- JS
  
    ```js
    BX24.callMethod(
    'catalog.userfield.document.list',
    {
        select: [
            'documentType',
            'documentId',
            'field287',
            'field288',
            'field289',
        ],
        filter:{
            'documentType' : 'S',
            '>=field287': 10,
        },
    },
    function(result)
    {
        if(result.error())
            console.error(result.error().ex);
        else
            console.log(result.data());
        result.next();
    }
    );
    ```

- Для HTTPS:

    ```
    https://ваш_портал/rest/catalog.userfield.document.list?auth=_ключ_авторизации_&start=50
    ```





