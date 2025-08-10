---
method: crm.automation.trigger.list
scope: crm
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: start
params: {"type":"object","properties":{"filter":{"type":"object"},"order":{"type":"object"},"select":{"type":"array","items":{"type":"string"}},"start":{"type":["integer","string"]}}}
returns: {"type":"array","items":{"type":"object"}}
---

Auto-generated stub. Fill in params/returns/examples.

---

# Обзор методов

> Scope: [`crm`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: администратор с доступом к CRM в контексте приложения  

Все методы работы с триггерами приложений запускаются только в контексте приложения.

#|
|| **Метод** | **Описание** ||
|| [crm.automation.trigger.add](./crm-automation-trigger-add.md) | Добавляет триггер ||
|| [crm.automation.trigger.execute](./crm-automation-trigger-execute.md) | Запускает выполнение триггера ||
|| [crm.automation.trigger.list](./crm-automation-trigger-list.md) | Получает список приложений и триггеров ||
|| [crm.automation.trigger.delete](./crm-automation-trigger-delete.md) | Удаляет триггер ||
|#
