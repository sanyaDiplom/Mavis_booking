<!-- Добавляем шапку -->
<?php
        include('vendor/components/account-header.php');
?>
<main class="main">
    <?php
    // Проверяем на права доступа
    if(!isset($_SESSION['users'])){
        header("Location:../sigin.php");
    }
    //выводим на страницу сообщения пользователя;
    $id = $_SESSION['users']['id'];
    ?>
    <div class="container">
    <h2 class="cards_title" id="reg" name="reg">Ваши сообщения</h2>
    <div class="project_row">
    <?php $result = $connect->query("SELECT * FROM `feedback` WHERE `user_id`=$id");
    if(!$result){
        return die ("Ошибка получения данных: ". $connect->error);
    }
    while($row = $result->fetch_assoc()){?>
        <div class="feed">
        <div class="feed_admin">
        <?php echo 'Дата обращения:'. $row['time_feedback'] ?></div>
        <div class="feed_admin">
        <?php echo 'Сообщение пользователя:'. $row['feedback'] ?></div>
        <?php if($row['status_id']==2){?>
            <div class="feed_admin">
            <?php echo 'Дата ответа:'. $row['time_anser'] ?></div>
            <div class="feed_admin">
            <?php echo 'Ответ менеджера:'. $row['meneger_answer'] ?></div><?php } ?>
</div></div>
    <?php } ?>
</div>
</main>
<!--Добавляем подвал-->
<?php
    include('vendor/components/footer.php');
?>