---
method: tasks.task.mute
scope: tasks
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---


---

# Включить режим «Без звука» tasks.task.mute





- не указаны типы параметров
- отсутствуют примеры (должно быть три примера - curl, js, php)
- отсутствует ответ в случае ошибки
- отсутствует ответ в случае успеха
 






Тут может не хватать некоторых данных — дополним в ближайшее время



> Scope: [`task`](../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `tasks.task.mute` включает режим «Без звука».

#|
|| **Параметр** / **Тип** | **Описание** ||
|| **id^*^**
[`unknown`](../data-types.md) | Идентификатор задачи. ||
|#



## Возвращаемое значение

Возвращает json массив данных о задаче (аналогично методу [`tasks.task.get`](./tasks-task-get.md)).

## Пример



- JS

    ```js
    BX24.callMethod('tasks.task.mute', {id: 1223})
    ```




