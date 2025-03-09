<!-- Добавляем шапку -->
<?php
        include('vendor/components/account-header.php');
?>
<main class="main">
    <div class="container">
        <div class="cards_row">
    <?php
    // Проверяем на права доступа
    if(!isset($_SESSION['users'])){
        header("Location:../sigin.php");
    }
    //Выводим забронированные квартиры если есть;
    $user_id = $_SESSION['users']['id'];
    $result1 = $connect->query("SELECT * FROM `booking` WHERE `user_id`=$user_id");
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
            (SELECT `name` FROM `booking_status` WHERE `id`=`status_id`) as `status` FROM `apparts` WHERE `id`=$app_id");
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
                            <div class="card_text">Статус бронирования:<?php echo $row['status']?></div>
                    <?php    } ?>
                    </div>
                    </div>
    <?php }?>   
    <?php } ?>
</div>
</div>
</main>
<!--Добавляем подвал-->
<?php
    include('vendor/components/footer.php');
?>