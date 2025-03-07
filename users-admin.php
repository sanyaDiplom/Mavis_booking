<!-- Добавляем шапку -->
<?php
        include('vendor/components/admin-header.php');
?>
<main class="main">
<?php
    // Проверяем на права доступа
    if(!isset($_SESSION['users'])||$_SESSION['users']['status']==0){
        header("Location:../sigin.php");
    }?>
    <div class="container">
    <div class="project_row">
    <?php
    $status = '1'; 
    $stmt = $connect->prepare("SELECT `id`, `login`, 
    `surname`, `name`, `patronymic` FROM `users` WHERE `status`=?");
    $stmt->bind_param("s", $status);
	$stmt->execute();
	$result = $stmt->bind_result($id,$login,$surname,$name,$patronymic);
    while($stmt->fetch()){?>
        <div class="projects">
        <input type="hidden" name='id' <?php echo $id ?>>
        <div class="project_admin">
        <?php echo $surname . ' ' . $name . ' ' . $patronymic ?></div>
        <div class="project_admin">
        <?php echo $login ?></div>
        <a href="" name='delete' class="card_link"><div class="card_button">Удалить</div></a>
        </div>
    <?php } ?>
    </div>
    </div>
</main>
<!--Добавляем подвал-->
<?php
    include('vendor/components/footer.php');
?>