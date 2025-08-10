---
method: messageservice.sender.delete
scope: messageservice
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id"],"properties":{"id":{"type":"integer"}}}
returns: {"type":"object"}
---

Auto-generated stub. Fill in params/returns/examples.

---

# Удалить СМС-провайдер или провайдер сообщений messageservice.sender.delete



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указаны типы параметров
- не указана обязательность параметров
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки
- Нет примеров на др. языках





> Scope: [`messageservice`](../scopes/permissions.md)
>
> Кто может выполнять метод: администратор

Метод удаляет зарегистрированный ранее провайдера сообщений. Нельзя удалить провайдер зарегистрированный другим приложением или другим вебхуком.

#|
|| **Параметр** | **Описание** ||
|| **CODE** | Идентификатор провайдера. ||
|#



## Пример



- JS

    ```js
    function uninstallProvider(provider)
    {
        BX24.callMethod(
            'messageservice.sender.delete',
            {
                'CODE': provider
            },
            function(result)
            {
                if(result.error())
                    alert('Error: ' + result.error());
                else
                    alert("Успешно: " + result.data());
            }
        );
    }
    ```




