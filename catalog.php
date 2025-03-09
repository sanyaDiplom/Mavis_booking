<!-- Добавляем шапку -->
<?php
        include('vendor/components/header.php');
?>
<main class="main">
<!--Загружаем доступные квартиры из базы в виде карточек-->
<section class="cards_sec">
            <div class = 'container'>
<?php $from = $_GET['from']; ?>
            <ul class="breadcrumb">
                <li><a href="index.php">Главная</a></li>
                <?php if($_GET['from']==1){?>
                    <li><a href="aviator.php">Авиатор</a></li>
                <?php } ?>
                <?php if($_GET['from']==2){?>
                    <li><a href="photo.php">Фотограф</a></li>
                <?php } ?>
                <?php if($_GET['from']==3){?>
                    <li><a href="urbanist.php">Урбанист</a></li>
                <?php } ?>
                <?php if($_GET['from']==4){?>
                    <li><a href="grafica.php">Графика</a></li>
                <?php } ?>
                <li>Выбрать квартиру</li>
            </ul>
                <a name = 'project'></a>
            <div class = 'cards_ext'>
                <h1 class = 'cards_title'>Квартиры доступные к бронированию</h1>
            </div>
            <?php $result = $connect->query("SELECT *, 
            (SELECT `name` FROM `projects` WHERE `id`=`project_id`) as `project`,
            (SELECT `name` FROM `type_apparts` WHERE `id`=`type_id`) as `type`  FROM `apparts` WHERE `status_id`='1'");
            if(!$result){
            return die ("Ошибка получения данных: ". $connect->error);
            }?>
            <div class = 'cards'>
                <div class = 'cards_row'>
                <?php while($row = $result->fetch_assoc()){?>
                    <div class = 'card'>
                        <a href="apparts.php?id=<?php echo $row['id']?>&from=<?php echo $from?>"><img class = 'card_img' src="<?php echo $row['img'] ?>"></a>
                        <div class = 'card_body'>
                            <h3 class = 'card_title'><?php echo $row['project'] ?></h3>
                            <div class = 'card_text'><?php echo $row['type'] . " ". $row['price']. "₽" ?></div>
                            <a class = 'card_link' href = 'apparts.php?id=<?php echo $row['id']?>&from=<?php echo $from?>'>
                            <div class = 'card_button'>
                                Подробнее
                            </div>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div>                
            </div>
        </div>
        </section>
</main>
<!--Добавляем подвал-->
<?php
    include('vendor/components/footer.php');
?>    