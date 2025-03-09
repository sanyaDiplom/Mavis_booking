<?php
    include "../components/core.php";
    $id = $_GET['id'];
    $user_id = $_SESSION['users']['id'];
    //Проверка не забронировал ли кто то уже эту квартиру пока у нас была открыта страница квартиры;
    $result = $connect->query("SELECT `status_id` FROM `apparts` WHERE `id`=$id");
    if(!$result){
        return die ("Ошибка получения данных: ". $connect->error);
    }
    if($row = $result->fetch_assoc()){
        if($row['status_id']!= 1){
            $_SESSION['errors']['status']="В данный момент эта квартира уже забронирована! Выберите другую";
        }
    }
    //Добавляем запись в таблицу booking и меняем статус в таблице apparts;
    if(!isset($_SESSION['errors'])){
        $stmt = $connect->prepare("INSERT INTO `booking` SET `user_id`=?, `apparts_id`=?");
	    $stmt->bind_param("ss",$user_id,$id);
	    $stmt->execute();
        $stmt->close();
        $status='2';
        $stmt = $connect->prepare("UPDATE `apparts` SET `status_id`=? WHERE `id`=?");
	    $stmt->bind_param("ss",$status,$id);
	    $stmt->execute();
	    $_SESSION['massege']['update'] = "Вы забронировали квартиру! Актуальный статус смотрите в личном кабинете!";
        header("Location: ../../apparts.php?id=$id");
    }
    else{
        header("Location: ../../apparts.php");
    }

?>