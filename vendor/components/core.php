<?php
    session_start();
    //Подключение к базе данных;
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $connect = new mysqli("localhost", "root", "", "mavis");
	$connect->set_charset("utf8");

	if($connect->connect_error)
		die("Ошибка подключения: ". $connect->connect_error);
?>