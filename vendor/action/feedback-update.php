<?php
	include "../components/core.php";
	//Проверка на заполненость полей;
	if(empty($_POST["new_feedback"])){
		$_SESSION['errors']['new_feedback'] = "Заполните все поля!";
	}
	if(!isset($_SESSION['errors'])){
    $status = '2';
    $time = date('Y-m-d H:i:s');
	$stmt = $connect->prepare("UPDATE `feedback` SET `status_id`=?, `meneger_id`=?, `meneger_answer`=?, `time_anser`=? WHERE `id`=?");
	$stmt->bind_param("sssss",$status,$_SESSION['users']['id'],$_POST["new_feedback"],$time,$_POST['id']);
	$stmt->execute();
	header("Location:../../feedback-admin.php");
	}
	else header("Location: ../../feedback-admin.php"); 		
?>