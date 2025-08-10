---
method: crm.deal.get
scope: crm
deprecated: false
rate_limit_per_sec: 2
pagination: none
params:
  type: object
  required: [id]
  properties:
    id: { type: integer }
returns:
  type: object
---

Fetch single deal by ID. Includes UF_* values.
