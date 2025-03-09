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
    <h2 class="cards_title" id="reg" name="reg">Заявки на звонок</h2>
    <div class="project_row">
    <?php $result = $connect->query("SELECT * FROM `call_back` ");
    if(!$result){
        return die ("Ошибка получения данных: ". $connect->error);
    }
    while($row = $result->fetch_assoc()){
        if($row['status']==0){
            $status = 'новый';
        }else{$status = 'закрыт';}?>
        <div class="projects">
        <h3 class="project_admin">
        <?php echo 'Статус:'. $status?></h3>
        <div class="project_admin">
        <?php echo $row['name']?></div>
        <div class="project_admin">
        <?php echo $row['date'] ?></div>
        <div class="project_admin">
        <?php echo $row['phone_number'] ?></div>
        <?php if($row['status']==0){?>
        <form action="vendor/action/callback.php" method="GET">
            <input type="hidden" name='id' value=<?php echo $row['id'] ?>>
            <button class="card_button">Звонок завершен</button>
            </form><?php } ?></div>
<?php } ?>
</div>
</div>
</main>
<!--Добавляем подвал-->
<?php
    include('vendor/components/footer.php');
?>