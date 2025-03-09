<?php
	include "../components/core.php";
	//Проверка на заполненость полей;
	if(empty($_POST["new_feedback"])){
		$_SESSION['errors']['new_feedback'] = "Заполните все поля!";
	}
	if(!isset($_SESSION['errors'])){
	$stmt = $connect->prepare("INSERT INTO feedback(`user_id`,`feedback`) VALUES (?, ?)");
	$stmt->bind_param("ss",$_SESSION['users']['id'],$_POST["new_feedback"]);
	$stmt->execute();

	$_SESSION['massage']['new_feed'] = "Спасибо за обращение! Менеджер ответит вам в ближайщее время!";
	header("Location:../../feedback.php");
	}
	else header("Location: ../../feedback-form.php"); 		
?>