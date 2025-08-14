---
method: catalog.userfield.document.update
scope: catalog
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id","fields"],"properties":{"id":{"type":"integer"},"fields":{"type":"object"}}}
returns: {"type":"object"}
---


---

# Изменить значения пользовательских полей документов складского учета catalog.userfield.document.update



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указана обязательность параметров
- отсутствует ответ в случае ошибки 
- нет примеров на др. языках
- добавить ссылку на [`userfieldconfig.list`](.)
  




> Scope: [`catalog`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

```http
catalog.userfield.document.update(documentId, fields)
```

Метод обновляет значения пользовательских полей документов складского учёта.

## Параметры

#|
|| **Параметр** | **Описание**  ||
|| **documentId** 
[`integer`](../../data-types.md) | Идентификатор документа складского учёта. | ||
|| **fields** 
[`object`](../../data-types.md)| Поля, которые нужно обновить, и их новые значения. Обязательно должен быть указан `documentType` – [тип документов складского учёта](../enum/catalog-enum-get-store-document-types.md). | ||
|#



### Пример

В API используются названия полей в виде `field[ID поля в базе]` – например, `field287`. ID поля можно узнать с помощью метода [`userfieldconfig.list`](.).



- JS

    ```js
    BX24.callMethod(
        'catalog.userfield.document.update',
        {
            documentId: 64,
            fields: {
                'documentType': 'S',
                'field287': 'new value'
            }
        },
        function(result)
        {
            if(result.error())
                console.error(result.error().ex);
            else
                console.log(result.data());
        }
    );
    ```





