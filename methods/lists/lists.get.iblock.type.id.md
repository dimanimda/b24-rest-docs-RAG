---
method: lists.get.iblock.type.id
scope: lists
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---

Auto-generated stub. Fill in params/returns/examples.

---

# Получить идентификатор типа инфоблока lists.get.iblock.type.id



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указаны типы параметров
- отсутствуют примеры
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки





> Scope: [`lists`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `lists.get.iblock.type.id` возвращает `id` типа инфоблока. В случае успеха будет возвращена строка с `id` типа инфоблока, иначе `null`.

## Параметры

#|
|| **Параметр** | **Описание** | **С версии** ||
|| **IBLOCK_CODE/IBLOCK_ID**
[`unknown`](../../data-types.md) | код или `id` инфоблока | ||
|#

## Пример:



- JS

    ```js
    var params = {
        'IBLOCK_ID': '41'
    };
    BX24.callMethod(
        'lists.get.iblock.type.id',
        params,
        function(result)
        {
            if(result.error())
                alert("Error: " + result.error());
            else
                console.log(result.data());
        }
    );
    ```






