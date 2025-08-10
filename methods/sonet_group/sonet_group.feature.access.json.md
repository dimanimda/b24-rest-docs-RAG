---
method: sonet_group.feature.access.json
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

# Проверить права текущего пользователя sonet_group.feature.access



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указаны типы параметров
- не указана обязательность параметров
- отсутствует ответ в случае ошибки
- нет примеров на др. языках





> Scope: [`sonet`](../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Проверяет, имеет ли текущий пользователь право на совершение операции в группе соцсети, осуществляя вызов функции `CSocNetFeaturesPerms::CurrentUserCanPerformOperation()`.

## Запрос:

```http
https://mydomain.bitrix24.ru/rest/sonet_group.feature.access.json?auth=52423d4a5f19f5f964f9b4e96a925cfa&GROUP_ID=1&FEATURE=blog&OPERATION=write_post
```

## Ответ:

>200 OK

```json
{"result":true}
```

## Параметры

#|
|| **Параметр** | **Описание** ||
|| **GROUP_ID** | ID группы соцсети. ||
|| **FEATURE** | Символьный код функционала. ||
|| **OPERATION** | Символьный код операции. ||
|#



Возвращает **true**, если пользователь имеет право на совершение операции, **false** - если не имеет и ошибку в случае некорректных параметров.



Коды операций и функционала смотрите в описании метода `CanPerformOperation`.



## Пример



- JS

    ```js
    // Получаем список групп текущего пользователя

    BX24.callMethod('sonet_group.feature.access', {
        'GROUP_ID': 1,
        'FEATURE': 'blog',
        'OPERATION': 'write_post'
    });
    ```





