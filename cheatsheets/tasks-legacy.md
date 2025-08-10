## Tasks legacy API quick reference

Positional arguments order (arrays) must be respected:

- task.items.getlist(order, filter, select, params)
- task.item.list(order,  filter, select, params)

Examples (same layout):

```
order:  { "ID": "ASC" }
filter: { "RESPONSIBLE_ID": 1 }
select: ["ID","TITLE","RESPONSIBLE_ID"]
params: { "NAV_PARAMS": { "nPageSize": 50, "iNumPage": 1 } }
```

Notes:
- Some portals disable `tasks.task.list`; use legacy endpoints above.
- Permissions restrict visibility: aggregate by roles (RESPONSIBLE_ID, CREATED_BY, AUDITOR, ACCOMPLICE) to cover task universe.
