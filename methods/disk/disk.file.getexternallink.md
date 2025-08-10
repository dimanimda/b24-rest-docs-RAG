---
method: disk.file.getexternallink
scope: disk
deprecated: false
rate_limit_per_sec: 2
pagination: none
params:
  type: object
  required: [id]
  properties:
    id: { type: integer, description: "disk file ID" }
returns:
  type: object
  properties:
    LINK: { type: string }
examples:
  curl: |
    curl -X POST "https://{portal}/rest/disk.file.getexternallink" -d 'id=1234&auth=...'
---

Retrieves a temporary public link for a disk file.

Errors: invalid id, access denied.
