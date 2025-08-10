---
method: lists.section.get
scope: lists
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id"],"properties":{"id":{"type":"integer"}}}
returns: {"type":"object"}
---

Auto-generated stub. Fill in params/returns/examples.

---

# Получить параметры раздела или список разделов универсального списка lists.section.get



Тут может не хватать некоторых данных — дополним в ближайшее время







- нужны правки под стандарт написания
- не указаны типы параметров
- отсутствуют примеры
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки





> Scope: [`lists`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `lists.section.get` возвращает список разделов или раздел. В случае успеха возвращает данные по разделу(лам), иначе пустой массив.

#|
|| **Параметр** | **Описание** ||
|| **IBLOCK_TYPE_ID**^*^
[`unknown`](../../data-types.md) | Идентификатор типа инфоблока (обязательный). Возможные значения: 
- lists - тип инфоблока списка 
- bitrix_processes - тип инфоблока процессов 
- lists_socnet - тип инфоблока списков групп | ||
|| **IBLOCK_CODE/IBLOCK_ID**^*^
[`unknown`](../../data-types.md) | Код или идентификатор инфоблока (обязательный). | ||
|| **FILTER**
[`unknown`](../../data-types.md) | Массив полей и значений для фильтрации. Для фильтрации доступны поля из фильтра `CIBlockSection::GetList` | ||
|| **SELECT**
[`unknown`](../../data-types.md) | Массив с полями для выборки. Доступные поля описаны в документации `CIBlockSection::GetList` | ||
|| **SOCNET_GROUP_ID**^*^
[`unknown`](../../data-types.md) | Идентификатор группы (обязательно, если список создается для группы) | ||
|#



(**) - кроме пользовательских (UF_) полей.

## Пример



- JS

    ```js
    /* lists.section.get */
    var params = {
        'IBLOCK_TYPE_ID': 'lists',
        'IBLOCK_CODE': 'rest_1',
        'FILTER': {
            'NAME': 'section_%'
        },
        'SELECT': ['ID', 'NAME']
    };
    BX24.callMethod(
        'lists.section.get',
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




