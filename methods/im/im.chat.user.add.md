---
method: im.chat.user.add
scope: im
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["fields"],"properties":{"fields":{"type":"object"}}}
returns: {"type":"object"}
---


---

# Приглаcить участников в чат im.chat.user.add



Тут может не хватать некоторых данных — дополним в ближайшее время







- нужны правки под стандарт написания
- не указаны типы параметров
- отсутствуют примеры





> Scope: [`im`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `im.chat.user.add` приглашает участников в чат.

#|
|| **Параметр** | **Пример** | **Описание** | **Ревизия** ||
|| **CHAT_ID^*^**
[`unknown`](../../data-types.md) | `13` | Идентификатор чата | 18 ||
|| **USERS^*^**
[`unknown`](../../data-types.md) | `Array(3,4)` | Идентификаторы новых пользователей | 18 ||
|| **HIDE_HISTORY**
[`unknown`](../../data-types.md) | `N` | Отображение истории переписки для пользователя, которого добавляют в чат этим методом. Y/N - по умолчанию N. Если передать Y, то новый пользователь не будет видеть историю. | 18 ||
|#



## Примеры





- PHP

    ```php
    $result = restCommand(
        'im.chat.user.add',
        Array(
            'CHAT_ID' => 13,
            'USERS' => Array(3,4),
            'HIDE_HISTORY' => 'N',
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
|| **WRONG_REQUEST** | У вас недостаточно прав для добавления участника в чат или участник уже состоит в чате ||
|#
