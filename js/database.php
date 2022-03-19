<?php

	$dsn = "mysql:host=localhost;dbname=tutorials";

	$username = "root";

	$password = "";

	try {
		$db = new PDO($dsn, $username, $password);

	} catch(PDOException $error) {
		$error_message = $error->getMessage();
		exit();

	}
?>