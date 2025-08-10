---
method: task.items.getlist
scope: tasks
deprecated: true
aliases: [tasks.task.list]
rate_limit_per_sec: 2
pagination: nav_params
params:
  type: array
  description: "Positional: [order, filter, select, params]"
returns:
  type: array
  items: { type: object }
examples:
  curl: |
    curl -X POST "https://{portal}/rest/task.items.getlist" \
      -H 'Content-Type: application/json' \
      -d '{"0":{"ID":"ASC"},"1":{"RESPONSIBLE_ID":1},"2":["ID","TITLE"],"3":{"NAV_PARAMS":{"nPageSize":50,"iNumPage":1}},"auth":"..."}'
---

Legacy tasks list method; requires strict positional arguments.
