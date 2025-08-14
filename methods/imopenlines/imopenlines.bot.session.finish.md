---
method: imopenlines.bot.session.finish
scope: imopenlines
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---


---

# Завершить диалог imopenlines.bot.session.finish



Тут может не хватать некоторых данных — дополним в ближайшее время







- отсутствуют примеры





> Scope: [`imopenlines, imbot`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод завершает текущую сессию.

## Параметры метода



#|
|| **Название**
`Тип` | **Пример** | **Описание** | **Ревизия** ||
|| **CHAT_ID^*^**
[`integer`](../../../data-types.md) | `112` | Идентификатор чата | 1 ||
|#

## Примеры





- PHP

    ```php
    $result = restCommand(
        'imopenlines.bot.session.finish',
        Array(
            'CHAT_ID' => 112
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

- `error` — код возникшей ошибки
- `error_description` — краткое описание возникшей ошибки

### Возможные коды ошибок

#|
|| **Код** | **Описание** ||
|| **CHAT_ID_EMPTY** | Не передан идентификатор чата ||
|| **BOT_ID_ERROR** | Неправильный идентификатор чат-бота ||
|#
