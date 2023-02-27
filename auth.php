<?php
	$login = $_POST['login'];
	$psw = $_POST['psw'];
	$mysql = mysqli_connect('127.0.0.1', 'phpadmin', 'mypassword', 'user_base', 3306);
	$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$psw'");
	$user = $result->fetch_assoc();
	if($user == null) {
		echo "Пользователь не найден";
		exit();
	}
	setcookie('user', $user['login'], time() + 3600, "/");
	print_r($user);
	$mysql->close();
?>
