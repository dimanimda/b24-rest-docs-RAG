## Pagination and rate limits

- Cloud Bitrix24 rate limit is typically ~2 requests/sec for standard REST (varies by plan/method). Add 200ms sleep between calls.
- CRM list methods use `start` (offset) pagination: pass integer offset, response returns `next` in pagination metadata. Stop when `next` is null.
- Tasks legacy list methods use page parameters via `NAV_PARAMS`: `{ "NAV_PARAMS": { "nPageSize": 50, "iNumPage": 1 } }` as the 4th positional arg.
- Prefer early exits and backoffs on 429/`QUERY_LIMIT_EXCEEDED`.
