---
method: sonet_group.user.get.json
scope: sonet_group
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---

Auto-generated stub. Fill in params/returns/examples.

---

# Получить список участников группы sonet_group.user.get



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указаны типы параметров
- не указана обязательность параметров
- отсутствует ответ в случае ошибки
- нет примеров на др. языках





> Scope: [`sonet`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

## Описание

Метод возвращает массив участников группы соцсети, осуществляя вызов `CSocNetUserToGroup::GetList()`, при этом проверяются права на доступ текущего пользователя к группе. Метод не возвращает неактивных пользователей (уволенных сотрудников).

## Поля участников:

- **USER_ID** - ID пользователя.
- **ROLE** - роль пользователя в группе:
  - **SONET_ROLES_OWNER (A)** - владелец,
  - **SONET_ROLES_MODERATOR (E)** - модератор,
  - **SONET_ROLES_USER (K)** - пользователь.

## Параметры функции

#|
|| **Параметр** | **Описание** ||
|| **ID** | ID группы, участников которой необходимо получить. ||
|#



## Пример



- JS

    ```js
    // Получаем список участников группы соцсети с ID=15
    BX24.callMethod('sonet_group.user.get', {
        'ID': 15
    });
    ```






## Запрос:

```
https://mydomain.bitrix24.ru/rest/sonet_group.user.get.json?auth=67df5afc8ce59732e4a21ed3e336979f&ID=15
```

## Ответ:

>200 OK

```json
{"result":[{"USER_ID":"1","ROLE":"A"}]}
```
