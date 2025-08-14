---
method: imopenlines.crm.message.add
scope: imopenlines
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["fields"],"properties":{"fields":{"type":"object"}}}
returns: {"type":"object"}
---


---

# Отправить сообщение в открытую линию imopenlines.crm.message.add



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указаны типы параметров
- отсутствуют примеры
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки
- из файла Сергея: от имени сотрудника, указать особенности и рекомендуемую последовательность действий





> Scope: [`imopenlines`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод отправляет сообщение от имени пользователя в чат сущности CRM.

## Параметры метода



#|
|| **Название**
`Тип` | **Описание** ||
|| **CRM_ENTITY_TYPE***
[`unknown`](../../../data-types.md) | Тип CRM сущности:
- lead — лид
- deal — сделка
- company — компания
- contact — контакт
 ||
|| **CRM_ENTITY_ID***
[`unknown`](../../../data-types.md) | Идентификатор CRM сущности ||
|| **USER_ID***
[`unknown`](../../../data-types.md) | Идентификатор пользователя или бота, которого мы хотим добавить в чат ||
|| **CHAT_ID***
[`unknown`](../../../data-types.md) | Идентификатор чата ||
|| **MESSAGE***
[`unknown`](../../../data-types.md) | Текст сообщения ||
|#

## Примеры





- cURL (Webhook)

    // пример для cURL (Webhook)

- cURL (OAuth)

    // пример для cURL (OAuth)

- JS

    ```js
    BX24.callMethod(
        'imopenlines.crm.message.add',
        {
            CRM_ENTITY_TYPE: 'deal',
            CRM_ENTITY: 288,
            USER_ID: 12,
            CHAT_ID: 8773,
            MESSAGE: 'Текст сообщения'
        }, function(result) {
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

    // пример для php



## Ответ в случае успеха

Возвращает идентификатор отправленного сообщения.

```json
19880117
```

## Ответ в случае ошибки

### Возможные коды ошибок

#|
|| **Код** | **Описание** ||
|| **ACCESS_DENIED** | У пользователя нет доступа ||
|| **ERROR_ARGUMENT** | Один из аргументов не указан или указан неверно ||
|| **CHAT_NOT_IN_CRM** | Чат не относится к сущности CRM ||
|| **MESSAGE_ADD_ERROR** | Ошибка отправки сообщения ||
|#
