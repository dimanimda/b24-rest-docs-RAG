---
method: sonet_group.user.request
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

# Отправить запрос на вступление в группу sonet_group.user.request



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указаны типы параметров
- не указана обязательность параметров
- отсутствует ответ в случае ошибки
- нет примеров на др. языках





> Scope: [`sonet`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

## Описание

Метод отправляет запрос текущего пользователя на вступление в группу соцсети, при этом проверяются права на доступ текущего пользователя к группе. Если группа открыта для свободного вступления, пользователь сразу становится ее участником.

## Возвращает `true`, если запрос произошел успешно, или текст ошибки.

## Параметры

#|
|| **Параметр** | **Описание** ||
|| **GROUP_ID** | ID группы, в которую отправляется запрос. ||
|| **MESSAGE** | Текст запроса. ||
|#



## Пример



- JS

    ```js
    // Отправляем запрос на вступление в группу с ID=17
    BX24.callMethod('sonet_group.user.request', {
        'GROUP_ID': 17,
        'MESSAGE': 'Request'
    });
    ```






## Запрос:

```
https://mydomain.bitrix24.ru/rest/sonet_group.user.request.json?auth=52423d4a5f19f5f964f9b4e96a925cfa&GROUP_ID=17&MESSAGE=Request
```

## Ответ:

>200 OK

```json
{"result":true}
```
