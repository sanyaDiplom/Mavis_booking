<?php
include "../components/core.php";
    
    //Проверка на заполненость полей;
	if(empty($_POST["name"])){
		$_SESSION['errors']['name'] = "Поле Название обязательно для заполнения!";
	}
	if(empty($_POST["patronymic"])){
		$_SESSION['errors']['patronymic'] = "Поле Отчество обязательно для заполнения!";
	}
	// Проверка загруженного файла, что это изображение, 
    // сохранение файла в нужную директорию, а в БД путь до него;
    $img = $_FILES['name'];

	if(!isset($_SESSION['errors'])){
	$stmt = $connect->prepare("UPDATE projects SET `name`=?, `description`=?,`img`=? 
    WHERE `id`=?");
	$stmt->bind_param("sss",$_POST["name"],$_POST["description"],$img,$id);
	$stmt->execute();

	$_SESSION['massege']['user-update'] = "Данные успешно изменены!";
    
	header("Location:../../account.php");
	}
	else{
        header("Location: ../../account.php");  
    }
    ?> 		    