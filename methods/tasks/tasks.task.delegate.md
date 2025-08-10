---
method: tasks.task.delegate
scope: tasks
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---

Auto-generated stub. Fill in params/returns/examples.

---

# Делегировать задачу tasks.task.delegate





- не указаны типы параметров
- не указана обязательность параметров
- отсутствуют примеры (должно быть три примера - curl, js, php)
- отсутствует ответ в случае ошибки
- отсутствует ответ в случае успеха
 






Тут может не хватать некоторых данных — дополним в ближайшее время



> Scope: [`task`](../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `tasks.task.delegate` для делегирования задачи

#|
|| **Параметр** / **Тип** | **Описание** ||
|| **taskId**
[`unknown`](../data-types.md) | Идентификатор задачи. ||
|| **userId**
[`unknown`](../data-types.md) | Идентификатор пользователя, на которого необходимо делегировать задачу. ||
|#

## Пример



- JS

    ```js
    BX24.callMethod(
        'tasks.task.delegate',
        {taskId:1, userId: 2},
        function(res){console.log(res.answer.result);}
    );
    ```




