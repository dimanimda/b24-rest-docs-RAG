---
method: im.counters.get
scope: im
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id"],"properties":{"id":{"type":"integer"}}}
returns: {"type":"object"}
---


---

# Получить счетчики im.counters.get



Тут может не хватать некоторых данных — дополним в ближайшее время







- нужны правки под стандарт написания
- отсутствуют примеры
- отсутствует ответ в случае ошибки





> Scope: [`im`](../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `im.counters.get` получает счетчики.

Без параметров.

## Примеры



- cURL

    // пример для cURL

- JS

    ```js
    BX24.callMethod(
        'im.counters.get',
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
        'im.counters.get',
        Array(),
        $_REQUEST[
            "auth"
        ]
    );    
    ```





## Ответ в случае успеха

```json
{    
    "result": {
        "CHAT": {"18": 1},
        "DIALOG": {"1": 3, "5": 1},
        "LINES": {},
        "TYPE": {
            "ALL": 5,
            "CHAT": 1,
            "DIALOG": 4,
            "LINES": 0,
            "NOTIFY": 0
        }
    }
}
```

### Описание ключей

- `CHAT` – объект, содержащий список чатов, в которых есть непрочитанные сообщения.
- `DIALOG` – объект, содержащий список диалогов, в которых есть непрочитанные сообщения.
- `LINES` – объект, содержащий список чатов открытых линий, в которых есть непрочитанные сообщения.
- `TYPE` – объект, содержит суммарные счетчики:
  - `ALL` – суммарный счетчик всех сущностей.
  - `CHAT` – суммарный счетчик чатов.
  - `DIALOG` – суммарный счетчик диалогов.
  - `LINES` – суммарный счетчик открытых линий.
  - `NOTIFY` – суммарный счетчик уведомлений.

