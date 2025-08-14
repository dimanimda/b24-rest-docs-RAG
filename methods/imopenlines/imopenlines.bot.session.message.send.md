---
method: imopenlines.bot.session.message.send
scope: imopenlines
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---


---

# Отправить приветственное сообщение imopenlines.bot.session.message.send



Тут может не хватать некоторых данных — дополним в ближайшее время







- нужны правки под стандарт описания
- не указаны типы параметров
- отсутствуют примеры
- отсутствует ответ в случае ошибки





> Scope: [`imopenlines, imbot`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод отправляет чат-ботом автоматическое сообщение.

## Параметры метода



#|
|| **Название**
`Тип` | **Пример** | **Описание** | **Ревизия** ||
|| **CHAT_ID^*^**
[`unknown`](../../../data-types.md) | `2` | Идентификатор чата, который забирает текущий оператор | 1 ||
|| **MESSAGE^*^**
[`unknown`](../../../data-types.md) | `message text` | Отправляемое сообщение | 1 ||
|| **NAME^*^**
[`unknown`](../../../data-types.md) | `WELCOME` | Тип сообщения:
- `WELCOME` — приветственное сообщение
- `DEFAULT` — обычное сообщение
 
По умолчанию, пустое значение | 1 ||
|#

## Примеры





- PHP

    ```php
    $result = restCommand(
        'imopenlines.bot.session.message.send',
        Array(
            'CHAT_ID' => 2,
            'MESSAGE' => 'message text',
            'NAME' => 'WELCOME'
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

или ошибка.
