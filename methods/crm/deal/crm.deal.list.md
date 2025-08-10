---
method: crm.deal.list
scope: crm
deprecated: false
rate_limit_per_sec: 2
pagination: start
params:
  type: object
  properties:
    select: { type: array, items: { type: string } }
    filter: { type: object }
    order:  { type: object }
    start:  { type: [integer, string] }
returns:
  type: array
  items: { type: object }
---

Lists deals with select/filter/order. Use `start` pagination.
