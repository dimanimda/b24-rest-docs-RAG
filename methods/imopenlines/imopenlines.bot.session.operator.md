---
method: imopenlines.bot.session.operator
scope: imopenlines
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---


---

# Переключить диалог на свободного оператора imopenlines.bot.session.operator



Тут может не хватать некоторых данных — дополним в ближайшее время







- отсутствуют примеры





> Scope: [`imopenlines, imbot`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод переключает разговор на свободного оператора.

## Параметры метода



#|
|| **Название**
`Тип` | **Пример** | **Описание** | **Ревизия** ||
|| **CHAT_ID^*^**
[`integer`](../../../data-types.md) | `12` | Идентификатор чата | 1 ||
|#

## Примеры





- PHP

    ```php
    $result = restCommand(
        'imopenlines.bot.session.operator',
        Array(
            'CHAT_ID' => 12
        ),
        $_REQUEST["auth"]
    );
    ```





## Ответ в случае успеха

```json
{
    "result": true
}
```

## Ответ в случае ошибки

```json
{
    "error": "CHAT_ID_EMPTY",
    "error_description": "Не передан идентификатор чата"
}
```

### Описание ключей

- `error` – код возникшей ошибки
- `error_description` – краткое описание возникшей ошибки

### Возможные коды ошибок

#|
|| **Код** | **Описание** ||
|| **CHAT_ID_EMPTY** | Не передан идентификатор чата ||
|| **WRONG_CHAT** | Указанный чат находится не под управлением бота ||
|| **BOT_ID_ERROR** | Неправильный идентификатор чат-бота ||
|#
