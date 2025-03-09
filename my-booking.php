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
    //Выводим забронированные квартиры если есть;
    $user_id = $_SESSION['users']['id'];
    $result = $connect->query("SELECT * FROM `booking` WHERE `user_id`=$user_id");
    if(!$result){
    return die ("Ошибка получения данных: ". $connect->error);
    }
    else{
        while($row=$result->fetch_assoc())
        {
            
        }
    }
    ?>
</main>
<!--Добавляем подвал-->
<?php
    include('vendor/components/footer.php');
?>