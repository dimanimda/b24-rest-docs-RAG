---
method: sonet_group.update.json
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

# Изменить параметры группы соцсети sonet_group.update



Тут может не хватать некоторых данных — дополним в ближайшее время







- нет таблицы параметров
- не указаны типы параметров
- не указана обязательность параметров
- отсутствует ответ в случае ошибки
- нет примеров на др. языках





> Scope: [`sonet`](../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод изменяет параметры группы соцсети, используя метод API `CSocNetGroup::Update()`. Для осуществления операции текущий пользователь должен быть либо владельцем группы, либо иметь права администратора соцсети.

## Параметры:

Получает в параметрах все поля, необходимые для работы метода `CSocNetGroup::Update()`, а также `GROUP_ID` - ID группы, которую необходимо изменить.

В случае успешного изменения группы, возвращает ее ID, иначе - текст ошибки.

## Пример



- JS

    ```js
    // Изменяем название группы соцсети с ID=11 на 'Test sonet group XXX'
    BX24.callMethod('sonet_group.update', {
        'GROUP_ID': 11,
        'NAME': 'Test sonet group XXX'
    });
    ```






## Запрос:

```
https://mydomain.bitrix24.ru/rest/sonet_group.update.json?auth=803f65e30340ff39703f8061c8b63a10&GROUP_ID=11&NAME=Test%20sonet%20group%20XXX
```

## Ответ:

>200 OK

```json
{"result":11}
```
