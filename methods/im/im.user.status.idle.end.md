---
method: im.user.status.idle.end
scope: im
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---


---

# Отключить автоматический статус «Отошел» im.user.status.idle.end



Тут может не хватать некоторых данных — дополним в ближайшее время







- нужны правки под стандарт написания
- не указаны типы параметров
- отсутствуют примеры
- отсутствует ответ в случае ошибки





> Scope: [`im`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `im.user.status.idle.end` отключает автоматический статус «Отошел».

Метод разработан для предыдущей версии чата. В текущей версии чата М1 он работает, но результаты не отображаются в интерфейсе.



- [Битрикс24 Чат: новый мессенджер](https://helpdesk.bitrix24.ru/open/19071750/)



## Параметры метода

Без параметров.

## Примеры



- cURL

    // пример для cURL

- JS

    ```js
    BX24.callMethod(
        'im.user.status.idle.end',
        {},
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
        Array(),
        $_REQUEST[
            "auth"
        ]
    );    
    ```





## Ответ в случае успеха

```json
{
    "result": true
}
```


