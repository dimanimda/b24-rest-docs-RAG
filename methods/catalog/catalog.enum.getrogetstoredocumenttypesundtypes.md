---
method: catalog.enum.getrogetstoredocumenttypesundtypes
scope: catalog
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---

Auto-generated stub. Fill in params/returns/examples.

---

# Получить типы документов складского учета, доступных для REST catalog.enum.getRogetStoreDocumentTypesundTypes



Тут может не хватать некоторых данных — дополним в ближайшее время







- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки
- нет примеров на др. языках
  




> Scope: [`catalog`](../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

## Описание

```http
catalog.enum.getStoreDocumentTypes()
```

Метод возвращает типы документов складского учёта, доступные для REST.

На текущий момент доступны следующие типы:
- `A` – Приход товара на склад;
- `S` – Оприходование товара;
- `M` – Перемещение товара между складами;
- `R` – Возврат товара;
- `D` – Списание товара.

## Параметры

Без параметров.

## Примеры



- JS

    ```js
    BX24.callMethod(
        'catalog.enum.getStoreDocumentTypes',
        {},
        function(result)
        {
            if(result.error())
                console.error(result.error().ex);
            else
                console.log(result.data());
        }
    );
    ```




