---
method: task.item.userfield.get
scope: task
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"array","positional":["order","filter","select","params"]}
returns: {"type":"object"}
---

Auto-generated stub. Fill in params/returns/examples.

Example (curl):

```bash
curl, js, php)
- отсутствует ответ в случае ошибки
- отсутствует ответ в случае успеха

{% endnote %}

{% endif %}

{% note warning "Мы еще обновляем эту страницу" %}

Тут может не хватать некоторых данных — дополним в ближайшее время

{% endnote %}

> Scope: [`task`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `task.item.userfield.get` возвращает свойство по идентификатору.

## Параметры

#|
||  **Параметр** / **Тип**| **Описание** ||
|| **auth**
[`unknown`](../../data-types.md) | Токен авторизации. ||
|| **ID**
[`unknown`](../../data-types.md) | Идентификатор пользовательского поля. ||
|#

## Примеры

{% list tabs %}

- cURL

    ```http
    $appParams = array(
        'auth' => 'q21g8vhcqmxdrbhqlbd2wh6ev1debppa',
        'ID' => 77
    );
    ```

    ```http
    $request = 'http://your-domain.ru/rest/task.item.userfield.get.xml?' . http_build_query($appParams);
```

---

# Получить пользовательское поле задачи по идентификатору task.item.userfield.get





- не указаны типы параметров
- не указана обязательность параметров
- не хватает 1 примера (должно быть три примера - curl, js, php)
- отсутствует ответ в случае ошибки
- отсутствует ответ в случае успеха







Тут может не хватать некоторых данных — дополним в ближайшее время



> Scope: [`task`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `task.item.userfield.get` возвращает свойство по идентификатору.

## Параметры

#|
||  **Параметр** / **Тип**| **Описание** ||
|| **auth**
[`unknown`](../../data-types.md) | Токен авторизации. ||
|| **ID**
[`unknown`](../../data-types.md) | Идентификатор пользовательского поля. ||
|#

## Примеры



- cURL

    ```http
    $appParams = array(
        'auth' => 'q21g8vhcqmxdrbhqlbd2wh6ev1debppa',
        'ID' => 77
    );
    ```

    ```http
    $request = 'http://your-domain.ru/rest/task.item.userfield.get.xml?' . http_build_query($appParams);
    ```

- JS

    ```js
    BX24.callMethod(
        'task.item.userfield.get',
        {
            'auth': 'q21g8vhcqmxdrbhqlbd2wh6ev1debppa',
            'ID': 77
        },

        function(result)
        {
            console.info(result.data());
            console.log(result);
        }
    );
    ```




