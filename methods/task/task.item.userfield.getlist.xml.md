---
method: task.item.userfield.getlist.xml
scope: task
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: nav_params
params: {"type":"array","positional":["order","filter","select","params"]}
returns: {"type":"array","items":{"type":"object"}}
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

Метод `task.item.userfield.getlist` возвращает список свойств.

## Параметры

#|
||  **Параметр** / **Тип**| **Описание** ||
|| **auth**
[`unknown`](../../data-types.md) | Токен авторизации. ||
|| **ORDER**
[`unknown`](../../data-types.md) | Массив для сортировки результата. Массив вида `array('поле сортировки'=>'направление сортировки' [, ...])`. ||
|| **FILTER**
[`unknown`](../../data-types.md) | Массив фильтрации результата вида `array('фильтруемое поле'=>'значение фильтра' [, ...])`. Обязательный параметр. ||
|#

## Примеры

{% list tabs %}

- cURL

    ```http    
    $appParams = array(
    'auth' => 'q21g8vhcqmxdrbhqlbd2wh6ev1debppa',
    'ORDER' => array('ID' => 'asc'),
    'FILTER' => array('USER_TYPE_ID' => 'string')
    );
    ```

    ```http    
    $request = 'http://your-domain.ru/rest/task.item.userfield.getlist.xml?' . http_build_query($appParams);
```
