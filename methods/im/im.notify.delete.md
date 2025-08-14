---
method: im.notify.delete
scope: im
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id"],"properties":{"id":{"type":"integer"}}}
returns: {"type":"object"}
---


---

# Удалить уведомления im.notify.delete



Тут может не хватать некоторых данных — дополним в ближайшее время







- нужны правки под стандарт написания
- не указаны типы параметров
- отсутствуют примеры
- не прописаны ссылки на несозданные ещё страницы





> Scope: [`im`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `im.notify.delete` удаляет уведомление.

#|
|| **Параметр** | **Пример** | **Описание** | **Ревизия** ||
|| **ID^*^**
[`unknown`](../../data-types.md) | `123` | Идентификатор уведомления | 18 ||
|| **TAG^*^**
[`unknown`](../../data-types.md) | `TEST` | Тег уведомления, уникальный в рамках системы. | 18 ||
|| **SUB_TAG^*^**
[`unknown`](../../data-types.md) | `SUB`\|`TEST` | Дополнительный тег, без проверки на уникальность | 18 ||
|#





Указывать нужно **один из трех** обязательных параметров на выбор: `ID` (идентификатор уведомления), `TAG` (тег уведомления) или `SUB_TAG` (дополнительный тег).



## Примеры





- PHP

    ```php
    $result = restCommand(
        'im.notify.delete',
        Array(
            'ID' => 13,
            'TAG' => 'TEST',
            'SUB_TAG' => 'SUB|TEST'
        ),
        $_REQUEST[
            "auth"
        ]
    );
    ```

- PHP (B24PhpSdk)

    ```php
    try {
        $notificationId = 123; // Replace with actual notification ID
        $notificationTag = null; // Replace with actual notification tag if needed
        $subTag = null; // Replace with actual sub tag if needed

        $result = $serviceBuilder->getIMScope()
            ->notify()
            ->delete($notificationId, $notificationTag, $subTag);

        if ($result->isSuccess()) {
            print($result->getCoreResponse()->getResponseData()->getResult()[0]);
        } else {
            print("Failed to delete notification.");
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

**Результат выполнения**: `true` или ошибка.

## Ответ в случае ошибки

```json
{
    "error": "PARAMS_ERROR",
    "error_description": "Ошибка удаления уведомления"
}
```

### Описание ключей**:

- `error` – код возникшей ошибки
- `error_description` – краткое описание возникшей ошибки

### Возможные коды ошибок

#|
|| **Код** | **Описание** ||
|| **PARAMS_ERROR** | Ошибка удаления уведомления ||
|#

## Ссылки по теме

- [{#T}](../messages/attachments/index.md)
