---
method: lists.section.delete
scope: lists
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id"],"properties":{"id":{"type":"integer"}}}
returns: {"type":"object"}
---


---

# Удалить раздел универсального списка lists.section.delete



Тут может не хватать некоторых данных — дополним в ближайшее время







- нужны правки под стандарт написания
- не указаны типы параметров
- отсутствуют примеры
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки





> Scope: [`lists`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `lists.section.delete` удаляет раздел списка. В случае успешного создания раздела ответ `true`, иначе *Exception*.

## Параметры

#|
|| **Параметр** | **Описание** ||
|| **IBLOCK_TYPE_ID**^*^
[`unknown`](../../data-types.md) | Идентификатор типа инфоблока (обязательный). Возможные значения: 
- lists - тип инфоблока списка 
- bitrix_processes - тип инфоблока процессов 
- lists_socnet - тип инфоблока списков групп | ||
|| **IBLOCK_CODE/IBLOCK_ID**^*^
[`unknown`](../../data-types.md) | Код или идентификатор инфоблока (обязательный). | ||
|| **SECTION_CODE/SECTION_ID**^*^
[`unknown`](../../data-types.md) | Код или идентификатор раздела (обязательный). | ||
|| **SOCNET_GROUP_ID**^*^
[`unknown`](../../data-types.md) | `id` группы (обязательно, если список создается для группы); | ||
|#



## Пример



- JS

    ```js
    /* lists.section.delete */
    var params = {
        'IBLOCK_TYPE_ID': 'lists',
        'IBLOCK_CODE': 'rest_1',
        'SECTION_CODE': 'Section_code_1'
    };
    BX24.callMethod(
        'lists.section.delete',
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




