<?php
include("../components/core.php");
//Проверка на пустые поля;
if(empty($_POST['name'])){
    $_SESSION['errors']['call_name'] = "Поле Имя обязательно для заполнения!";
}
if(empty($_POST['tel'])){
    $_SESSION['errors']['call_tel'] = "Поле Телефон обязательно для заполнения!";
}
if(!empty($_POST["name"]) && !empty($_POST["tel"])){
    $stmt = $connect->prepare("INSERT INTO call_back(`name`,`phone_number`) VALUES (?, ?)");
	$stmt->bind_param("ss",$_POST["name"],$_POST["tel"]);
	$stmt->execute();
    $_SESSION['massage']['call'] = "Ваш телефон успешно сохранён! Мы перзвоним вам в ближайшее время!";
	return header("Location:../../index.php#footer");
} else {
    $_SESSION['massage']['call'] = "Ошибка сохранения данных! Попробуйте позже!";
    header("Location: ../../index.php#footer"); 
}
?>