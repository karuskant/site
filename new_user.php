<?php
	$email = filter_var(($_POST['email']), FILTER_VALIDATE_EMAIL);
	$login = $_POST['login'];
	$psw = $_POST['psw'];
	$psw_repeat = $_POST['psw-repeat'];
	$mysql = mysqli_connect('127.0.0.1', 'phpadmin', 'mypassword', 'user_base', 3306);
	echo $mysql->host_info . "\n";
	if ($mysql == false){
   		 print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
		}
	else {
    		print("Соединение установлено успешно");
	}
	$mysql->query("INSERT INTO `users` (`login`, `email`, `password`) VALUES('$login', '$email', '$psw')");
	mysqli_close($mysql);
?>
