---
method: crm.timeline.comment.update
scope: crm
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id","fields"],"properties":{"id":{"type":"integer"},"fields":{"type":"object"}}}
returns: {"type":"object"}
---


---

# Обновить комментарий crm.timeline.comment.update

> Scope: [`crm`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: `любой пользователь`

Метод обновляет дело типа «Комментарий» в таймлайне.

## Параметры метода



#|
|| **Название**
`тип` | **Описание** ||
|| **id***
[`integer`](../../../data-types.md) | Целочисленный идентификатор дела типа «Комментарий» (например, `1`). Получить идентификаторы можно методом [`crm.timeline.comment.list`](./crm-timeline-comment-list.md) ||
|| **fields***
[`object`](../../../data-types.md) | Значения полей (подробное описание приведено [ниже](#parametr-fields)) для обновления дела типа «Комментарий» в виде структуры:

```js
fields:
{
    "COMMENT": "значение",
    "FILES": [
        [
            "название файла", 
            "файл"
        ],
        [
            "название файла",
            "фафйл"
        ],
    ]
}
```



С версии crm 23.100.0 принимаются только параметры с ключом `fields` в нижнем регистре. Другие недокументированные варианты (Fields, FIELDS, arFields) не принимаются.



||
|| **ownerTypeId**
[`integer`](../../data-types.md) | [Целочисленный идентификатор типа сущности CRM](../../data-types.md#object_type), к которому привязан комментарий (например, `2` для сделки) ||
|| **ownerId**
[`integer`](../../../data-types.md) | Целочисленный идентификатор элемента CRM, к которому привязан комментарий (например, `1`). Получить список идентификаторов можно методом [`crm.timeline.bindings.list`](../bindings/crm-timeline-bindings-list.md) (поле `ENTITY_ID`) ||
|#


### Параметр fields

#|
|| **Название**
`тип` | **Описание** ||
|| **COMMENT**
[`string`](../../../data-types.md) | Текст комментария ||
|| **FILES**
[`attached_diskfile`](../../../data-types.md) | Список файлов. Массив значений, описанный по [правилам](../../../files/how-to-update-files.md) ||
|#

## Примеры кода





- cURL (Webhook)

    ```bash
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":999,"fields":{"COMMENT":"Comment was changed","FILES":[["1.gif","R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="],["2.gif","R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="]]}}' \
    https://**put_your_bitrix24_address**/rest/**put_your_user_id_here**/**put_your_webhook_here**/crm.timeline.comment.update
    ```

- cURL (OAuth)

    ```bash
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":999,"fields":{"COMMENT":"Comment was changed","FILES":[["1.gif","R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="],["2.gif","R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="]]},"auth":"**put_access_token_here**"}' \
    https://**put_your_bitrix24_address**/rest/crm.timeline.comment.update
    ```

- JS

    ```js
    BX24.callMethod(
        "crm.timeline.comment.update",
        {
            id: 999,
            fields:
            {
                "COMMENT": "Comment was changed",
                "FILES": [
                    [
                        "1.gif", 
                        "R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                    ],
                    [
                        "2.gif",
                        "R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                    ],
                ]
            }
        },
        result => {
            if (result.error())
                console.error(result.error());
            else
                console.dir(result.data());
        }
    );
    ```

- PHP

    ```php
    require_once('crest.php');

    $result = CRest::call(
        'crm.timeline.comment.update',
        [
            'id' => 999,
            'fields' => [
                'COMMENT' => 'Comment was changed',
                'FILES' => [
                    ["1.gif", "R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="],
                    ["2.gif", "R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="]
                ]
            ]
        ]
    );

    echo '<PRE>';
    print_r($result);
    echo '</PRE>';
    ```



## Обработка ответа

HTTP-статус: **200**

```json
{
    "result": 999,
    "time": {
        "start": 1715091541.642592,
        "finish": 1715091541.730599,
        "duration": 0.08800697326660156,
        "date_start": "2024-05-03T17:19:01+03:00",
        "date_finish": "2024-05-03T17:19:01+03:00",
        "operating": 0
    }
}
```

### Возвращаемые данные

#|
|| **Название**
`тип` | **Описание** ||
|| **result**
[`integer`](../../../data-types.md) | Возвращает целочисленный идентификатор обновлённого комментария ||
|| **time**
[`time`](../../../data-types.md) | Информация о времени выполнения запроса ||
|#

## Обработка ошибок

HTTP-статус: **400**

```json
{
    "error": "NOT_FOUND",
    "error_description": "Not found."
}
```



### Возможные коды ошибок

#|
|| **Код** | **Описание** ||
|| `OWNER_NOT_FOUND` | Владелец элемента не найден ||
|| `ACCESS_DENIED` | Недостаточно прав ||
|| `NOT_FOUND` | Элемент не найден ||
|| `INVALID_ARG_VALUE` | Пустой коментарий ||
|| `100` | Не переданы обязательные поля ||
|#



## Продолжите изучение 

- [{#T}](./crm-timeline-comment-add.md)
- [{#T}](./crm-timeline-comment-get.md)
- [{#T}](./crm-timeline-comment-list.md)
- [{#T}](./crm-timeline-comment-delete.md)
- [{#T}](./crm-timeline-comment-fields.md)


