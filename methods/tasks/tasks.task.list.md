---
method: tasks.task.list
scope: tasks
deprecated: true
aliases: ["task.items.getlist","task.item.list"]
rate_limit_per_sec: 2
pagination: nav_params
params: {"type":"object","properties":{"filter":{"type":"object"},"order":{"type":"object"},"select":{"type":"array","items":{"type":"string"}},"start":{"type":["integer","string"]}}}
returns: {"type":"array","items":{"type":"object"}}
---

Auto-generated stub. Fill in params/returns/examples.
