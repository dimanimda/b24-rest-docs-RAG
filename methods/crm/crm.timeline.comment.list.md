---
method: crm.timeline.comment.list
scope: crm
deprecated: false
rate_limit_per_sec: 2
pagination: page
params:
  type: object
  properties:
    filter: { type: object, description: "ENTITY_TYPE: deal|lead|contact|company; ENTITY_ID: int" }
    order:  { type: object }
    select: { type: array, items: { type: string } }
    start:  { type: integer, description: "offset = (page-1)*pageSize" }
returns:
  type: array
  items: { type: object }
---

Lists timeline comments for an entity. Paginate with `start`.
