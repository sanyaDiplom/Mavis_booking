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
    }
    

	if(!isset($_SESSION['errors'])){
	$stmt = $connect->prepare("INSERT INTO projects SET `name`=?, `descreption`=?,`img`=?");
	$stmt->bind_param("sss",$_POST["name"],$_POST["description"],$img);
	$stmt->execute();

	$_SESSION['massege']['project'] = "Данные успешно изменены!";
    
	header("Location:../../projects-admin.php");
	}
	else{
        header("Location: ../../projects-admin.php");  
    }
    ?> 		    