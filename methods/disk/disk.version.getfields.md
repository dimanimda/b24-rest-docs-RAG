---
method: disk.version.getfields
scope: disk
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---

Auto-generated stub. Fill in params/returns/examples.

---

# Список версий файла disk.file.getVersions





- не указаны типы параметров
- не указана обязательность параметров
- отсутствуют примеры (должно быть три примера - curl, js, php)
- отсутствует ответ в случае ошибки








Тут может не хватать некоторых данных — дополним в ближайшее время



> Scope: [`disk`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `disk.file.getVersions` возвращает список версий файла. Версии упорядочены по убыванию даты создания.

## Параметры

#|
||  **Параметр** / **Тип**| **Описание** | **С версии** ||
|| **id**
[`unknown`](../../data-types.md) | Идентификатор файла | ||
|| **filter**
[`unknown`](../../data-types.md) | Необязательный параметр. Поддерживает фильтрацию по полям, которые указаны в `disk.version.getfields` как `USE_IN_FILTER: true`. | ||
|#



Cм. также описание [списочных методов](../../how-to-call-rest-api/list-methods-pecularities.md).



## Ответ в случае успеха

> 200 OK

В ответе список версий, структура которых аналогична [disk.version.get](../version/disk-version-get.md).
