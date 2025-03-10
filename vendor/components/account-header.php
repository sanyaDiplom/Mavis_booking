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
    <link rel="stylesheet" href="./assets/CSS/account-style.css">
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
                <input type="checkbox" id="burger-checkbox" class="burger-checkbox">
                <label for="burger-checkbox" class="burger"></label>
                    <ul class="menu">
                        <li class="menu_item"><a href="./account.php" class = 'menu_link'>Личные данные</a></li>
                        <li class="menu_item"><a href="./password.php" class = 'menu_link'>Поменять пароль</a></li>
                        <li class="menu_item"><a href="./my-booking.php" class = 'menu_link'>Мои бронирования</a></li>
                        <li class="menu_item"><a href="./feedback.php" class = 'menu_link'>Обратная связь</a></li>
                        <li class="menu_item"><a href="./feedback-form.php" class = 'menu_link'>Написать сообщение</a></li>
                        <li class="menu_item"><a href="./index.php" class = 'menu_link'>Выйти из кабинета</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!--Конец шапки-->
