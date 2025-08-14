---
method: im.dialog.read.all
scope: im
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---


---

# Установить признак «прочитано» у всех чатов im.dialog.read.all



Тут может не хватать некоторых данных — дополним в ближайшее время







- нужны правки под стандарт написания
- отсутствуют примеры
- отсутствует ответ в случае ошибки





> Scope: [`im`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `im.dialog.read.all` устанавливает метки «прочитано» для всех диалогов.

Параметры не передаются.

## Примеры



- JS

    ```js
    BX24.callMethod(
        'im.dialog.read.all',
        {},
        res => console.log(res.data())
    )
    ```





## Ответ в случае успеха

```json
{
    "result": true
}
```


