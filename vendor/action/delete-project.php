<?php
	include "../components/core.php";
	$id=$_GET["id"];
    if(empty($id)){
        $_SESSION['errors']['delete']="Ошибка удаления из базы!";
    }
    if(!isset($_SESSION['errors'])){
        $stmt = $connect->prepare("DELETE FROM projects WHERE `id`=?");
	    $stmt->bind_param("s",$id);
	    $stmt->execute();
	    $_SESSION['massege']['delete'] = "Проект удален!";
	    header("Location:../../projects-admin.php");
    }
    else{
        header("Location:../../projects-admin.php");
    }
	
?>