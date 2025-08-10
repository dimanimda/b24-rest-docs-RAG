---
method: sonet_group.user.invite.json
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

# Пригласить пользователей в группу sonet_group.user.invite



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указаны типы параметров
- не указана обязательность параметров
- отсутствует ответ в случае ошибки
- нет примеров на др. языках





> Scope: [`sonet`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

## Описание

Метод выполняет приглашение пользователей в группу соцсети от лица текущего пользователя, при этом проверяются права на доступ текущего пользователя к группе.

## Возвращает массив ID пользователей, успешно приглашенных в группу.

## Параметры

#|
|| **Параметр** | **Описание** ||
|| **GROUP_ID** | ID группы, в которую происходит приглашение. ||
|| **USER_ID** | ID пользователя (или массив ID пользователей), который приглашается (которые приглашаются) в группу. ||
|| **MESSAGE** | Текст приглашения. ||
|#



## Пример



- JS

    ```js
    // Приглашаем пользователя с ID=3 в группу соцсети с ID=15
    BX24.callMethod('sonet_group.user.invite', {
        'GROUP_ID': 15,
        'USER_ID': 3,
        'MESSAGE': 'Invitation'
    });
    ```







## Запрос:

```
https://mydomain.bitrix24.ru/rest/sonet_group.user.invite.json?auth=52423d4a5f19f5f964f9b4e96a925cfa&GROUP_ID=15&USER_ID=3&MESSAGE=Invitation
```

## Ответ:

>200 OK

```json
{"result":["3"]}
```
