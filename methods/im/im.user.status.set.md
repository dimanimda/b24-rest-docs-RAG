---
method: im.user.status.set
scope: im
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---


---

# Установить статус пользователя im.user.status.set



Тут может не хватать некоторых данных — дополним в ближайшее время







- нужны правки под стандарт написания
- не указаны типы параметров
- отсутствуют примеры
- отсутствует ответ в случае ошибки





> Scope: [`im`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `im.user.status.set` устанавливает статус пользователя.

#|
|| **Параметр** | **Пример** | **Описание** | **Ревизия** ||
|| **STATUS^*^**
[`unknown`](../../data-types.md) | `online` | Новый статус пользователя | 18 ||
|#



Доступны следующие статусы:

- `online` – Онлайн
- `dnd` – Не беспокоить
- `away` – Отсутствую



Статус `away` использовался в предыдущей версии чата. В текущей версии чата М1 он не отображается в интерфейсе.
[Битрикс24 Чат: новый мессенджер](https://helpdesk.bitrix24.ru/open/19071750/)



## Примеры



- cURL

    // пример для cURL

- JS

    ```javascript
    BX24.callMethod(
        'im.user.status.set',
        {
            STATUS: 'online'
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
        'im.user.status.set',
        Array(
            'STATUS' => 'online',
        ),
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


