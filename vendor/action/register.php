<?php
	include "../components/core.php";
	//Сохраняем данные из формы на случай наличия ошибок;
	if(isset($_POST)){
		foreach($_POST as $key=> $value){
		   $_SESSION['regform'][$key] = $value;
		}
	}
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
	$stmt = $connect->prepare("SELECT * FROM `users` WHERE `login`=?");
	$stmt->bind_param("s",$_POST["login"]);
	$stmt->execute();
	$result = $stmt->get_result();
	$user = $result->fetch_assoc();
	if($user){
		$_SESSION['errors']['newlogin'] = "Такой логин уже существует! Придумайте другой логин!";
	}
	//Кешируем пароль;
	$password = md5($_POST['password']);
	//Используем подготавливаемые запросы для защиты от SQL-инъекций;
	if(!isset($_SESSION['errors'])){
	$stmt = $connect->prepare("INSERT INTO users(`login`,`name`,`patronymic`, 
	`surname`,`email`,`tel`,`password`) VALUES (?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("sssssss",$_POST["login"],$_POST["name"],$_POST["patronymic"],
	$_POST["surname"],$_POST["email"],$_POST["tel"],$password);
	$stmt->execute();

	unset($_SESSION['regform']);
	$_SESSION['massage']['reg'] = "Вы успешно зарегистрированы!";
	header("Location:../../sigin.php");
	}
	else header("Location: ../../registration.php"); 		
?>