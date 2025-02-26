<?php
    session_start();
    //Подключение к базе данных;
    $connect = new mysqli("localhost", "root", "", "mavis");
	$connect->set_charset("utf8");

	if($connect->connect_error)
		die("Ошибка подключения: ". $connect->connect_error);
?>