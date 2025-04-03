<?php
include "../components/core.php";
$id = $_GET['id'];
$app_id = $_GET['app_id'];
$meneger_id = $_SESSION['users']['id'];
$status=$_GET['status_id'];
    $stmt = $connect->prepare("UPDATE `booking` SET `meneger_id`=?, `status_id`=? WHERE `id`=? ");
    $stmt->bind_param("sss",$meneger_id,$status,$id);
    $stmt->execute();
    $stmt->close();
    
    $stmt = $connect->prepare("UPDATE `apparts` SET `status_id`=? WHERE `id`=?");
    $stmt->bind_param("ss",$status,$app_id);
     $stmt->execute();
    header("Location: ../../booking-admin.php");
?>