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
    <?php $stmt = $connect->prepare("SELECT * FROM `projects`");
	$stmt->execute();
	$result = $stmt->bind_result($id, $name, $description, $img);
    while($stmt->fetch()){?>
        <div class="projects">
        <input type="hidden" name='id' <?php echo $id ?>>
        <div class="project_admin">
        <?php echo $name ?></div>
        <div class="project_admin">
        <?php echo $description ?></div>
        <div class="project_admin">
        <?php echo $img ?></div>
        <a href="" name='update' class="card_link"> <div class="card_button">Изменить</div></a>
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