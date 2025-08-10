---
method: crm.activity.list
scope: crm
deprecated: false
rate_limit_per_sec: 2
pagination: start
params:
  type: object
  properties:
    filter: { type: object }
    order:  { type: object }
    select: { type: array, items: { type: string } }
    start:  { type: [integer, string], description: "offset; '0' for first page" }
returns:
  type: array
  items: { type: object }
examples:
  curl: |
    curl -X POST "https://{portal}/rest/crm.activity.list" \
      -d 'filter[OWNER_TYPE_ID]=2&filter[OWNER_ID]=1676&order[ID]=ASC&select[]=ID&select[]=AUTHOR_ID&start=0&auth=...'
---

Lists activities. Use pagination via `start`; the response contains pagination metadata (`next`).
