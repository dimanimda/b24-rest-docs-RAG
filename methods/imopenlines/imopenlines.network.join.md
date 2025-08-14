---
method: imopenlines.network.join
scope: imopenlines
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---


---

# Подключить внешнюю открытую линию к порталу imopenlines.network.join



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указаны типы параметров
- отсутствуют примеры





> Scope: [`imopenlines, imbot`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод подключает внешнюю открытую линию к порталу.

## Параметры метода



#|
|| **Название**
`Тип` | **Пример** | **Описание** | **Ревизия** ||
|| **CODE***
[`unknown`](../../data-types.md) | `ab515f5d85a8b844d484f6ea75a2e494` | Да | Код для поиска со страницы коннекторов | 1 ||
|#

## Примеры





- cURL (Webhook)

    // пример для cURL (Webhook)

- cURL (OAuth)

    // пример для cURL (OAuth)

- JS

    // пример для js

- PHP

    
    
    ```php
    $result = restCommand(
        'imopenlines.network.join',
        Array(
            'CODE' => 'ab515f5d85a8b844d484f6ea75a2e494'
        ),
        $_REQUEST["auth"]
    );
    ```



## Ответ в случае успеха

```json
{
    "result": 42
}
```
**Результат выполнения**: `ID` бота или ошибка.

## Ответ в случае ошибки

```json
{
    "error": "NOT_FOUND",
    "error_description": "Openline is not found"
}
```

### Описание ключей

- `error` – код возникшей ошибки
- `error_description` – краткое описание возникшей ошибки

### Возможные коды ошибок

#|
|| Код | Описание ||
|| **IMBOT_ERROR**| Не установлен модуль по управлению ботами ||
|| **NOT_FOUND** | Открытая линия не найдена ||
|| **INACTIVE** | Открытая линия в данный момент недоступна ||
|#
