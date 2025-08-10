---
method: crm.deal.add.json
scope: crm
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---

Auto-generated stub. Fill in params/returns/examples.

Example (curl):

```bash
curl -X POST \
-H "Content-Type: application/json" \
-d '{
	"fields": {
		"title": "New Deal",
		"typeId": "SALE",
		"stageId": "NEW"
	},
	"auth": "YOUR_ACCESS_TOKEN"
}' \
https://your-domain.bitrix24.com/rest/crm.deal.add.json
```
