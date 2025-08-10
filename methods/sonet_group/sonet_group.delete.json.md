---
method: sonet_group.delete.json
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

# Удалить группу соцсети sonet_group.delete



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указаны типы параметров
- не указана обязательность параметров
- отсутствует ответ в случае ошибки
- нет примеров на др. языках





> Scope: [`sonet`](../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Удаляет группу соцсети. Для осуществления операции текущий пользователь должен быть либо владельцем группы, либо иметь права администратора соцсети.

## Параметры функции

#|
|| **Параметр** | **Описание** ||
|| **GROUP_ID** | ID группы, которую необходимо удалить. ||
|#



В случае успешного изменения группы возвращает **true**, иначе - текст ошибки.

## Пример



- JS

    ```js
    // Удаляем группы соцсети с ID=11

    BX24.callMethod('sonet_group.delete', {
        'GROUP_ID': 11
    });
    ```






## Запрос:

```http
https://mydomain.bitrix24.ru/rest/sonet_group.delete.json?auth=803f65e30340ff39703f8061c8b63a10&GROUP_ID=11
```

## Ответ:

>200 OK

```json
{"result":true}
```
