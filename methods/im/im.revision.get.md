---
method: im.revision.get
scope: im
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id"],"properties":{"id":{"type":"integer"}}}
returns: {"type":"object"}
---


---

# Получить информацию о ревизиях API im.revision.get



Тут может не хватать некоторых данных — дополним в ближайшее время







- нужны правки под стандарт написания
- отсутствуют примеры
- отсутствует ответ в случае ошибки





> Scope: [`im`](../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `im.revision.get` получает информацию о ревизиях API.

## Примеры



- cURL

    // пример для cURL

- JS

    ```javascript
    BX24.callMethod(
        'im.revision.get',
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
        'im.revision.get',
        Array(

        ),
        $_REQUEST[
            "auth"
        ]
    );
    ```





## Ответ в случае успеха

```json
{    
    "result": {
        "rest": 18,
        "web": 117,
        "mobile": 9,
    }
}
```

### Описание ключей

- `rest` – ревизия API для REST клиентов.
- `web` – ревизия API для веб/десктоп клиента.
- `mobile` – ревизия API для мобильного клиента.
