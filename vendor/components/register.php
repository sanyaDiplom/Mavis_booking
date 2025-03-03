<?php
	include "core.php";
	//Проверка на заполненость полей;
	if(empty($_POST["name"])){
		$_SESSION['errors']['name'] = "Поле Имя обязательно для заполнения!";
	}
	if(empty($_POST["patronymic"])){
		$_SESSION['errors']['patronymic'] = "Поле Отчество обязательно для заполнения!";
	}
	if(empty($_POST["surname"])){
		$_SESSION['errors']['surname'] = "Поле Фамилия обязательно для заполнения!";
	}
	if(empty($_POST["login"])){
		$_SESSION['errors']['login'] = "Поле Логин обязательно для заполнения!";
	}
	if(empty($_POST["tel"])){
		$_SESSION['errors']['tel'] = "Поле Телефон обязательно для заполнения!";
	}
	if(empty($_POST["password"])){
		$_SESSION['errors']['password'] = "Поле Пароль обязательно для заполнения!";
	}
	//Проверка на совпадение паролей;
	if($_POST['password']!=$_POST['password_repeat']){
		$_SESSION['errors']['password'] = "Пароли не совпадают!";
	}
	//Проверка на уникальность логина;
	// $stmt = $mysqli->prepare("SELECT * FROM `users` WHERE `login` = ?");
	// $stmt->bind_param("s",$_POST["login"]);
	// $stmt->execute();
	// $result = $stmt->get_result();
	// // if($result){
	// //  	$_SESSION['errors']['login'] = "Такой логин уже существует, придумайте другой!";
	// //  }
	// var_dump($result->fetch_all(MYSQLI_ASSOC));
	//Кешируем пароль;
	$password = md5($_POST['password']);
	//Используем подготавливаемые запросы для защиты от SQL-инъекций;
	
	// $sql = sprintf("INSERT INTO `users` 
	// VALUES(NULL, '%s', '%s', '%s', '%s', '%s', '%s', '%s', '0')",
	// 	$_POST["login"], $_POST["name"], $_POST["patronymic"], $_POST["surname"],  
	// 	 $_POST["email"], $_POST["tel"], $_POST["password"] 
	// );
	// if(!$connect->query($sql))
	// 	return die("Ошибка добавления данных: ".$connect->error);

	// return header("Location:../../index.php?message=Вы зарегистрировались");

	if(!isset($_SESSION['errors'])){
	$stmt = $mysqli->prepare("INSERT INTO `users`(`id`,`login`,`name`,`patronymic`, 
	`surname`,`email`,`tel`,`password`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?)");

	$stmt->bind_param("sssssss",$_POST["login"],$_POST["name"],$_POST["patronymic"],
	$_POST["surname"],$_POST["email"],$_POST["tel"],$password);

	$stmt->execute();

	return header("Location:../../index.php?message=Вы зарегистрировались");
	}
	else header("Location: ../../registration.php"); 		

?>