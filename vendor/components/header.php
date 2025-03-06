<?php
    include('core.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>МАВИС</title>
    <link rel="stylesheet" href="./assets/CSS/style.css">
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
                        <li class="menu_item_down"><a href="./index.php#project" class = 'menu_link' class="down">Проекты</a>
                        <ul class="submenu">
                        <li class="menu_item"><a href="./aviator.php" class = 'menu_link'>Авиатор</a></li>
                        <li class="menu_item"><a href="./photo.php" class = 'menu_link'>Фоторгаф</a></li>
                        <li class="menu_item"><a href="./urbanist.php" class = 'menu_link'>Урбанист</a></li>
                        <li class="menu_item"><a href="./grafica.php" class = 'menu_link'>Графика</a></li>
                        </ul>
                        </li>
                        <li class="menu_item"><a href="./about.php" class = 'menu_link'>О нас</a></li>
                        <li class="menu_item"><a href="./catalog.php" class = 'menu_link'>Выбрать квартиру</a></li>
                        <?php if(isset($_SESSION['users'])){
                            if($_SESSION['users']['status']=='0') {?>
                        <li class="menu_item"><a href="./account.php" class = 'menu_link'>Личный кабинет</a></li>
                        <?php } else if($_SESSION['users']['status']=='2'){ ?>
                        <li class="menu_item"><a href="./admin-panel.php" class = 'menu_link'>Панель администратора</a></li>
                        <?php }else if($_SESSION['users']['status']=='1'){ ?>
                            <li class="menu_item"><a href="./admin-panel.php" class = 'menu_link'>Кабинет менеджера</a></li>
                        <?php }} ?>
                        <li class="menu_item"><a href="./contacts.php" class = 'menu_link'>Контакты</a></li>
                        <?php if(!isset($_SESSION['users'])){?>
                            <!-- Пользователь неавторизован -->
                            <li class="menu_item"><a href="./registration.php" class = 'menu_link'>Регистрация</a></li>
                            <li class="menu_item"><a href="./sigin.php" class = 'menu_link'>Войти</a></li><?php } else {?>
                            <li class="menu_item"><a href="./vendor/action/logout.php" class = 'menu_link'>Выйти</a></li> <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!--Конец шапки-->
