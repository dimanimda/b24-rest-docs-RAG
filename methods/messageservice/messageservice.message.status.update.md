---
method: messageservice.message.status.update
scope: messageservice
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id","fields"],"properties":{"id":{"type":"integer"},"fields":{"type":"object"}}}
returns: {"type":"object"}
---


---

# Обновить статус доставки сообщения messageservice.message.status.update



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указаны типы параметров
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки
- Нет примеров на др. языках





> Scope: [`messageservice`](../scopes/permissions.md)
>
> Кто может выполнять метод: администратор

Метод позволяет задать статус доставки указанного сообщения, отправленного с помощью провайдера сообщений.

#|
|| **Параметр** | **Описание** ||
|| **CODE^*^** | Код провайдера.  ||
|| **MESSAGE_ID^*^** | Идентификатор сообщения.  ||
|| **STATUS** | Статус сообщения. Обязательный. Допустимые статусы:
- `delivered` - доставлено
- `undelivered` - не доставлено
- `failed` - ошибка доставки ||
|#



### Пример



- JS

    ```js
    BX24.callMethod(
        'messageservice.message.status.update',
        {
            CODE: 'provider1',
            message_id: 1,
            status: 'delivered'
        },
        function(result)
        {
            if(result.error())
                alert("Ошибка: " + result.error());
            else
                alert("Успешно: " + result.data());
        }
    );
    ```






