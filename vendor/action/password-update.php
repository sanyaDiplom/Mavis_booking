<?php
include "../components/core.php";
	//Проверка на заполненость полей;
    
	if(empty($_POST["new_password"])||empty($_POST["old_password"])||empty($_POST["repeat_password"])){
		$_SESSION['errors']['password'] = "Поле Пароль обязательно для заполнения!";
	}
    //Проверка старого пароля;
    $stmt = $connect->prepare("SELECT `password` FROM users  WHERE `id`=?");
	$stmt->bind_param("s",$_SESSION['users']['id']);
	$stmt->execute();
    $result = $stmt->bind_result($old_password);
    $stmt->fetch();
    $from_form = md5($_POST['old_password']);
    if($from_form != $old_password){
        $_SESSION['errors']['password_1'] = "Неверный текущий пароль!";
    }
    $stmt->close();
	//Проверка на совпадение паролей;
	if($_POST['new_password']!=$_POST['repeat_password']){
		$_SESSION['errors']['password_2'] = "Пароли не совпадают!";
	}
	//Кешируем пароль;
	$password = md5($_POST['new_password']);
	//Используем подготавливаемые запросы для защиты от SQL-инъекций;
	if(!isset($_SESSION['errors'])){
    $stmt = $connect->prepare("UPDATE users SET `password`=?  WHERE `id`=?");
	$stmt->bind_param("ss",$password,$_SESSION['users']['id']);
	$stmt->execute();
	$_SESSION['massege']['update'] = "Данные успешно изменены!";
	header("Location:../../password.php"); 
    }else{
        
            header("Location:../../password.php");
          
    }  		
?>