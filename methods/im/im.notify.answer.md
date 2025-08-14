---
method: im.notify.answer
scope: im
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---


---

# Ответить на уведомление, которое поддерживает быстрый ответ im.notify.answer



Тут может не хватать некоторых данных — дополним в ближайшее время







- нужны правки под стандарт написания
- не указаны типы параметров
- отсутствуют примеры





> Scope: [`im`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `im.notify.answer` даёт ответ на уведомление, поддерживающее быстрый ответ.

#|
|| **Параметр** | **Пример** | **Описание** | **Ревизия** ||
|| **ID^*^**
[`unknown`](../../data-types.md) | `270` | Идентификатор уведомления, поддерживающего быстрый ответ | `30` ||
|| **ANSWER_TEXT^*^**
[`unknown`](../../data-types.md) | `'Hello'` | Текст быстрого ответа | `30` ||
|#



## Примеры



- JS

    ```js
    BX24.callMethod(
        'im.notify.answer',
        {
            ID: 270,
            ANSWER_TEXT: 'Hello'
        },
        res => {
            if (res.error())
            {
            console.error(result.error().ex);
            }
            else
            {
            console.log(res.data())
            }
        }
    )
    ```

- PHP (B24PhpSdk)

    ```php
    try {
        $notificationId = 123; // Replace with your actual notification ID
        $answerText = "This is an answer text"; // Replace with your actual answer text

        $result = $serviceBuilder
            ->getIMScope()
            ->notify()
            ->answer($notificationId, $answerText);

        if ($result->isSuccess()) {
            print($result->getCoreResponse()->getResponseData()->getResult()[0]);
        } else {
            print("Failed to send answer.");
        }
    } catch (Throwable $e) {
        print("An error occurred: " . $e->getMessage());
    }
    ```





## Ответ в случае успеха

```json
{
    "result_message": [
        "Ваш ответ успешно отправлен."
    ]
}
```

Возвращается массив сообщений на Ваш ответ.

Пример ответа, если передать идентификатор уведомления, не поддерживающего быстрый ответ:

```json
{
    "result_message": false
}
```

## Ответ в случае ошибки

```json
{
    "error":"NOTIFY_ID_ERROR",
    "error_description":"Notification ID can't be empty"
}
```

### Описание ключей

- `error` – код возникшей ошибки
- `error_description` – краткое описание возникшей ошибки

### Возможные коды ошибок

#|
|| **Код** | **Описание** ||
|| **ID_ERROR** | Не передан параметр `ID` или он не является числом ||
|| **ANSWER_TEXT_ERROR** | Не передан параметр `ANSWER_TEXT` или он не является непустой строкой ||
|#
