<?php
include "../components/core.php";
	// Проверка загруженного файла, что это изображение, 
    // сохранение файла в нужную директорию, а в БД путь до него;
    if(!empty($_FILES['img'])){
        $img = $_FILES['img'];
        if('image' != substr($img['type'], 0, 5)){
            $_SESSION['errors']['img'] = "Неверный формат файла!";
        } else {
         if(substr($img['type'], 6)!="svg+xml"){
         $name = uniqid().'.'.substr($img['type'], 6);
         }
         else{
        $name = uniqid().'.'.substr($img['type'], 6,3);
         }
        move_uploaded_file($img['tmp_name'], '../../assets/img/'.$name);
        $new_name = 'assets/img/'.$name;
    }
    } else{
        $_SESSION['errors']['img'] = "Поле Изображение обязательно для заполнения!";
    }
	if(!isset($_SESSION['errors'])){
	$stmt = $connect->prepare("UPDATE apparts SET `project_id`=?, `corpus`=?, 
    `number`=?, `floor`=?, `type_id`=?, `img`=?, `price`=?, `status_id`=?, `section`=?, 
    `square_1`=?, `square_2`=?, `ceiling_height`=?, `finishing`=? WHERE `id`=?");
	$stmt->bind_param("ssssssssssssss",$_POST["project"],$_POST["corpus"],$_POST["number"],
    $_POST["floor"],$_POST["type"],$new_name,$_POST["price"],$_POST["status"],
    $_POST["section"],$_POST["square_1"],$_POST["square_2"],$_POST["ceiling_height"],$_POST["finishing"],$_POST["id"]);
	
    $stmt->execute();

	$_SESSION['massege']['img'] = "Данные успешно изменены!";
    
	    header("Location:../../apparts-admin.php");
	 }
	 else{
        header("Location: ../../update-apparts.php");  
     }
    ?>