<?php 

	// сервер бд
	$dbservername = "localhost";
	// имя пользователя бд
	$dbusername = "root";
	// пароль пользователя бд
	$dbpassword = "";
	// название бд
	$dbname = "test";

	// Подключение к базе данных
	$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
	
?>