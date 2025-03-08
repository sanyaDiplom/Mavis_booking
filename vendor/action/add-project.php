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
        if('image' != substr($img['type'], 0, 5)){
            $_SESSION['errors']['img'] = "Неверный формат файла!";
        }
        $name = uniqid().'.'.substr($img['type'], 6);
        move_uploaded_file($img['tmp_name'], '../../assets/img/'.$name);
        $new_name = 'assets/img/'.$name;
    }else{
        $_SESSION['errors']['img'] = "Поле Изображение обязательно для заполнения!";
    }
	if(!isset($_SESSION['errors'])){
	$stmt = $connect->prepare("INSERT INTO projects SET `name`=?, `descreption`=?,`img`=?");
	$stmt->bind_param("sss",$_POST["name"],$_POST["description"],$new_name);
	$stmt->execute();

	$_SESSION['massege']['project'] = "Данные успешно добавлены!";
    
	header("Location:../../projects-admin.php");
	}
	else{
        header("Location: ../../projects-admin.php");  
    }
    ?> 		    