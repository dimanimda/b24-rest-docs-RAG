---
method: landing.block.getrepository
scope: landing
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: unknown
params: {"type":"object"}
returns: {"type":"object"}
---

Auto-generated stub. Fill in params/returns/examples.

---

# Добавление нового блока на страницу



Тут может не хватать некоторых данных — дополним в ближайшее время







- нужны правки под стандарт написания
- не указаны типы параметров
- не указана обязательность параметров
- отсутствуют примеры
- отсутствует ответ в случае успеха
- отсутствует ответ в случае ошибки
- не прописаны ссылки на несозданные ещё страницы (3 ссылки раздела Сайты)







**Scope**: [`landing`](../../../scopes/permissions.md) | **Кто может выполнять метод**: `любой пользователь`



Метод `landing.landing.addblock` добавляет новый блок на страницу. Возвращает идентификатор нового блока или ошибку.

## Параметры

#|
|| **Метод** | **Описание** ||
|| **lid**
[`unknown`](../../../data-types.md) | Идентификатор страницы ||
|| **fields**
[`unknown`](../../../data-types.md) | Массив полей блока, где из поддерживаемого пока только следующие значения:
- **CODE** - символьный код блока. Код блока можно получить из метода [landing.block.getrepository](.). Если добавляется блок, который был зарегистрирован партнером через [landing.repo.register](.), то необходимо передавать для CODE значение `repo_<ID>`, где `<ID>` - идентификатор такого блока.
- **AFTER_ID** - после какого блока (его ID) надо добавить новый блок (если не указано, блок добавится в начало)
- **ACTIVE** - активность блока (Y/N)
- **CONTENT** - полностью иное содержимое блока (см. замечания для метода [landing.block.updatecontent](.)) ||
|#

## Примеры



- JS

    ```js
    BX24.callMethod(
        'landing.landing.addblock',
        {
            lid: 351,
            fields: {
                CODE: '15.social'
            }
        },
        function(result)
        {
            if(result.error())
            {
                console.error(result.error());
            }
            else
            {
                console.info(result.data());
            }
        }
    );
    ```




