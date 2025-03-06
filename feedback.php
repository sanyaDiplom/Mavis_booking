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
    ?>
</main>
<!--Добавляем подвал-->
<?php
    include('vendor/components/footer.php');
?>