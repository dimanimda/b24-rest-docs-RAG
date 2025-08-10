---
method: sale.paysystem.update
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
    -d '{"ID":12,"FIELDS":{"NAME":"Новое название платёжной системы","DESCRIPTION":"Новое описание платёжной системы","PERSON_TYPE_ID":1,"BX_REST_HANDLER":"resthandlercode","ACTIVE":"Y","NEW_WINDOW":"N","LOGOTYPE":"/9j/4AAQSkZJRgABAQEAYABgAAD/2wBDAAIBAQIBAQICAgICAgICAwUDAwMDAwYEBAMFBwYHBwcGBwcICQsJCAgKCAcHCg0KCgsMDAwMBwkODw0MDgsMDAz/2wBDAQICAgMDAwYDAwYMCAcIDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAz/wAARCAASABUDASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD73/4Oa/25vEf7CH/BK/XNW8GarrPh/wAZeONcsfCejazpk3k3GkyS+ZdTSh/vKWtbO5jDJhlaVWBBGR4V/wAFMP28vj1/wRc/4I+fs56O3jmLxh+0j4m1Wy0/V5tft11a9v4xDNc30SYJE/kTSWdn52S7o6tne+4fNv7f3/BSHwX8d/2xvjL+y/8A8FBrHxt4R+F+g/EKDxB8NtY8L6WLeTTbG3N5BDLdMqSy3FtdWkynfFFI4aSUDYQvl8r/AMFDv+Cr37P37eP/AAWX/Zz+IHw10/42fGi6+GOp2VlpnhbSrBNL03WLtLw3cF7ZtOzXJlExjWWGW1hEy20YM0aoSwB/RtRRRQBw/wAb/wBmb4b/ALTWk2On/Ej4feB/iDY6ZMbiztvEuhWurQ2khG0vGtwjhGK8EqASOKT4H/swfDX9mTTr+z+G3w78DfD201WRZr2Dw1oNrpMd46ghWkW3jQOwBIBbJAJoooA7miiigD//2Q=="}}' \
    https://**put_your_bitrix24_address**/rest/**put_your_user_id_here**/**put_your_webhook_here**/sale.paysystem.update
    ```

- cURL (OAuth)

    ```bash
    curl -X POST \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"ID":12,"FIELDS":{"NAME":"Новое название платёжной системы","DESCRIPTION":"Новое описание платёжной системы","PERSON_TYPE_ID":1,"BX_REST_HANDLER":"resthandlercode","ACTIVE":"Y","NEW_WINDOW":"N","LOGOTYPE":"/9j/4AAQSkZJRgABAQEAYABgAAD/2wBDAAIBAQIBAQICAgICAgICAwUDAwMDAwYEBAMFBwYHBwcGBwcICQsJCAgKCAcHCg0KCgsMDAwMBwkODw0MDgsMDAz/2wBDAQICAgMDAwYDAwYMCAcIDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAz/wAARCAASABUDASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD73/4Oa/25vEf7CH/BK/XNW8GarrPh/wAZeONcsfCejazpk3k3GkyS+ZdTSh/vKWtbO5jDJhlaVWBBGR4V/wAFMP28vj1/wRc/4I+fs56O3jmLxh+0j4m1Wy0/V5tft11a9v4xDNc30SYJE/kTSWdn52S7o6tne+4fNv7f3/BSHwX8d/2xvjL+y/8A8FBrHxt4R+F+g/EKDxB8NtY8L6WLeTTbG3N5BDLdMqSy3FtdWkynfFFI4aSUDYQvl8r/AMFDv+Cr37P37eP/AAWX/Zz+IHw10/42fGi6+GOp2VlpnhbSrBNL03WLtLw3cF7ZtOzXJlExjWWGW1hEy20YM0aoSwB/RtRRRQBw/wAb/wBmb4b/ALTWk2On/Ej4feB/iDY6ZMbiztvEuhWurQ2khG0vGtwjhGK8EqASOKT4H/swfDX9mTTr+z+G3w78DfD201WRZr2Dw1oNrpMd46ghWkW3jQOwBIBbJAJoooA7miiigD//2Q=="},"auth":"**put_access_token_here**"}' \
    https://**put_your_bitrix24_address**/rest/sale.paysystem.update
```
