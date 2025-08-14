---
method: im.user.status.idle.start
scope: im
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---


---

# Установить автоматический статус «Отошел» im.user.status.idle.start



Тут может не хватать некоторых данных — дополним в ближайшее время







- нужны правки под стандарт написания
- не указаны типы параметров
- отсутствуют примеры
- отсутствует ответ в случае ошибки





> Scope: [`im`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `im.user.status.idle.start` устанавливает автоматический статус «Отошел».

Метод разработан для предыдущей версии чата. В текущей версии чата М1 он работает, но результаты не отображаются в интерфейсе.



- [Битрикс24 Чат: новый мессенджер](https://helpdesk.bitrix24.ru/open/19071750/)



## Параметры метода

#|
|| **Параметр** | **Пример** | **Описание** | **Ревизия** ||
|| **AGO**
[`unknown`](../../data-types.md) | `10` | Сколько минут назад отошел | `18` ||
|#



## Примеры



- cURL

    // пример для cURL

- JS

    ```js
    BX24.callMethod(
        'im.user.status.idle.start',
        {
            'AGO': 10
        },
        function(result){
            if(result.error())
            {
                console.error(result.error().ex);
            }
            else
            {
                console.log(result.data());
            }
        }
    );
    ```

- PHP

    

    ```php
    $result = restCommand(
        'im.user.status.idle.start',
        Array(
            'AGO' => 10
        ),
        $_REQUEST[
            "auth"
        ]
    );
    ```





## Пример ответа

```json
{
    "result": true
}
```


