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
    <link rel="stylesheet" href="./assets/CSS/admin-style.css">
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
                        <?php if(isset($_SESSION['users'])){
                            if($_SESSION['users']['status']=='2') {
                            //Доступно только администратору, менеджеры не видят
                        ?>
                        <li class="menu_item"><a href="./users-admin.php" class = 'menu_link'>Управление пользователями</a></li>
                        <?php } else if($_SESSION['users']['status']=='1'){
                            //Доступно только менеджеру;
                         ?>
                        <li class="menu_item"><a href="./admin-account.php" class = 'menu_link'>Личные данные</a></li>    
                        <?php }} ?>
                        <li class="menu_item"><a href="./projects-admin.php" class = 'menu_link'>Управление проектами</a></li>
                        <li class="menu_item"><a href="./apparts-admin.php" class = 'menu_link'>Управление квартирами</a></li>
                        <li class="menu_item"><a href="./booking-admin.php" class = 'menu_link'>Управление бронированиями</a></li>
                        <li class="menu_item"><a href="./feedback-admin.php" class = 'menu_link'>Управление обратной связью</a></li>
                        <li class="menu_item"><a href="./index.php" class = 'menu_link'>Выйти из панели</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!--Конец шапки-->
