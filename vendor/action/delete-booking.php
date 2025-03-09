<?php
include "../components/core.php";
$id = $_GET['id'];
$app_id = $_GET['app_id'];
$meneger_id = $_SESSION['users']['id'];
$status='1';
    $stmt = $connect->prepare("DELETE FROM `booking` WHERE `id`=? ");
    $stmt->bind_param("s",$id);
    $stmt->execute();
    $stmt->close();
    
     $stmt = $connect->prepare("UPDATE `apparts` SET `status_id`=? WHERE `id`=?");
    $stmt->bind_param("ss",$status,$app_id);
     $stmt->execute();
    header("Location: ../../booking-admin.php");
?>