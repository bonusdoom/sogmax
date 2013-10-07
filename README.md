# Система Skyres #

## Деплой системы на веб-сервер ##
___

1) Клонируем исходники из репозитория: 
```
git clone git@bitbucket.org:izonder/skyres.git
```
2) Копируем файл *<root_path>/web/protected/config/custom.php-orig* в *<root_path>/web/protected/config/custom.php*

3) Редактируем *<root_path>/web/protected/config/custom.php*, указываем параметры доступа к БД и прочие настройки. **ВАЖНО!!!** Для продакшена выставляем константы **YII_DEBUG** в **false** и **C_ENV** в **prod**

4) Переходим в консоли в папку <root_path>/web/protected и вводим команду:
```
yiic migrate --interactive=0
```