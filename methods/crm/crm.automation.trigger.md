---
method: crm.automation.trigger
scope: crm
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---

Auto-generated stub. Fill in params/returns/examples.

---

# Автоматизация и триггеры

> Scope: [`crm`](../../scopes/permissions.md)
>
> Кто может выполнять метод: пользователь с доступом на изменение целевого объекта `target` 

Триггеры — это инструмент автоматизации CRM. В отличие от роботов, триггеры не выполняют операции. Зато они могут отслеживать действия со стороны клиентов и некоторые изменения в CRM. Триггеры в CRM есть в лидах, сделках, предложениях, счетах и смарт-процессах. Подробнее читайте в статье [Триггеры в CRM](https://helpdesk.bitrix24.ru/open/16547632/).

Методы работы с триггерами:

#|
|| **Метод** | **Описание** ||
|| [crm.automation.trigger](./crm-automation-trigger.md) | Активирует триггер Webhook, настроенный в автоматизации CRM ||
|| [crm.automation.trigger.*](./triggers/index.md) | Методы работы с триггерами приложений ||
|#
