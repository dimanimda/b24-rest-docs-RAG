---
method: tasks.task.result.list
scope: tasks
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: nav_params
params: {"type":"object","properties":{"filter":{"type":"object"},"order":{"type":"object"},"select":{"type":"array","items":{"type":"string"}},"start":{"type":["integer","string"]}}}
returns: {"type":"array","items":{"type":"object"}}
---

Auto-generated stub. Fill in params/returns/examples.

---

# Получить список результатов задачи tasks.task.result.list





- не указана обязательность параметров
- не хватает примеров (должно быть три примера - curl, js, php)
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки







Тут может не хватать некоторых данных — дополним в ближайшее время



> Scope: [`task`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `tasks.task.result.list` позволяет просмотреть список результатов к задаче.

#|
|| **Параметр** / **Тип**| **Описание** ||
|| **taskId**
[`int`](../../data-types.md) | Идентификатор задачи. ||
|#

## Пример



- JS

    ```js
    BX24.callMethod(
        'tasks.task.result.list',
        {
            "taskId" : 7811
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




