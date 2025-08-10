## Bitrix24 REST RAG docs (for agents)

This folder contains AI-friendly, machine-readable references for frequently used Bitrix24 REST methods. Goals:
- Stable per-method files (one file = one method)
- Frontmatter with structured metadata (method, scope, params schema, pagination, aliases, deprecations)
- Minimal, copy-pastable curl examples and raw REST payloads
- Cheatsheets for cross-cutting behaviors (pagination, rate-limits, legacy tasks ordering)

Structure:
- methods/<scope>/<method>.md — a single method per file
- cheatsheets/*.md — global guidance
- rest-index.json — index for automated retrieval

Conventions:
- YAML frontmatter with: method, scope, aliases, deprecated, rate_limit_per_sec, pagination, params (JSON-schema), returns (JSON-schema), errors
- Examples always include curl with generic `https://{portal}/rest/{method}` and sample payloads
- Legacy tasks note positional argument order in bold
