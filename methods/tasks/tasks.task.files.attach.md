---
method: tasks.task.files.attach
scope: tasks
deprecated: true
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---

Auto-generated stub. Fill in params/returns/examples.

---

# Прикрепить файлы к задаче tasks.task.files.attach





- не указаны типы параметров
- не указана обязательность параметров
- не хватает примеров (должно быть три примера - curl, js, php)
- отсутствует ответ в случае ошибки
- отсутствует ответ в случае успеха
 






Тут может не хватать некоторых данных — дополним в ближайшее время



> Scope: [`task`](../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `tasks.task.files.attach` для прикрепления загруженного на диск файла к задаче.

#|
|| **Параметр** / **Тип** | **Описание** ||
|| **taskId**
[`unknown`](../data-types.md) | Идентификатор задачи. ||
|| **fileId**
[`unknown`](../data-types.md) | Идентификатор загруженного на диск файла. ||
|| **params**
[`unknown`](../data-types.md) | Массив с дополнительными параметрами, по умолчанию пустой. В настоящее время не используется. ||
|#

## Пример



- JS

    ```js
    BX24.callMethod(
        'tasks.task.files.attach',
        {
            taskId: 1,
            fileId: 1065,
        },
        function(res) {
            console.log(res.answer.result);
        }
    );
    ```





## Продолжить изучение

- [{#T}](../../tutorials/tasks/how-to-upload-file-to-task.md)
- [{#T}](./deprecated/task-item/task-item-get-files.md)
