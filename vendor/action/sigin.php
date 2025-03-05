<?php
include "../components/core.php";
//Если поля не пустые делаем запрос в БД;
if(!empty($_POST["login"]) && !empty($_POST["password"])){
    $password = md5($_POST['password']);
    $stmt = $connect->prepare("SELECT * FROM `users` WHERE `login`=? AND `password`=?");
	$stmt->bind_param("ss",$_POST["login"], $password);
	$stmt->execute();
	$result = $stmt->get_result();
    if($result->num_rows == 0){
        $_SESSION['massage']['auto'] = "Неверный логин или пароль!";
    }
	$user = $result->fetch_assoc();
    $_SESSION['users']['id'] = $user['id'];
    $_SESSION['users']['status'] = $user['status'];
    // var_dump($_SESSION['users']);
    }
    if(!isset($_SESSION['massage'])){
	
	return header("Location:../../index.php");
	}
	else header("Location: ../../sigin.php"); 
?>