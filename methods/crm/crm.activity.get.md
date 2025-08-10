---
method: crm.activity.get
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
examples:
  curl: |
    curl -X POST "https://{portal}/rest/crm.activity.get" -d 'id=123&auth=...'
---

Fetches activity by ID. Use to access FILES and DESCRIPTION.
