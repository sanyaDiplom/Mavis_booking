<!-- Добавляем шапку -->
<?php
        include('vendor/components/admin-header.php');
?>
<main class="main">
<?php
    // Проверяем на права доступа
    if(!isset($_SESSION['users'])||$_SESSION['users']['status']==0){
        header("Location:../sigin.php");
    }
    $id = $_SESSION['users']['id'];
    ?>
    <div class="container">
    <h2 class="cards_title" id="reg" name="reg">Сообщения пользователей</h2>
    <div class="project_row">
    <?php $result = $connect->query("SELECT *,
    (SELECT CONCAT_WS(' ', `surname`, `name`, `patronymic`) 
    FROM `users` WHERE `id`=`User_id`) as `user`,
    (SELECT `name` FROM `feedback_status` WHERE `id`=`status_id`) as `status` FROM `feedback`");
    if(!$result){
        return die ("Ошибка получения данных: ". $connect->error);
    }
    while($row = $result->fetch_assoc()){?>
        <div class="feed">
        <h3 class="feed_admin">
        <?php echo 'Статус:'. $row['status']?></h3>
        <div class="feed_admin">
        <?php echo 'ФИО клиента:'. $row['user']?></div>
        <div class="feed_admin">
        <?php echo 'Дата обращения:'. $row['time_feedback'] ?></div>
        <div class="feed_admin">
        <?php echo 'Сообщение пользователя:'. $row['feedback'] ?></div>
        <?php if($row['status_id']==2){?>
            <div class="feed_admin">
            <?php echo 'Дата ответа:'. $row['time_anser'] ?></div>
            <div class="feed_admin">
            <?php echo 'Ответ менеджера:'. $row['meneger_answer'] ?></div><?php } 
            else {?>
            <form action="vendor/action/feedback-update.php" method="POST">
            <input type="hidden" name='id' value=<?php echo $row['id'] ?>>
            <textarea class="textarea_feedback" 
                        name="new_feedback" 
                        id="new_feedback"
                        placeholder = "Ответ пользователю"
                        required></textarea>
            <button class="card_button">Ответить</button>
            </form>
<?php } ?>
</div></div>
    <?php } ?>
</div>
</main>
<!--Добавляем подвал-->
<?php
    include('vendor/components/footer.php');
?>