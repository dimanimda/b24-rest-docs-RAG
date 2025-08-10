---
method: task.elapseditem.getlist
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

Lists elapsed time records for a task (legacy). Filter by TASK_ID.
