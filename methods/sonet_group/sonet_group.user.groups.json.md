---
method: sonet_group.user.groups.json
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

# Получить список групп текущего пользователя sonet_group.user.groups



Тут может не хватать некоторых данных — дополним в ближайшее время







- нет параметров и типов параметров
- не указана обязательность параметров
- отсутствует ответ в случае ошибки
- нет примеров на др. языках





> Scope: [`sonet`](../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод возвращает массив групп соцсети текущего пользователя, осуществляя вызов `CSocNetUserToGroup::GetList()`.

## Поля каждой группы:

- **GROUP_ID** - ID группы соцсети.
- **GROUP_NAME** - название группы соцсети.
- **ROLE** - роль пользователя в группе:
  - **SONET_ROLES_OWNER (A)** - владелец,
  - **SONET_ROLES_MODERATOR (E)** - модератор,
  - **SONET_ROLES_USER (K)** - пользователь.

## Пример



- JS

    ```js
    // Получаем список групп текущего пользователя
    BX24.callMethod('sonet_group.user.groups', {});
    ```






## Запрос:

```
https://mydomain.bitrix24.ru/rest/sonet_group.user.groups.json?auth=52423d4a5f19f5f964f9b4e96a925cfa
```

## Ответ:

>200 OK

```json
{
"result": [
    {"GROUP_ID":"1","GROUP_NAME":"Маркетинг и реклама","ROLE":"A"},
    {"GROUP_ID":"3","GROUP_NAME":"Продажи","ROLE":"A"},
    {"GROUP_ID":"5","GROUP_NAME":"Отдых","ROLE":"A"},
    {"GROUP_ID":"7","GROUP_NAME":"Технологии","ROLE":"A"},
    {"GROUP_ID":"9","GROUP_NAME":"Фриланс","ROLE":"A"},
    {"GROUP_ID":"13","GROUP_NAME":"Test sonet group","ROLE":"A"},
    {"GROUP_ID":"15","GROUP_NAME":"Test sonet group","ROLE":"A"}
]
}
```
