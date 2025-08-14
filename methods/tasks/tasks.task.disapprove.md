---
method: tasks.task.disapprove
scope: tasks
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---


---

# Отклонить задачу tasks.task.disapprove





- не указаны типы параметров
- не указана обязательность параметров
- отсутствуют примеры (должно быть три примера - curl, js, php)
- отсутствует ответ в случае ошибки
- отсутствует ответ в случае успеха
 






Тут может не хватать некоторых данных — дополним в ближайшее время



> Scope: [`task`](../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `tasks.task.disapprove` позволяет отклонить задачу.

#|
|| **Параметр** / **Тип** | **Описание** ||
|| **taskId**
[`unknown`](../data-types.md) | Идентификатор задачи. ||
|#

## Пример



- JS

    ```js
    BX24.callMethod(
        'tasks.task.disapprove',
        {taskId:1},
        function(res){console.log(res.answer.result);}
    );
    ```




