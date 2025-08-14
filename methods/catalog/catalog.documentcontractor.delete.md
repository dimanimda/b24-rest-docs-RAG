---
method: catalog.documentcontractor.delete
scope: catalog
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id"],"properties":{"id":{"type":"integer"}}}
returns: {"type":"object"}
---


---

# Удалить привязку CRM-сущности (Контакта/Компании) к документу catalog.documentcontractor.delete


Тут может не хватать некоторых данных — дополним в ближайшее время







- не указана обязательность параметров
  




> Scope: [`catalog`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

## Описание

```http
catalog.documentcontractor.delete(id)
```

Метод для удаления привязки поставщика к документу.
Если операция успешна, возвращается `true` в теле ответа.

Случаи, когда могут вернуться ошибки:

- если нет доступа к складскому учету, нет доступа на просмотр документов прихода или нет доступа на редактирование документа прихода (добавление/удаление привязки – это редактирование документа);
- не найдена привязка с заданным id.

## Параметры

#|
|| **Параметр** | **Описание** ||
|| **id**
[`integer`](../../data-types.md) | Идентификатор привязки CRM-сущности (Контакта/Компании) к документу. ||
|#



## Примеры



- JS

    ```js
    BX.callMethod(
        'catalog.documentcontractor.delete',
        { id: 20 },
        function(result) {
            if (result.error())
                console.error(result.error().ex);
            else
                console.log(result.data());
        }
    );
    ```





