---
method: tasks.api.scrum.backlog.delete
scope: tasks
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id"],"properties":{"id":{"type":"integer"}}}
returns: {"type":"object"}
---


---

# Удалить бэклог tasks.api.scrum.backlog.delete

> Scope: [`task`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `tasks.api.scrum.backlog.delete` удаляет бэклог.

В обычной ситуации удалять бэклог не нужно. При удалении бэклога *Битрикс24* автоматически создаст его заново при открытии страницы планирования в задачах Скрама.

Метод используется, если бэклог ошибочно добавлен в группу или проект, которые не являются скрамом.

## Параметры метода



#|
|| **Название**
`тип` | **Описание** ||
|| **id***
[`integer`](../../../data-types.md) | Идентификатор бэклога.

Можно получить методом создания бэклога [tasks.api.scrum.backlog.add](./tasks-api-scrum-backlog-add.md) или методом получения полей бэклога по идентификатору Скрама [tasks.api.scrum.backlog.get](./tasks-api-scrum-backlog-get.md) ||
|#

## Примеры кода





- cURL (Webhook)

    ```http
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id": 1}' \
    https://**put_your_bitrix24_address**/rest/**put_your_user_id_here**/**put_your_webbhook_here**/tasks.api.scrum.backlog.delete
    ```

- cURL (OAuth)

    ```http
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id": 1, "auth":"**put_access_token_here**"}' \
    https://**put_your_bitrix24_address**/rest/tasks.api.scrum.backlog.delete
    ```

- JS

    ```js
    BX24.callMethod(
        'tasks.api.scrum.backlog.delete',
        {
            "id": 1
        },
        function(result) {
            if (result.error()) {
                console.error(result.error());
            } else {
                console.info(result.data());
            }
        }
    );
    ```

- PHP

    ```php
    require_once('crest.php');

    $result = CRest::call(
        'tasks.api.scrum.backlog.delete',
        [
            'id' => 1,
        ]
    );

    echo '<PRE>';
    print_r($result);
    echo '</PRE>';
    ```



## Обработка ответа

HTTP-статус: **200**

В случае успешного выполнения сервер вернет следующий ответ:

```json
{
    "result": [],
    "time":{
        "start":1712137817.343984,
        "finish":1712137817.605804,
        "duration":0.26182007789611816,
        "processing":0.018325090408325195,
        "date_start":"2024-04-03T12:50:17+03:00",
        "date_finish":"2024-04-03T12:50:17+03:00"
    }
}
```

## Обработка ошибок

HTTP-статус: **400**

```json
{
    "error":0,
    "error_description":"Access denied"
}
```



### Возможные коды ошибок

#|
|| **Код** | **Cообщение об ошибке** | **Описание** ||
|| `0` | Backlog not found | Ошибка возникает при попытке удаления несуществующего бэклога ||
|| `0` | Access denied | Отсутствуют соответствующие права доступа ||
|| `0` | Unknown error | Другая ошибка ||
|#



## Продолжите изучение

- [{#T}](./tasks-api-scrum-backlog-add.md)
- [{#T}](./tasks-api-scrum-backlog-update.md)
- [{#T}](./tasks-api-scrum-backlog-get.md)
- [{#T}](./tasks-api-scrum-backlog-get-fields.md)
