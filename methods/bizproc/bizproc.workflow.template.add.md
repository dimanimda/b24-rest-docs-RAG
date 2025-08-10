---
method: bizproc.workflow.template.add
scope: bizproc
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["fields"],"properties":{"fields":{"type":"object"}}}
returns: {"type":"object"}
---

Auto-generated stub. Fill in params/returns/examples.

Example (curl):

```bash
В PHP можно использовать функцию [base64_encode](https://www.php.net/manual/en/function.base64-encode.php). Код читает файл с диска и кодирует его в Bаse64.

```PHP
$filePath = 'path/to/your/file.jpg'; // Путь к файлу
$fileData = file_get_contents($filePath); // Читаем файл
$base64 = base64_encode($fileData); // Кодируем в base64
```

В результате кодирования файла получим строку вида `YmFzZSDRgtC10YHRgg==`. Чем больше размер файла, тем длиннее будет строка.

## Как передать строку с Bаse64 в поле

В Битрикс24 есть 4 особенности загрузки файлов.


1. Передавайте строку с Bаse64 в поле `file`, если используете методы:

   - [documentgenerator.template.add](../document-generator/templates/document-generator-template-add.md)

   - [crm.documentgenerator.template.add](../crm/document-generator/templates/crm-document-generator-template-add.md)

    {% list tabs %}

    - JS
    
        ```JavaScript
        BX24.callMethod(
            'documentgenerator.template.add',
            {
                fields: {
                    name: "Пример шаблона",
                    file: "base64_encoded_content_here", // Контент файла, закодированный в base64
                    code: "example_template_code"
                }
            }
        );
        ```

    - PHP
    
        ```php
        require_once('crest.php');

        $result = CRest::call(
            'documentgenerator.template.add',
            [
                'fields' => [
                    'name' => 'Пример шаблона',
                    'file' => 'base64_encoded_content_here', // Контент файла, закодированный в base64
                    'code' => 'example_template_code' 
                ]
            ]
        );
        ```

    - cURL (OAuth)

        ```bash
        curl -X POST \
        -H "Content-Type: application/json" \
        -H "Accept: application/json" \
        -d '{"fields":{"name":"Пример шаблона","file":"base64_encoded_content_here","code":"example_template_code"},"auth":"**put_access_token_here**"}' \
        https://**put_your_bitrix24_address**/rest/documentgenerator.template.add
        ```

    - cURL (Webhook)

        ```bash
        curl -X POST \
        -H "Content-Type: application/json" \
        -H "Accept: application/json" \
        -d '{"fields":{"name":"Пример шаблона","file":"base64_encoded_content_here","code":"example_template_code"}}' \
        https://**put_your_bitrix24_address**/rest/**put_your_user_id_here**/**put_your_webbhook_here**/documentgenerator.template.add
        ```

    {% endlist %}

2. Передавайте массив из имени файла и строки с Bаse64, если используете методы:

   - [crm.timeline.comment.add](../crm/timeline/comments/crm-timeline-comment-add.md) — в поле `FILES`

   - [crm.item.add](../crm/universal/crm-item-add.md) — в поля типа «файл» объектов CRM

   - [log.blogpost.add](../log/log-blogpost-add.md) — в поле `FILES`

   - [lists.element.add](../lists/elements/lists-element-add.md) — в свойства типа «файл»

   - [entity.item.add](../entity/items/entity-item-add.md) — в свойства типа «файл»

   - [bizproc.workflow.template.add](../bizproc/template/bizproc-workflow-template-add.md) — в поле `TEMPLATE_DATA`


    {% list tabs %}

    - JS
    
        ```JavaScript
        BX24.callMethod(
            'bizproc.workflow.template.add',
            {
                DOCUMENT_TYPE: ['lists', 'BizprocDocument', 'iblock_164'],
                NAME: 'App template', 
                // Контент файла с шаблоном бизнес-процесса
                TEMPLATE_DATA: [   
                    "bp-379.bpt", // Первый элемент массива - имя файла
                    "base64_encoded_content_here" // Второй элемент массива - контент файла, закодированный в base64
                ]
            }
        );
        ```

    - PHP
    
        ```php
        require_once('crest.php');

        $result = CRest::call(
            'bizproc.workflow.template.add',
            [
                'DOCUMENT_TYPE' => ['lists', 'BizprocDocument', 'iblock_164'],
                'NAME' => 'App template',
                // Контент файла с шаблоном бизнес-процесса
                'TEMPLATE_DATA' => [
                    'bp-379.bpt', // Имя файла
                    'base64_encoded_content_here' // Контент файла, закодированный в base64
                ]
            ]
        );
        ```

    - cURL (OAuth)

        ```bash
        curl -X POST \
        -H "Content-Type: application/json" \
        -H "Accept: application/json" \
        -d '{"DOCUMENT_TYPE":["lists","BizprocDocument","iblock_164"],"NAME":"App template","TEMPLATE_DATA":["bp-379.bpt","base64_encoded_content_here"],"auth":"**put_access_token_here**"}' \
        https://**put_your_bitrix24_address**/rest/bizproc.workflow.template.add
```
