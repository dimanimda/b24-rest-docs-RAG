### Обновление RAG-документации Bitrix24 REST

Рекомендуемая структура:
- `../b24-rest-docs/` — исходная человекочитаемая документация
- `../b24-rest-docs-RAG/` — машинно-читаемая RAG-документация для агентов (эта папка)

Почему так: генератор использует относительный путь `../b24-rest-docs/api-reference`, что упрощает локальные обновления и CI.

Команды обновления:
1) Запустить генератор из любой директории:
```
php C:/Users/diman/PhpstormProjects/b24-rest-docs-RAG/generate.php \
  --source="C:/Users/diman/PhpstormProjects/b24-rest-docs/api-reference" \
  --out="C:/Users/diman/PhpstormProjects/b24-rest-docs-RAG"
```
или при стандартной структуре (относительно этой папки):
```
php generate.php --source="../b24-rest-docs/api-reference" --out="."
```

Что делает генератор:
- Ищет все упоминания REST-методов по всем `*.md` в `--source`
- Формирует/обновляет индекс `rest-index.json` (method, scope, path, deprecated, pagination, has_example)
- Создаёт/обновляет файлы `methods/<scope>/<method>.md` с frontmatter (method, scope, aliases, deprecated, rate_limit, pagination, params/returns-схемы)
- Пытается извлечь из исходных MD curl-примеры и вставить их в карточки методов
- Не перезатирает файлы, если они уже вручную отредактированы (нет строки "Auto-generated stub")

Где править руками:
- `methods/**.md` — можно уточнять схемы параметров/ответов, добавлять кейсы
- `cheatsheets/*.md` — глобальные шпаргалки (пагинация, лимиты, legacy задачи)

CI/автообновление (опционально):
- На PR в `b24-rest-docs` запускать `php b24-rest-docs-RAG/generate.php --source=../b24-rest-docs/api-reference --out=./b24-rest-docs-RAG`
- Пушить изменения в `b24-rest-docs-RAG`
