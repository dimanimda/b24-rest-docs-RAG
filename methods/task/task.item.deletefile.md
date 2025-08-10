---
method: task.item.deletefile
scope: task
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"array","positional":["order","filter","select","params"]}
returns: {"type":"object"}
---

Auto-generated stub. Fill in params/returns/examples.

Example (curl):

```bash
curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"TASK_ID":3,"ATTACHMENT_ID":28}' \
    https://your-domain.ru/rest/**put_your_user_id_here**/**put_your_webhook_here**/task.item.deletefile
    ```

- cURL (OAuth)

    ```bash
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"TASK_ID":3,"ATTACHMENT_ID":28,"auth":"1iqeuq94vzfxu01bouws3voja2lsezfq"}' \
    https://your-domain.ru/rest/task.item.deletefile
```

---

# Удалить привязку файла к задаче task.item.deletefile

> Scope: [`task`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод удаляет привязку файла к задаче.

## Параметры метода

#|
|| **Название** | **Описание** ||
|| **auth** | Токен авторизации ||
|| **TASK_ID** | Идентификатор задачи ||
|| **ATTACHMENT_ID** | Идентификатор прикрепленного файла ||
|#

## Примеры кода





- cURL (Webhook)

    ```bash
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"TASK_ID":3,"ATTACHMENT_ID":28}' \
    https://your-domain.ru/rest/**put_your_user_id_here**/**put_your_webhook_here**/task.item.deletefile
    ```

- cURL (OAuth)

    ```bash
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"TASK_ID":3,"ATTACHMENT_ID":28,"auth":"1iqeuq94vzfxu01bouws3voja2lsezfq"}' \
    https://your-domain.ru/rest/task.item.deletefile
    ```

- JS

    ```js
    BX24.callMethod(
        'task.item.deletefile',
        {
            TASK_ID: 3,
            ATTACHMENT_ID: 28
        },
        function(result) {
            if(result.error())
                console.error(result.error());
            else
                console.log(result.data());
        }
    );
    ```

- PHP

    ```php
    require_once('crest.php');

    $result = CRest::call(
        'task.item.deletefile',
        [
            'TASK_ID' => 3,
            'ATTACHMENT_ID' => 28
        ]
    );

    echo '<PRE>';
    print_r($result);
    echo '</PRE>';
    ```



