---
method: crm.timeline.comment.update
scope: crm
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id","fields"],"properties":{"id":{"type":"integer"},"fields":{"type":"object"}}}
returns: {"type":"object"}
---

Auto-generated stub. Fill in params/returns/examples.

Example (curl):

```bash
- cURL (Webhook)

    ```bash
    curl -X POST -H "Content-Type: application/json" -H "Accept: application/json" -d '{"ID":525,"FIELDS":{"TEMPLATE_DATA":["bp-379.bpt","base64_encoded_content_here"]}}' https://**put_your_bitrix24_address**/rest/**put_your_user_id_here**/**put_your_webbhook_here**/bizproc.workflow.template.update
    ```

- cURL (OAuth)

    ```bash
    curl -X POST -H "Content-Type: application/json" -H "Accept: application/json" -d '{"ID":525,"FIELDS":{"TEMPLATE_DATA":["bp-379.bpt","base64_encoded_content_here"]},"auth":"**put_access_token_here**"}' https://**put_your_bitrix24_address**/rest/bizproc.workflow.template.update
    ```

- PHP

    ```php
    require_once('crest.php');

    $result = CRest::call(
        'bizproc.workflow.template.update',
        [
            'ID' => 525,
            'FIELDS' => [
                'TEMPLATE_DATA' => [
                    'bp-379.bpt',
                    'base64_encoded_content_here'
                ]
            ]
        ]
    );

    echo '<PRE>';
    print_r($result);
    echo '</PRE>';
    ```

{% endlist %}


Чтобы очистить поле, передайте пустое значение.

{% list tabs %}

- JS

    ```js
    BX24.callMethod(
        "crm.item.update",
        {
            id: 9,
            entityTypeId: 177,
            fields: {
                ufCrm_7_1739432938: [ // пустое значение для удаления файла из поля
                ]
            }
        }
    );
    ```

- cURL (Webhook)

    ```bash
    curl -X POST -H "Content-Type: application/json" -H "Accept: application/json" -d '{"id":9,"entityTypeId":177,"fields":{"ufCrm_7_1739432938":[]}}' https://**put_your_bitrix24_address**/rest/**put_your_user_id_here**/**put_your_webbhook_here**/crm.item.update
    ```

- cURL (OAuth)

    ```bash
    curl -X POST -H "Content-Type: application/json" -H "Accept: application/json" -d '{"id":9,"entityTypeId":177,"fields":{"ufCrm_7_1739432938":[]},"auth":"**put_access_token_here**"}' https://**put_your_bitrix24_address**/rest/crm.item.update
    ```

- PHP

    ```php
    require_once('crest.php');

    $result = CRest::call(
        'crm.item.update',
        [
            'id' => 9,
            'entityTypeId' => 177,
            'fields' => [
                'ufCrm_7_1739432938' => []
            ]
        ]
    );

    echo '<PRE>';
    print_r($result);
    echo '</PRE>';
    ```

{% endlist %}

## Обновить файл во множественном поле

Если поле множественное, в поле хранится массив из `ID` файлов. При обновлении множественных полей типа «файл» учитывайте особенности методов.

### crm.item.update — обновить поле в объекте CRM

Для обновления полей в объектах CRM используйте универсальный метод [crm.item.update](../crm/universal/crm-item-update.md).

{% note info "" %}

Не рекомендуется использовать методы [crm.deal.update](../crm/deals/crm-deal-update.md), [crm.lead.update](../crm/leads/crm-lead-update.md), [crm.contact.update](../crm/contacts/crm-contact-update.md), [crm.company.update](../crm/companies/crm-company-update.md) для обновления файловых полей.

{% endnote %}

#### 1. Получить ID файлов в поле

Перед обновлением поля получите `ID` текущих файлов, чтобы сохранить их. Можно использовать метод [crm.item.get](../crm/universal/crm-item-get.md), он вернет все поля элемента, или метод [crm.item.list](../crm/universal/crm-item-list.md) с выбором только нужного поля типа «файл» в `select`.

{% list tabs %}

- JS

    ```js
    BX24.callMethod(
        'crm.item.list',
        {
            entityTypeId: 177,
            select: [
                "ufCrm_7_1739432938", // поле типа «файл»
            ],
            filter: {
                "id": "29",
            },
        }
    );
    ```

- cURL (Webhook)

    ```bash
    curl -X POST -H "Content-Type: application/json" -H "Accept: application/json" -d '{"entityTypeId":177,"select":["ufCrm_7_1739432938"],"filter":{"id":"29"}}' https://**put_your_bitrix24_address**/rest/**put_your_user_id_here**/**put_your_webbhook_here**/crm.item.list
    ```

- cURL (OAuth)

    ```bash
    curl -X POST -H "Content-Type: application/json" -H "Accept: application/json" -d '{"entityTypeId":177,"select":["ufCrm_7_1739432938"],"filter":{"id":"29"},"auth":"**put_access_token_here**"}' https://**put_your_bitrix24_address**/rest/crm.item.list
    ```

- PHP

    ```php
    require_once('crest.php');

    $result = CRest::call(
        'crm.item.list',
        [
            'entityTypeId' => 177,
            'select' => [
                'ufCrm_7_1739432938' // поле типа «файл»
            ],
            'filter' => [
                'id' => '29'
            ]
        ]
    );

    echo '<PRE>';
    print_r($result);
    echo '</PRE>';
    ```

{% endlist %}

В ответе получим информацию по файлам: `ID` и ссылки на скачивание.

```json
{
    "result": {
        "items": [
            {
                "ufCrm_7_1739432938": [
                    {
                        "id": 30577, // id файла, используем для сохранения файла в поле
                        "url": "https://your-domain.bitrix24.com/bitrix/services/main/ajax.php?action=crm.controller.item.getFile&SITE_ID=s1&entityTypeId=177&id=29&fieldName=UF_CRM_7_1739432938&fileId=30577",
                        "urlMachine": "https://your-domain.bitrix24.com/rest/crm.controller.item.getFile.json?auth=c2a8ad670000071b006e2cf200000001f0f107061147e530dda74d4e556cae7642992c&token=crm%7CYWN0aW9uPWNybS5jb25ZTU1NmNhZTc2NDI5OTJjIg%3D%3D.cR012fYj2JpQSObAORU0G8ZDvVc1Osnv0foUpBpaJVY%3D"
                    },
                    {
                        "id": 30581, // id файла, используем для сохранения файла в поле
                        "url": "https:///your-domain.bitrix24.com/bitrix/services/main/ajax.php?action=crm.controller.item.getFile&SITE_ID=s1&entityTypeId=177&id=29&fieldName=UF_CRM_7_1739432938&fileId=30581",
                        "urlMachine": "https:///your-domain.bitrix24.com/rest/crm.controller.item.getFile.json?auth=c2a8ad670000071b006e2cf200000001f0f107061147e530dda74d4e556cae7642992c&token=crm%7CYWNNmNhZTc2NDI5OTJjIg%3D%3D.l6GB1qKENuwQYtQHse4GK1r%2F3zps%2FQdh%2BlFsopOuJdU%3D"
                    }
                ]
            }
        ]
    },
}
```

#### 2. Обновить файлы в поле

В зависимости от переданных параметров метод [crm.item.update](../crm/universal/crm-item-update.md) выполняет операции:

- загрузки новых файлов — передавайте контент в формате [Bаse64](./how-to-upload-files.md),

- удаления старых файлов — не передавайте `ID` этих файлов в массиве,

- сохранения файлов — передавайте `ID` в массиве файлов.

Файлы будут сохранены, если их `ID` перечислены в запросе. Файлы будут удалены, если их `ID` отсутствует в запросе.

{% list tabs %}

- JS

    ```js
    BX24.callMethod(
        "crm.item.update",
        {
            id: 9,
            entityTypeId: 177,
            fields: {
                ufCrm_7_1739432938: [
                    {
                        id: 30577 // id старого файла, который будет сохранен в поле
                    },
                    [
                        "myNewFile.pdf", // Имя нового файла
                        "base64_encoded_content_here" // Контент нового файла в формате base64
                    ]
                ]
            }
        }
    );
    ```

- cURL (Webhook)

    ```bash
    curl -X POST -H "Content-Type: application/json" -H "Accept: application/json" -d '{"id":9,"entityTypeId":177,"fields":{"ufCrm_7_1739432938":[{"id":30577},["myNewFile.pdf","base64_encoded_content_here"]]}}' https://**put_your_bitrix24_address**/rest/**put_your_user_id_here**/**put_your_webbhook_here**/crm.item.update
    ```

- cURL (OAuth)

    ```bash
    curl -X POST -H "Content-Type: application/json" -H "Accept: application/json" -d '{"id":9,"entityTypeId":177,"fields":{"ufCrm_7_1739432938":[{"id":30577},["myNewFile.pdf","base64_encoded_content_here"]]},"auth":"**put_access_token_here**"}' https://**put_your_bitrix24_address**/rest/crm.item.update
    ```

- PHP

    ```php
    require_once('crest.php');

    $result = CRest::call(
        'crm.item.update',
        [
            'id' => 9,
            'entityTypeId' => 177,
            'fields' => [
                'ufCrm_7_1739432938' => [
                    [
                        'id' => 30577 // id старого файла, который будет сохранен в поле
                    ],
                    [
                        'myNewFile.pdf', // Имя нового файла
                        'base64_encoded_content_here' // Контент нового файла в формате base64
                    ]
                ]
            ]
        ]
    );

    echo '<PRE>';
    print_r($result);
    echo '</PRE>';
    ```

{% endlist %}

Чтобы удалить все файлы, передавайте пустой массив в поле.

### crm.timeline.comment.update — обновить файлы в комментарии

Для обновления файлов в комментариях элементов CRM используйте метод [crm.timeline.comment.update](../crm/timeline/comments/crm-timeline-comment-update.md). Старые файлы всегда удаляются при обновлении значения поля. Новые файлы загружайте в поле в формате [Base64](./how-to-upload-files.md).

Чтобы удалить все файлы, передавайте пустой массив в поле `FILES`.

{% list tabs %}

- JS

    ```js
    BX24.callMethod(
        "crm.timeline.comment.update",
        {
            id: 62589,
            fields: {
                "COMMENT": "Comment was changed",
                "FILES": [ // пустое значение для удаления файлов
                ]
            }
        }
    );
    ```

- cURL (Webhook)

    ```bash
    curl -X POST -H "Content-Type: application/json" -H "Accept: application/json" -d '{"id":62589,"fields":{"COMMENT":"Comment was changed","FILES":[]}}' https://**put_your_bitrix24_address**/rest/**put_your_user_id_here**/**put_your_webbhook_here**/crm.timeline.comment.update
    ```

- cURL (OAuth)

    ```bash
    curl -X POST -H "Content-Type: application/json" -H "Accept: application/json" -d '{"id":62589,"fields":{"COMMENT":"Comment was changed","FILES":[]},"auth":"**put_access_token_here**"}' https://**put_your_bitrix24_address**/rest/crm.timeline.comment.update
```
