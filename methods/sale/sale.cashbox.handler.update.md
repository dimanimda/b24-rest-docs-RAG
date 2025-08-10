---
method: sale.cashbox.handler.update
scope: sale
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
curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"ID":1,"FIELDS":{"NAME":"Моя REST-касса с новым именем","SORT":200,"SETTINGS":{"PRINT_URL":"http://setagaya.bx/receipt_print.php","CHECK_URL":"http://setagaya.bx/receipt_check.php","CONFIG":{"AUTH":{"LABEL":"Авторизация","ITEMS":{"LOGIN":{"TYPE":"STRING","REQUIRED":"Y","LABEL":"Логин"},"PASSWORD":{"TYPE":"STRING","REQUIRED":"Y","LABEL":"Пароль"}}},"COMPANY":{"LABEL":"Данные об организации","ITEMS":{"INN":{"TYPE":"STRING","REQUIRED":"Y","LABEL":"ИНН организации"}}},"INTERACTION":{"LABEL":"Настройки взаимодействия с кассой","ITEMS":{"MODE":{"TYPE":"ENUM","LABEL":"Режим работы с кассой","OPTIONS":{"ACTIVE":"боевой","TEST":"тестовый"}}}}},"SUPPORTS_FFD105":"N"}}}' \
    https://**put_your_bitrix24_address**/rest/**put_your_user_id_here**/**put_your_webbhook_here**/sale.cashbox.handler.update
    ```

- cURL (OAuth)

    ```bash
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"ID":1,"FIELDS":{"NAME":"Моя REST-касса с новым именем","SORT":200,"SETTINGS":{"PRINT_URL":"http://setagaya.bx/receipt_print.php","CHECK_URL":"http://setagaya.bx/receipt_check.php","CONFIG":{"AUTH":{"LABEL":"Авторизация","ITEMS":{"LOGIN":{"TYPE":"STRING","REQUIRED":"Y","LABEL":"Логин"},"PASSWORD":{"TYPE":"STRING","REQUIRED":"Y","LABEL":"Пароль"}}},"COMPANY":{"LABEL":"Данные об организации","ITEMS":{"INN":{"TYPE":"STRING","REQUIRED":"Y","LABEL":"ИНН организации"}}},"INTERACTION":{"LABEL":"Настройки взаимодействия с кассой","ITEMS":{"MODE":{"TYPE":"ENUM","LABEL":"Режим работы с кассой","OPTIONS":{"ACTIVE":"боевой","TEST":"тестовый"}}}}},"SUPPORTS_FFD105":"N"}},"auth":"**put_access_token_here**"}' \
    https://**put_your_bitrix24_address**/rest/sale.cashbox.handler.update
```
