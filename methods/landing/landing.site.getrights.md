---
method: landing.site.getrights
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

# Основные положения



Тут может не хватать некоторых данных — дополним в ближайшее время



Права доступны с версии 18.7.0.

Права выдаваться могут только администратором портала, и если тариф проекта платный (в случае облака). На данный момент права можно выдавать только для сайтов, и они распространяются на все вложенные страницы. Например, право «Изменение настроек», выданное для сайта, распространяется на страницу настроек сайта и страницы настроек любых его страниц.



Если портал переходит из категории платных в бесплатные, функционал прав отключается на нем автоматически и все закрытые сущности становятся доступными для всех.



#|
|| **Метод** | **Описание** ||
|| [landing.role.enable](./landing-role-enable.md) | Переключает модели ||
|| [landing.role.isEnabled](./landing-role-is-enabled.md) | Определяет модели прав ||
|#

## Расширенная модель прав

#|
|| **Метод** | **Описание** ||
|| [landing.site.getRights](./extended-model/landing-site-get-rights.md) | Метод вернет права текущего пользователя. ||
|| [landing.site.setRights](./extended-model/landing-site-set-rights.md) | Устанавливает права доступа для сайта. ||
|#

## Ролевая модель прав

#|
|| **Метод** | **Описание** ||
|| [landing.role.getList](./role-model/landing-role-get-list.md) | Метод позволяет получить список ролей. ||
|| [landing.role.getRights](./role-model/landing-role-get-rights.md) | Метод позволяет получить список сайтов, права на которые установлены в рамках роли. ||
|| [landing.role.setAccessCodes](./role-model/landing-role-set-access-codes.md) | Метод устанавливает для роли коды доступа, для которых будет действовать данная роль. ||
|| [landing.role.setRights](./role-model/landing-role-set-rights.md) | Метод устанавливает необходимые права в рамках роли для списков сайта. ||
|#

