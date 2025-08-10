---
method: sale.delivery.handler.add
scope: sale
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["fields"],"properties":{"fields":{"type":"object"}}}
returns: {"type":"object"}
---

Auto-generated stub. Fill in params/returns/examples.

---

# Вебхуки при работе с доставками

Битрикс24 оповещает службу доставки при наступлении некоторых событий, отправляя HTTP запросы в формате JSON на определенные URL, которые были указаны как параметры при создании обработчика службы доставки в методе [sale.delivery.handler.add](../handler/sale-delivery-handler-add.md). Список таких событий:

1.	Расчет стоимости доставки — менеджер хочет рассчитать предварительную стоимость доставки
2.	Создание заказа на доставку — менеджер хочет оформить заказ на доставку
3.	Отмена заказа на доставку — менеджер пытается отменить ранее оформленный заказ на доставку

Требуемый формат ответа на запросы — JSON.

## Продолжите изучение 

- [{#T}](./calculate.md)
- [{#T}](./create-delivery-request.md)
- [{#T}](./cancel-delivery-request.md)


