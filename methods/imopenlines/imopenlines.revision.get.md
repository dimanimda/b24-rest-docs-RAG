---
method: imopenlines.revision.get
scope: imopenlines
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id"],"properties":{"id":{"type":"integer"}}}
returns: {"type":"object"}
---


---

# Получить информацию о ревизиях API imopenlines.revision.get



Тут может не хватать некоторых данных — дополним в ближайшее время







- отсутствуют примеры
- отсутствует ответ в случае ошибки





> Scope: [`imopenlines`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод получает информацию о ревизиях API Открытых линий.

Без параметров.

## Примеры



- cURL

    // пример для cURL

- JS

    ```js
    BX24.callMethod(
        'imopenlines.revision.get',
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
        'imopenlines.revision.get',
        Array(),
        $_REQUEST["auth"]
    );
    ```





## Ответ в случае успеха

```json
{    
    "result": {
        "rest": 2,
        "web": 1,
        "mobile": 1,
    }
}
```

**Описание ключей**:

- `rest` – ревизия api для rest клиентов
- `web` – ревизия api для веб/десктоп клиента
- `mobile` – ревизия api для мобильного клиента
