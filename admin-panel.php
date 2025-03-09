<!-- Добавляем шапку -->
<?php
        include('vendor/components/admin-header.php');
?>
<main class="main">
<?php
    // Проверяем на права доступа
    if(!isset($_SESSION['users'])||$_SESSION['users']['status']==0){
        header("Location:./sigin.php");
    }
    if($_SESSION['users']['status']==2)
    header("Location:./users-admin.php");
    if($_SESSION['users']['status']==1)
    header("Location:./projects-admin.php");
?>
</main>
<!--Добавляем подвал-->
<?php
    include('vendor/components/footer.php');
?>    