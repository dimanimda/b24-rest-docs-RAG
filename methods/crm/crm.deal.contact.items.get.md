---
method: crm.deal.contact.items.get
scope: crm
deprecated: false
aliases: []
rate_limit_per_sec: 2
pagination: none
params: {"type":"object","required":["id"],"properties":{"id":{"type":"integer"}}}
returns: {"type":"object"}
---


---

# Получить набор контактов, связанных со сделкой crm.deal.contact.items.get



Тут может не хватать некоторых данных — дополним в ближайшее время







- не указан тип параметра
- отсутствуют примеры (на других языках)
- отсутствует ответ в случае ошибки





> Scope: [`crm`](../../../scopes/permissions.md)
>
> Кто может выполнять метод: любой пользователь

Метод `crm.deal.contact.items.get`  возвращает набор контактов, связанных с указанной сделкой.

#|
|| **Параметр** | **Описание** ||
|| **id**^*^ | Идентификатор сделки. ||
|#



## Пример



- JS

    ```js
    var id = prompt("Введите ID");
    BX24.callMethod(
        "crm.deal.contact.items.get",
        {
            id: id
        },
        function(result)
        {
            if(result.error())
                console.error(result.error());
            else
                console.dir(result.data());
        }
    );
    ```

- PHP (B24PhpSdk)

    ```php
    try {
        $dealId = 123; // Replace with the actual deal ID
        $result = $serviceBuilder
            ->getCRMScope()
            ->dealContact()
            ->itemsGet($dealId);

        foreach ($result->getDealContacts() as $item) {
            print("CONTACT_ID: " . $item->CONTACT_ID . "\n");
            print("SORT: " . $item->SORT . "\n");
            print("ROLE_ID: " . $item->ROLE_ID . "\n");
            print("IS_PRIMARY: " . $item->IS_PRIMARY . "\n");
        }
    } catch (Throwable $e) {
        print("Error: " . $e->getMessage());
    }
    ```





## Ответ в случае успеха

Результат возвращается в виде массива объектов, каждый из которых содержит следующие поля:

#|
|| **Поле** | **Описание** ||
|| **CONTACT_ID** | Идентификатор контакта ||
|| **SORT** | Индекс сортировки ||
|| **ROLE_ID** | Идентификатор роли (зарезервировано) ||
|| **IS_PRIMARY** | Флаг первичного контакта ||
|#

