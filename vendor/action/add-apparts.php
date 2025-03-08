<?php
include "../components/core.php";
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
	$stmt = $connect->prepare("INSERT INTO `apparts` SET `project_id`=?, `adress`=?, 
    `number`=?, `floor`=?, `type_id`=?, `img`=?, `price`=?, `status_id`=? ");
	$stmt->bind_param("ssssssss",$_POST["project"],$_POST["addres"],$_POST["number"],
    $_POST["floor"],$_POST["type"],$new_name,$_POST["price"],$_POST["status"]);
	$stmt->execute();

	$_SESSION['massege']['project'] = "Данные успешно изменены!";
    
	header("Location:../../apparts-admin.php");
	}
	else{
        header("Location: ../../apparts-admin.php");  
    }
    ?>