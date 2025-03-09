<?php
	include "../components/core.php";
	//Проверка на заполненость полей;
    $status = '1';
    $time = date('Y-m-d H:i:s');
    
    $stmt = $connect->prepare("INSERT INTO `meneger_call_back`(`call_id`, `meneger_id`, `time_call`) VALUES (?,?,?)");
    $stmt->bind_param("sss",$_GET['id'],$_SESSION['users']['id'],$time);
    $stmt->execute();
    $stmt->close();

	$stmt = $connect->prepare("UPDATE `call_back` SET `status`=? WHERE `id`=?");
	$stmt->bind_param("ss",$status,$_GET['id']);
	$stmt->execute();

	header("Location:../../callback.php"); 		
?>