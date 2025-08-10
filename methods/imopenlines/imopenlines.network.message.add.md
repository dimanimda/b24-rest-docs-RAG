---
method: imopenlines.network.message.add
scope: imopenlines
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
curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"CODE":"ab515f5d85a8b844d484f6ea75a2e494","USER_ID":2,"MESSAGE":"message text","ATTACH":"","KEYBOARD":"","URL_PREVIEW":"Y","auth":"**put_access_token_here**"}' \
    https://**put_your_bitrix24_address**/rest/imopenlines.network.message.add
```

---

# Отправить сообщение пользователю от имени открытой линии imopenlines.network.message.add



Тут может не хватать некоторых данных — дополним в ближайшее время



> Scope: [`imopenlines, imbot`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `imopenlines.network.message.add` отправляет сообщение пользователю от имени открытой линии.

## Ограничения работы метода

- Можно отправлять сообщение не более одного раза для каждого пользователя в течение одной недели.
  Для аккаунта с лицензией Партнера (NFR) ограничений нет

- Можно использовать клавиатуру только для форматирования кнопки ссылки на стороннем сайте.

## Параметры метода



#|
||**Название**
`тип`|**Описание**||
|| **CODE***
[`unknown`](../../data-types.md) | Код Открытой линии, например `ab515f5d85a8b844d484f6ea75a2e494` ||
|| **USER_ID***[
    `int`](../../data-types.md) | ID получателя сообщения, например `2` ||
|| **MESSAGE***
[`string`](../../data-types.md) | Текст сообщения, доступно [форматирование](../../chats/messages/index.md) ||
|| **ATTACH**
[`unknown`](../../data-types.md) | Вложение, формат описан в статье [Как использовать вложения](../../chats/messages/attachments/index.md) ||
|| **KEYBOARD**
[`unknown`](../../data-types.md) | Клавиатура, информация об использовании в статье [Работа с клавиатурами](../../chats/messages/keyboards.md) ||
|| **URL_PREVIEW**
[`unknown`](../../data-types.md) | Преобразование ссылок в расширенные ссылки, по умолчанию установлено как `Y` ||
|#

## Примеры кода





- cURL (OAuth)

    ```bash
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"CODE":"ab515f5d85a8b844d484f6ea75a2e494","USER_ID":2,"MESSAGE":"message text","ATTACH":"","KEYBOARD":"","URL_PREVIEW":"Y","auth":"**put_access_token_here**"}' \
    https://**put_your_bitrix24_address**/rest/imopenlines.network.message.add
    ```

- JS

    ```javascript
    BX24.callMethod(
        'imopenlines.network.message.add',
        {
            'CODE': 'ab515f5d85a8b844d484f6ea75a2e494',
            'USER_ID': 2,
            'MESSAGE': 'message text',
            'ATTACH': '',
            'KEYBOARD': '',
            'URL_PREVIEW': 'Y'
        },
        function(result) {
            if(result.error()) {
                console.error("Error: ", result.error());
            } else {
                console.log("Success: ", result.data());
            }
        }
    );
    ```


- PHP

    ```php
    require_once('crest.php');

    $result = CRest::call(
        'imopenlines.network.message.add',
        [
            'CODE' => 'ab515f5d85a8b844d484f6ea75a2e494',
            'USER_ID' => 2,
            'MESSAGE' => 'message text',
            'ATTACH' => '',
            'KEYBOARD' => '',
            'URL_PREVIEW' => 'Y'
        ]
    );

    echo '<PRE>';
    print_r($result);
    echo '</PRE>';
    ```



## Ответ в случае успеха

```json
{
	"result": true
}
```

**Результат выполнения**: `true` в случае успеха или ошибка.

## Обработка ошибок

```json
{
    "error": "CODE_ERROR",
    "error_description": "Open Channel code is incorrect"
}
```



### Возможные коды ошибок

#|
|| **Код** | **Описание** ||
|| `CODE_ERROR` | Неверный код открытой линии ||
|| `USER_ID_EMPTY` | Отсутствует идентификатор пользователя ||
|| `MESSAGE_EMPTY` | Отсутствует текст сообщения ||
|| `ATTACH_ERROR ` | Объект вложения не прошел проверку ||
|| `ATTACH_OVERSIZE` | Превышен максимально допустимый размер вложения (30 Кб) ||
|| `KEYBOARD_ERROR` | Переданный объект клавиатуры не прошел проверку ||
|| `KEYBOARD_OVERSIZE` | Превышен максимально допустимый размер клавиатуры (30 Кб) ||
|| `USER_MESSAGE_LIMIT` | Превышен лимит сообщений для конкретного пользователя ||
|| `WRONG_REQUEST` | Что-то пошло не так ||
|#



## Продолжите изучение 

- [{#T}](../../chats/messages/keyboards.md)
- [{#T}](../../chats/messages/attachments/index.md)
- [{#T}](../../chats/messages/index.md)

