---
method: task.item.approve
scope: task
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"array","positional":["order","filter","select","params"]}
returns: {"type":"object"}
---


---

# Перевести ожидающую контроля задачу в статус «завершена» task.item.approve

> Scope: [`task`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод переводит задачу, ожидающую контроля, в статус «завершена».



Метод устарел и не поддерживается. Рекомендуется использовать методы [tasks.task.*](../../index.md).



## Параметры метода

#|
|| **Название** | **Описание** ||
|| **TASKID** | Идентификатор задачи ||
|#

## Примеры кода





- cURL (Webhook)

    ```bash
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"TASKID":13}' \
    https://**put_your_bitrix24_address**/rest/**put_your_user_id_here**/**put_your_webhook_here**/task.item.approve
    ```

- cURL (OAuth)

    ```bash
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"TASKID":13,"auth":"**put_access_token_here**"}' \
    https://**put_your_bitrix24_address**/rest/task.item.approve
    ```

- JS

    ```js
    BX24.callMethod(
        'task.item.approve',
        [13],
        function(result)
        {
            console.info(result.data());
            console.log(result);
        }
    );
    ```

- PHP

    ```php
    require_once('crest.php');

    $result = CRest::call(
        'task.item.approve',
        [
            'TASKID' => 13
        ]
    );

    echo '<PRE>';
    print_r($result);
    echo '</PRE>';
    ```




