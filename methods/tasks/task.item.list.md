---
method: task.item.list
scope: tasks
deprecated: true
rate_limit_per_sec: 2
pagination: nav_params
params:
  type: array
  description: "Positional: [order, filter, select, params]"
returns:
  type: array
  items: { type: object }
---

Older legacy tasks list method. Same positional order as `task.items.getlist`.
