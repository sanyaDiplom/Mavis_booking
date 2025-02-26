<?php
	include "core.php";

	//Проверка на уникальность логина;
	//Проверка на заполненость полей;
	//Проверка на совпадение полей;
	//Кешируем пароль;
	//Используем подготавливаемые запросы для защиты от SQL-инъекций;
	//Пока простой запрос, завтра переделаю;
	$sql = sprintf("INSERT INTO `users` 
	VALUES(NULL, '%s', '%s', '%s', '%s', '%s', '%s', '%s', '0')",
		$_POST["login"], $_POST["name"], $_POST["patronymic"], $_POST["surname"],  
		 $_POST["email"], $_POST["tel"], $_POST["password"] 
	);
	if(!$connect->query($sql))
		return die("Ошибка добавления данных: ". $connect->error);

	return header("Location:../../index.php?message=Вы зарегистрировались");
?>