---
method: im.user.status.get
scope: im
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id"],"properties":{"id":{"type":"integer"}}}
returns: {"type":"object"}
---


---

# Получить информацию об установленном статусе пользователя im.user.status.get



Тут может не хватать некоторых данных — дополним в ближайшее время







- нужны правки под стандарт написания
- не указаны типы параметров
- отсутствуют примеры
- отсутствует ответ в случае ошибки





> Scope: [`im`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `im.user.status.get` получает информацию об установленном статусе пользователя.

Без параметров.

## Примеры



- cURL

    // пример для cURL

- JS

    ```javascript
    BX24.callMethod(
        'im.user.status.get',
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
        'im.user.status.get',
        Array(),
        $_REQUEST[
            "auth"
        ]
    );
    ```





## Ответ в случае успеха

```json
{
    "result": "dnd"
}
```

### Описание результата

- `online` – Онлайн
- `dnd` – Не беспокоить
- `away` – Отсутствую



Статус `away` использовался в предыдущей версии чата. В текущей версии чата М1 он не отображается в интерфейсе.
[Битрикс24 Чат: новый мессенджер](https://helpdesk.bitrix24.ru/open/19071750/)




