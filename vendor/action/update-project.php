<?php
include "../components/core.php";
    //Проверка на заполненость полей;
	if(empty($_POST["name"])){
		$_SESSION['errors']['name'] = "Поле Название обязательно для заполнения!";
	}
	if(empty($_POST["description"])){
		$_SESSION['errors']['description'] = "Поле Описание обязательно для заполнения!";
	}
	// Проверка загруженного файла, что это изображение, 
    // сохранение файла в нужную директорию, а в БД путь до него;
    if(!empty($_FILES['img'])){
        $img = $_FILES['img'];
    } else{
        $_SESSION['errors']['img'] = "Поле Изображение обязательно для заполнения!";
    }
	if(!isset($_SESSION['errors'])){
	$stmt = $connect->prepare("UPDATE projects SET `name`=?, `descreption`=?,`img`=? WHERE `id`=?");
	$stmt->bind_param("ssss",$_POST["name"],$_POST["description"],$img,$_POST['id']);
	$stmt->execute();

	$_SESSION['massege']['project'] = "Данные успешно изменены!";
    
	    header("Location:../../projects-admin.php");
	 }
	 else{
        header("Location: ../../projects-admin.php");  
     }
    ?> 		    