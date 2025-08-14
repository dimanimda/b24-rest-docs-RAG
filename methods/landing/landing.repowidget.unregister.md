---
method: landing.repowidget.unregister
scope: landing
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---


---

# Удалить виджет для Вайба landing.repowidget.unregister

> Scope: [`landing`](../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `landing.repowidget.unregister` удаляет виджет для Главный страницы: наш вайб. В случае успеха возвращает `true`, в противном случае — `false` или ошибку с описанием.

## Параметры метода



#|
|| **Название**
`тип` | **Описание** ||
|| **code***
[`string`](../data-types.md) | Уникальный код удаляемого виджета ||
|#

## Примеры кода





- JS

    ```js
    BX24.callMethod(
        'landing.repowidget.unregister', {
            code: 'my_widget'
        },
        function(result)
        {
            if(result.error())
                console.error(result.error());
            else
                console.info(result.data());
        }
    );
    ```

- PHP

    ```php
    require_once('crest.php');

    $result = CRest::call(
        'landing.repowidget.unregister',
        [
            'code' => 'my_widget'
        ]
    );

    echo '<PRE>';
    print_r($result);
    echo '</PRE>';
    ```



## Обработка ответа

HTTP-статус: **200**

```json
{
    "result": true,
    "time": {
        "start": 1713949410.036288,
        "finish": 1713949411.632775,
        "duration": 1.596487045288086,
        "processing": 0.6458539962768555,
        "date_start": "2024-04-24T11:03:30+02:00",
        "date_finish": "2024-04-24T11:03:31+02:00",
        "operating": 0
    }
}
```

### Возвращаемые данные

#|
|| **Название**
`тип` | **Описание** ||
|| **result**
[`boolean`](../data-types.md) | Результат удаления виджета ||
|| **time**
[`time`](../data-types.md) | Информация о времени выполнения запроса ||
|#

## Обработка ошибок



## Продолжите изучение

- [{#T}](./landing-repowidget-register.md)
- [{#T}](./landing-repowidget-get-list.md)
- [{#T}](./landing-repowidget-debug.md)
