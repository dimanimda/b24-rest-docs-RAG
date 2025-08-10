---
method: user.userfield.file.get
scope: user
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id"],"properties":{"id":{"type":"integer"}}}
returns: {"type":"object"}
---

Auto-generated stub. Fill in params/returns/examples.

---

# Получить файл из пользовательского поля user.userfield.file.get



страница скрыта из меню, метод не работает

Тут может не хватать некоторых данных — дополним в ближайшее время







- возможно, параметры или поля нужно расписать в таблице
- не указана обязательность параметров
- отсутствуют примеры на др.языках
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки
 




> Scope: [`user.userfield`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод позволяет получить файл из пользовательского поля.

## Пример

Есть поле `UF_USR_1604998606834` типа файл. Вызвав метод [user.current](../user-current.md) можно получить файл в этом поле у текущего пользователя, где:
- **showUrl** - это URL, который покажет файл в браузере, если пользователь авторизован;
- **downloadData** - данные, которые нужно подавать на этот метод.

```
[UF_USR_1604998606834] => Array
(
    [id] => 774
    [showUrl] => /bitrix/services/main/ajax.php?action=rest.file.get&SITE_ID=s1&entity=USER&id=1&field=UF_USR_1604998606834&value=774
    [downloadData] => Array
        (
            [id] => 1
            [field] => UF_USR_1604998606834
            [value] => 774
        )
)
```

Запрос вебхуком:



- URL-запрос

    ```http
    /rest/1/a2ebx1rfao5pq5cr/user.userfield.file.get?id=1&field=UF_USR_1604998606834&value=774
    ```





Метод возвращает файл как контент на загрузку, а не json/xml.


