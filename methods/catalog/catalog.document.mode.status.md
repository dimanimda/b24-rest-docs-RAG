---
method: catalog.document.mode.status
scope: catalog
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---


---

# Получить информациюи о том, включен ли складской учет catalog.document.mode.status



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указана обязательность параметров
- отсутствует ответ в случае ошибки
- нет примеров на др. языках
  




> Scope: [`catalog`](../../scopes/permissions.md)
>
> Кто может подписаться: любой пользователь

## Описание

```http
catalog.document.mode.status()
```

Метод для получения информации о том, включён ли складской учёт.
Возвращается статус складского учёта:

- `Y` - складской учёт включен;
- `N` - складской учёт выключен.
  
## Параметры

Без параметров

## Примеры



- JS
  
    ```js
    BX24.callMethod(
        'catalog.document.mode.status',
        {},
        function(result)
        {
            if(result.error())
                console.error(result.error());
            else
                console.log(result.data());
        }
    );
    ```

- PHP
  
    ```php
    $result = CRest::call(
        'catalog.document.mode.status'
    );
    echo '<pre>';
    print_r($result);
    echo '</pre>';
    ```




