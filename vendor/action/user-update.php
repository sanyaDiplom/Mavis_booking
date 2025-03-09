<?php
	include "../components/core.php";
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
    if($_SESSION['users']['status']==1){
	if(empty($_POST["password"])){
		$_SESSION['errors']['password'] = "Поле Пароль обязательно для заполнения!";
	}
	//Проверка на совпадение паролей;
	if($_POST['password']!=$_POST['password_repeat']){
		$_SESSION['errors']['password'] = "Пароли не совпадают!";
	}}
	//Кешируем пароль;
	$password = md5($_POST['password']);
	//Используем подготавливаемые запросы для защиты от SQL-инъекций;
	if(!isset($_SESSION['errors'])){
    if($_SESSION['users']['status']==1){
	$stmt = $connect->prepare("UPDATE users SET `login`=?, `name`=?,`patronymic`=?, 
	`surname`=?,`email`=?,`tel`=?,`password`=? WHERE `id`=?");
	$stmt->bind_param("ssssssss",$_POST["login"],$_POST["name"],$_POST["patronymic"],
	$_POST["surname"],$_POST["email"],$_POST["tel"],$password,$_SESSION['users']['id']);
    } else{
    $stmt = $connect->prepare("UPDATE users SET `login`=?, `name`=?,`patronymic`=?, 
	`surname`=?,`email`=?,`tel`=? WHERE `id`=?");
	$stmt->bind_param("sssssss",$_POST["login"],$_POST["name"],$_POST["patronymic"],
	$_POST["surname"],$_POST["email"],$_POST["tel"],$_SESSION['users']['id']);
    }
	$stmt->execute();

	$_SESSION['massege']['user-update'] = "Данные успешно изменены!";
    if($_SESSION['users']['status']!=1){
	header("Location:../../account.php");
    } else {header("Location:../../admin-account.php");}
	}
	else{
        if($_SESSION['users']['status']!=1){
            header("Location:../../account.php");
            } else {header("Location:../../admin-account.php");}  
    }  		
?>