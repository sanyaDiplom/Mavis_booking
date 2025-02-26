<?php
    include('core.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>МАВИС</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <!--Начало шапки-->
    <header class="header">
        <div class="container">
            <div class="header_row">
                <!--Логотип-->
                <div class="header_logo">
                    <a href="./index.php">
                     <img class="logo_img" src="./assets/img/logo-footer.svg"></img>
                    </a>
                </div>
                <!--Главное меню-->
                <div class="header_menu">
                    <ul class="menu">
                        <li class="menu_item"><a href="./index.php" class = 'menu_link'>Главная</a></li>
                        <li class="menu_item"><a href="./index.php#project" class = 'menu_link'>Проекты</a></li>
                        <li class="menu_item"><a href="./about.php" class = 'menu_link'>О нас</a></li>
                        <li class="menu_item"><a href="./catalog.php" class = 'menu_link'>Выбрать квартиру</a></li>
                        <!--<li class="menu_item"><a href="#" class = 'menu_link'>Личный кабинет</a></li>-->
                        <!--<li class="menu_item"><a href="#" class = 'menu_link'>Мои бронирования</a></li>-->
                        <!--<li class="menu_item"><a href="#" class = 'menu_link'>Админ-панель</a></li>-->
                        <li class="menu_item"><a href="./registration.php" class = 'menu_link'>Регистрация</a></li>
                        <li class="menu_item"><a href="./sigin.php" class = 'menu_link'>Войти</a></li>
                        <!--<li class="menu_item"><a href="#" class = 'menu_link'>Выйти</a></li>-->
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!--Конец шапки-->
