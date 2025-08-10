---
method: task.item.userfield.gettypes
scope: task
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"array","positional":["order","filter","select","params"]}
returns: {"type":"object"}
---

Auto-generated stub. Fill in params/returns/examples.

Example (curl):

```bash
curl, js, php)
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки
- добавить примечание, что другие типы нельзя к задачам добавлять

{% endnote %}

{% endif %}

{% note warning "Мы еще обновляем эту страницу" %}

Тут может не хватать некоторых данных — дополним в ближайшее время

{% endnote %}

> Scope: [`task`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `task.item.userfield.gettypes` возвращает все доступные в системе типы данных.

Пользовательские поля в задачах поддерживают типы данных:
- `string` — строка
- `double` — число
- `date` — дата
- `boolean` — да/нет 

## Параметры

#|
|| **Параметр** / **Тип** | **Описание** ||
|| **auth**
[`unknown`](../../data-types.md) | Токен авторизации. ||
|#

## Примеры

{% list tabs %}

- cURL

    ```http
    $request = 'http://your-domain.ru/rest/task.item.userfield.gettypes.xml?' . http_build_query($appParams);
```
