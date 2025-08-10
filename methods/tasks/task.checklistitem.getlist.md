---
method: task.checklistitem.getlist
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

Lists checklist items for a task (legacy). Filter by TASK_ID.
