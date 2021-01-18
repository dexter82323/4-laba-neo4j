# 4-laba-neo4j
## Структура приложения:
## Регистрация находится:
- controllers/SiteController actionSignup
- models/SignupForm - форма регистрации
- views/signup

## Вход осуществляется с помощью стандартного класса User или с помощью соц.сетей(OAuth):
- используется библиотека с гитхаба yii2-authclient, ее использование находится в components/AuthHandler
- сами соц.сети указываются в config/web в свойстве authClientCollection

## Реализован rest api, он находится в :
- FileController и PictureController которые наследуют контроллер RestController. В RestController добавлена фильтрация , и запросы POST,PUT,DELETE могут посылать только авторизированные пользователи

## На странице "Галерея" выводятся картинки (id,название,категория), выполняется пагинация (12 картинок на странице) и добавлены фильтры для поиска по id,названию и категории.

## Добавление картинок находится:
- modules/admin/controllers/DefaultController actionCreate 
- modules/admin/models/Create Форма для добавления картинки
- modules/admin/views/default/create 

## Вывод картинок находится:
- controllers/GalleryController actionGallery
- views/gallery/gallery

## Дамп базы данных находится в корне архива (gallery.sql)
