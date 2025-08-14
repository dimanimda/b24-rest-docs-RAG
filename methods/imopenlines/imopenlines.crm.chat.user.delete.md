---
method: imopenlines.crm.chat.user.delete
scope: imopenlines
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id"],"properties":{"id":{"type":"integer"}}}
returns: {"type":"object"}
---


---

# Удалить пользователя из чата imopenlines.crm.chat.user.delete



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указаны типы параметров
- отсутствуют примеры
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки





> Scope: [`imopenlines`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод удаляет пользователя из чата сущности CRM.

## Параметры метода



#|
|| **Название**
`Тип` | **Описание** ||
|| **CRM_ENTITY_TYPE***
[`unknown`](../../../data-types.md) | Тип CRM сущности:
- lead
- deal
- company
- contact
 ||
|| **CRM_ENTITY***
[`unknown`](../../../data-types.md) | Идентификатор CRM сущности ||
|| **USER_ID***
[`unknown`](../../../data-types.md) | Идентификатор пользователя или бота, которого мы хотим добавить в чат ||
|| **CHAT_ID**
[`unknown`](../../../data-types.md) | Идентификатор чата. Если не указан, будет использован чат, последний привязанный к сущности CRM ||
|#

## Примеры






- cURL (Webhook)

    // пример для cURL (Webhook)

- cURL (OAuth)

    // пример для cURL (OAuth)

- JS

    ```js
    BX24.callMethod(
        'imopenlines.crm.chat.user.delete',
        {
            CRM_ENTITY_TYPE: 'deal',
            CRM_ENTITY: 288,
            USER_ID: 12,
            CHAT_ID: 8773
        },
        function(result) {
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

Возвращает CHAT_ID в случае успеха.

```js
8773
```

## Ответ в случае ошибки

### Возможные коды ошибок

#|
|| **Код** | **Описание** ||
|| **ACCESS_DENIED** | У текущего пользователя нет доступа ||
|| **CRM_CHAT_EMPTY_USER** | Не указан идентификатор пользователя ||
|| **CRM_CHAT_EMPTY_CRM_DATA** | Не указаны данные CRM ||
|| **IM_NOT_INSTALLED** | Не установлен модуль im ||
|| **CHAT_NOT_IN_CRM** | Чат не относится к сущности CRM ||
|| **CHAT_DELETE_USER_PERMISSION_DENIED** | Пользователь не имеет доступа к сущности CRM ||
|| **CRM_CHAT_USER_NOT_ACTIVE** | Удаляемый пользователь не активен ||
|#
