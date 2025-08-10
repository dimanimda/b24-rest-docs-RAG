---
method: tasks.task.getaccess
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

# Проверить доступ к задаче tasks.task.getaccess





- не указаны типы параметров
- не указана обязательность параметров
- отсутствуют примеры (должно быть три примера - curl, js, php)
- отсутствует ответ в случае ошибки
- отсутствует ответ в случае успеха
 






Тут может не хватать некоторых данных — дополним в ближайшее время



> Scope: [`task`](../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `tasks.task.getaccess` для проверки доступа к задаче.

#|
|| **Параметр** / **Тип** | **Описание** ||
|| **taskId**
[`unknown`](../data-types.md) | Идентификатор задачи. ||
|| **users**
[`unknown`](../data-types.md) | Массив ID пользователей, которым требуется проверить доступ. По умолчанию подставляется текущий пользователь. ||

|#

## Пример



- JS

    ```js
    BX24.callMethod(
        'tasks.task.getaccess',
        {taskId:1, users:[1]},
        function(res){console.log(res.answer.result);}
    );
    ```




