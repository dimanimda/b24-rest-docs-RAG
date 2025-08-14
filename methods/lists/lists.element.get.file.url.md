---
method: lists.element.get.file.url
scope: lists
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---


---

# Получить путь к файлу lists.element.get.file.url



Тут может не хватать некоторых данных — дополним в ближайшее время







- нужны правки под стандарт написания
- не указаны типы параметров
- отсутствуют примеры
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки





> Scope: [`lists`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь


Метод `lists.element.get.file.url` возвращает путь к файлу. В случае успеха будет возвращен массив со списком url для нужного поля типа Файл или Файл (Диск).

## Параметры

#|
|| **Метод** | **Описание** | **С версии** ||
|| **params**^*^
[`unknown`](../../data-types.md) | Все поля обязательные
- IBLOCK_TYPE_ID - `id` типа инфоблока:
    - lists - тип инфоблока списка;
    - bitrix_processes - тип инфоблока процессов;
    - lists_socnet - тип инфоблока списков групп. В этом случае обязательно передавать параметр SOCNET_GROUP_ID - `id` группы.
- IBLOCK_ID - `id` инфоблока
- ELEMENT_ID - `id` элемента
- FIELD_ID - `id` поля (свойства инфоблока) Файл или Файл (Диск), без префикса `"PROPERTY_"`
- SEF_FOLDER: '/my_section/lists/' - путь до папки, с которой работает компонент. Параметр не обязательный. По умолчанию будет выбираться значение в зависимости от одного из системных типов инфоблока. | ||
|| **SOCNET_GROUP_ID**^*^
[`unknown`](../../data-types.md) | `id` группы (обязательно, если список создается для группы); | ||
|#



## Пример



- JS

    ```js
    var params = {
        'IBLOCK_TYPE_ID': 'lists',
        'IBLOCK_ID': '41',
        'ELEMENT_ID': '683',
        'FIELD_ID': '120'
    };
    BX24.callMethod(
        'lists.element.get.file.url',
        params,
        function(result)
        {
            if(result.error())
                alert("Error: " + result.error());
            else
                console.log(result.data());
        }
    )
    ```







