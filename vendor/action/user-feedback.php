<?php
	include "../components/core.php";
	//Проверка на заполненость полей;
	if(empty($_POST["new_feedback"])){
		$_SESSION['errors']['new_feedback'] = "Поле Имя обязательно для заполнения!";
	}
	//Сформируем номер обращения;
    $stmt = $connect->prepare("SELECT max(`id`)+1  FROM `users_feedback`");
	$stmt->execute();
	$result = $stmt->get_result();
    $user = $result->fetch_assoc();
    var_dump($user);
    // if(!$user['max(`id`)+1']){
    //     //Первая запись, таблица пуста;
    //     $number='1001';
    // } else {
    //     $number='100'.$user['max(`id`)+1'];
    // }
	if(!isset($_SESSION['errors'])){
	$stmt = $connect->prepare("INSERT INTO users_feedback(`number`,`user_id`,`feedback`) VALUES (?, ?, ?)");
	$stmt->bind_param("sss",$number,$_SESSION['users']['id'],$_POST["new_feedback"]);
	$stmt->execute();

	$_SESSION['massage']['new_feed'] = "Спасибо за обращение! Менеджер ответит вам в ближайщее время!";
	header("Location:../../feedback.php");
	}
	else header("Location: ../../feedback-form.php"); 		
?>