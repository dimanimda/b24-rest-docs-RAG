---
method: crm.requisite.preset.delete
scope: crm
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id"],"properties":{"id":{"type":"integer"}}}
returns: {"type":"object"}
---

Auto-generated stub. Fill in params/returns/examples.

---

# О шаблонах реквизитов

> Scope: [`crm`](../../../scopes/permissions.md)
>
> Кто может выполнять методы: любой пользователь

## Поля шаблона реквизитов

#|
|| **Название** | **Описание** | **Чтение** | **Запись** | **Обязательное** | **Неизменяемое** ||
|| **ID**
[`integer`](../../../data-types.md) | Идентификатор реквизита. Создается автоматически и уникален в рамках портала | Да | Нет | Нет | Да ||
|| **ENTITY_TYPE_ID**
[`integer`](../../../data-types.md) | Идентификатор типа родительского объекта.

Идентификаторы типов объектов CRM отдает метод [crm.enum.ownertype](../../auxiliary/enum/crm-enum-owner-type.md) | Да | Да | Да | Да ||
|| **COUNTRY_ID**
[`integer`](../../../data-types.md) | Идентификатор страны, которой соответствует набор полей шаблона реквизита (для получения доступных значений смотрите метод [crm.requisite.preset.countries](./crm-requisite-preset-countries.md)) | Да | Да | Да | Да ||
|| **DATE_CREATE**
[`datetime`](../../../data-types.md) | Дата создания | Да | Нет | Нет | Нет ||
|| **DATE_MODIFY**
[`datetime`](../../../data-types.md) | Дата изменения. Содержит пустую строку, если шаблон не менялся после создания | Да | Нет | Нет | Нет ||
|| **CREATED_BY_ID**
[`user`](../../../data-types.md) | Идентификатор пользователя, создавшего реквизит | Да | Нет | Нет | Нет ||
|| **MODIFY_BY_ID**
[`user`](../../../data-types.md) | Идентификатор пользователя, изменившего реквизит | Да | Нет | Нет | Нет ||
|| **NAME**
[`string`](../../../data-types.md) | Название реквизита | Да | Да | Да | Нет ||
|| **XML_ID**
[`string`](../../../data-types.md) | Внешний ключ. Используется для операций обмена. Идентификатор объекта внешней информационной базы. 

Назначение поля может меняться конечным разработчиком. 

Каждое приложение обеспечивает уникальность значений в этом поле. Рекомендуется использовать уникальный префикс для избежания коллизий с другими приложениями. 

В CRM зарезервированы значения вида `#CRM_REQUISITE_PRESET_DEF_...` для идентификации шаблонов, которые используются по умолчанию. Не следует использовать эти идентификаторы для своих целей, так как это может привести к нарушению логики | Да | Да | Нет | Нет ||
|| **ACTIVE**
[`char`](../../../data-types.md) | Признак активности. Используются значения `Y` или `N`. Определяет доступность шаблона в списке выбора при добавлении реквизитов | Да | Да | Нет | Нет ||
|| **SORT**
[`integer`](../../../data-types.md) | Сортировка | Да | Да | Нет | Нет ||
|#

## Обзор методов

#|
|| **Метод** | **Описание** ||
|| [crm.requisite.preset.add](./crm-requisite-preset-add.md) | Создает новый шаблон реквизитов ||
|| [crm.requisite.preset.update](./crm-requisite-preset-update.md) | Изменяет шаблон реквизита ||
|| [crm.requisite.preset.countries](./crm-requisite-preset-countries.md) | Возвращает возможный список стран для шаблонов реквизита ||
|| [crm.requisite.preset.get](./crm-requisite-preset-get.md) | Возвращает шаблон реквизитов по идентификатору ||
|| [crm.requisite.preset.list](./crm-requisite-preset-list.md) | Возвращает список шаблонов реквизитов по фильтру ||
|| [crm.requisite.preset.delete](./crm-requisite-preset-delete.md) | Удаляет шаблон реквизитов ||
|| [crm.requisite.preset.fields](./crm-requisite-preset-fields.md) | Возвращает формально описание полей шаблона реквизитов ||
|#
