---
method: crm.timeline.layout.blocks.get
scope: crm
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id"],"properties":{"id":{"type":"integer"}}}
returns: {"type":"object"}
---

Auto-generated stub. Fill in params/returns/examples.

---

# Дополнительные контентные блоки

Методы для работы с дополнительным контентными блоками в таймлайне:

#|
|| **Метод** | **Описание** ||
|| [crm.timeline.layout.blocks.set](./crm-timeline-layout-blocks-set.md) | Устанавливает набор дополнительных контентных блоков в запись таймлайна ||
|| [crm.timeline.layout.blocks.get](./crm-timeline-layout-blocks-get.md) | Получает установленный приложением набор дополнительных контентных блоков для записи таймлайна ||
|| [crm.timeline.layout.blocks.delete](./crm-timeline-layout-blocks-delete.md) | Удаляет установленный приложением набор дополнительных контентных блоков для записи таймлайна ||
|#

## Удаление записей таймлайна

При удалении записи таймлайна, будут безвозвратно удалены и наборы дополнительных контентных блоков, добавленные приложениями.

## Удаление Приложения

При удалении Приложения, будут безвозвратно удалены все наборы дополнительных контентных блоков, добавленные им в записи таймлайна.

## Смотрите также

- [Пример тестового Приложения](./content-blocks-test-app.md)
- [Методы для работы с наборами дополнительных контентных блоков для дел](../activities/layout-blocks/index.md)
