---
method: im.notify.read
scope: im
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---


---

# Прочитать уведомление или все уведомления с указанного im.notify.read



Тут может не хватать некоторых данных — дополним в ближайшее время







- нужны правки под стандарт написания
- не указаны типы параметров
- отсутствуют примеры
- отсутствует ответ в случае ошибки





> Scope: [`im`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `im.notify.read` устанавливает отмену о прочитанных уведомлениях.

## Параметры

#|
|| **Параметр** | **Пример** | **Описание** | **Ревизия** ||
|| **ID^*^**
[`unknown`](../../data-types.md) | `17` | Идентификатор уведомления | 18 ||
|| **ONLY_CURRENT**
[`unknown`](../../data-types.md) | `N` | Прочитать только указанное уведомление | 18 ||
|#



- Если параметр `ONLY_CURRENT` передан как `Y`, отметка о прочтении будет установлена только для указанного `ID`. Иначе отметка проставится для уведомления, равным или больше указанного `ID`.

## Примеры



- cURL

    // пример для cURL

- JS

    ```js
    BX24.callMethod(
        'im.notify.read',
        {
            'ID': 17,
        },
        function(result){
            if(result.error())
            {
                console.error(result.error().ex);
            }
            else
            {
                console.log(result.data());
            }
        }
    );
    ```

- PHP

    

    ```php
    $result = restCommand(
        'im.notify.read',
        Array(
            'ID' => '17'
        ),
        $_REQUEST[
            "auth"
        ]
    );    
    ```

- PHP (B24PhpSdk)

    ```php       
    try {
        $notificationIds = [1, 2, 3]; // Example notification IDs
        $result = $serviceBuilder
            ->getIMScope()
            ->notify()
            ->markMessagesAsUnread($notificationIds);
        if ($result->isSuccess()) {
            print_r($result->getCoreResponse()->getResponseData()->getResult());
        } else {
            print("Failed to mark messages as unread.");
        }
    } catch (Throwable $e) {
        print("An error occurred: " . $e->getMessage());
    }
    ```





## Ответ в случае успеха

```json
{
    "result": true
}        
```
