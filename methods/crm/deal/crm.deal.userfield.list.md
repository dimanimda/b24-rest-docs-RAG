---
method: crm.deal.userfield.list
scope: crm
deprecated: false
rate_limit_per_sec: 2
pagination: none
params:
  type: object
  properties:
    filter: { type: object }
    order:  { type: object }
    select: { type: array, items: { type: string } }
returns:
  type: array
  items: { type: object }
---

Lists user fields for deals. File-type fields have `USER_TYPE_ID = file`.
