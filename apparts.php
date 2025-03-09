<!-- Добавляем шапку -->
<?php
        include('vendor/components/header.php');
?>
    <main class="main">
    <div class = 'container'>
    <div class="app_row">
    <!--Карточка выбранной квартиры -->
    <?php $id = $_GET['id'];
    $result = $connect->query("SELECT *, (SELECT `name` FROM `projects` WHERE `id`=`project_id`) as `project`,
    (SELECT `name` FROM `type_apparts` WHERE `id`=`type_id`) as `type` FROM `apparts` WHERE `id`=$id");
    if(!$result){
    return die ("Ошибка получения данных: ". $connect->error);
    }?>
                <?php while($row = $result->fetch_assoc()){
                    ?>
                    <div class = 'card'>
                    <h1 class = 'card_title'><?php echo $row['type'] . " ". $row['square_1']. "кв. м ". $row['price']. "₽" ?></h1>
                    <a href="<?php echo $row['img']?>" target="_blank"><img class = 'card_img' src="<?php echo $row['img'] ?>"></a>
                        <div class = 'card_body'>
                            <h3 class = 'card_title'><?php echo "Проект". " ". $row['project'] ?></h3>
                            <div class="card_text">Корпус: <?php echo $row['corpus']?> 
                            Секция: <?php echo $row['section']?> 
                            Номер квартиры:<?php echo $row['number']?> 
                            Этаж:<?php echo $row['floor']?></div>
                            <div class="card_text">Жилая площадь:<?php echo $row['square_2']."кв. м"?></div>
                            <div class="card_text">Высота потолка:<?php echo $row['ceiling_height']."м"?></div>
                            <div class="card_text">Отделка:<?php echo $row['finishing']?></div>
                            <?php if(isset($_SESSION['users'])){?>
                            <a class = 'card_link' href = 'vendor/action/booking.php?id=<?php echo $row['id']?>'>
                            <?php if(isset($_SESSION['massege'])){
                                foreach($_SESSION['massege'] as $key=> $value){ ?>
                                <p class="reg_error"> <?php echo $value; ?></p>    
                                <?php }
                                    unset($_SESSION['massege']);
                                }?>
                            <?php if(isset($_SESSION['errors'])){
                            foreach($_SESSION['errors'] as $key=> $value){ ?>
                            <p class="reg_error"> <?php echo $value; ?></p>    
                            <?php }
                            unset($_SESSION['errors']);
                            }?>
                            <div class = 'card_button'>
                                Забронировать квартиру
                            </div>
                            </a><?php } else {?>
                             <h2 class = 'card_text'>Что бы забронировать квартиру авторизуйтесь на сайте!</h3>  
                            <?php } 
                        } ?>
                        </div>
                    </div>                    
    </main>
    <!--Добавляем подвал-->
<?php
    include('vendor/components/footer.php');
?>    