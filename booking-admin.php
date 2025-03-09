<!-- Добавляем шапку -->
<?php
        include('vendor/components/admin-header.php');
?>
<main class="main">
    <div class="container">
        <div class="csrds_row">
<?php
    // Проверяем на права доступа
    if(!isset($_SESSION['users'])||$_SESSION['users']['status']==0){
        header("Location:../sigin.php");
    }
    //Выводим забронированные квартиры все;
    $user_id = $_SESSION['users']['id'];
    $result1 = $connect->query("SELECT *, (SELECT CONCAT_WS(' ',`surname`,`name`, `patronymic`) FROM `users` WHERE `id`=`user_id`) as `user` FROM `booking`");
    if(!$result1){
    return die ("Ошибка получения данных: ". $connect->error);
    }
    else{
        while($row1=$result1->fetch_assoc())
        {?>
            <div class = 'card'>
           <?php $app_id=$row1['apparts_id'];
            $result = $connect->query("SELECT *, (SELECT `name` FROM `projects` WHERE `id`=`project_id`) as `project`,
            (SELECT `name` FROM `type_apparts` WHERE `id`=`type_id`) as `type`,
            (SELECT `name` FROM `booking_status` WHERE `id`=`status_id`) as `status` 
             FROM `apparts` WHERE `id`=$app_id");
    if(!$result){
    return die ("Ошибка получения данных: ". $connect->error);
    }?>
                <?php while($row = $result->fetch_assoc()){
                    ?>
                    <h1 class = 'card_title'><?php echo $row['type'] . " ". $row['square_1']. "кв. м ". $row['price']. "₽" ?></h1>
                        <div class = 'card_body'>
                            <h3 class = 'card_title'><?php echo "Проект". " ". $row['project'] ?></h3>
                            <div class="card_text">Корпус: <?php echo $row['corpus']?> 
                            Секция: <?php echo $row['section']?> 
                            Номер квартиры:<?php echo $row['number']?> 
                            Этаж:<?php echo $row['floor']?></div>
                            <div class="card_text">Жилая площадь:<?php echo $row['square_2']."кв. м"?></div>
                            <div class="card_text">Высота потолка:<?php echo $row['ceiling_height']."м"?></div>
                            <div class="card_text">Отделка:<?php echo $row['finishing']?></div>
                            <div class="card_text">ФИО пользователя:<?php echo $row1['user']?></div>
                            <div class="card_text">Статус бронирования:<?php echo $row['status']?></div>
                            <div class="booking_form">
                            <form action="vendor/action/update-booking.php" method="get">
                            <input type="hidden" name='id' value=<?php echo $row1['id'] ?>>
                            <input type="hidden" name='app_id' value=<?php echo $app_id ?>>
                            <button class="card_button">Подтвердить бронь</button>
                            </form>
                            <form action="vendor/action/delete-booking.php" method="get">
                            <input type="hidden" name='id' value=<?php echo $row1['id'] ?>>
                            <input type="hidden" name='app_id' value=<?php echo $app_id ?>>
                            <button class="card_button">Отменить бронь</button>
                            </form>
                    <?php    } ?>
                    </div>
                    </div>
                    </div>
    <?php }?>   
    <?php } ?>
</div>
</div>
?>
</div>
</div>
</main>
<!--Добавляем подвал-->
<?php
    include('vendor/components/footer.php');
?>