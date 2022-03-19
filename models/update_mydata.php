<?php
$tutId = trim(filter_input(INPUT_POST, 'tutId', FILTER_SANITIZE_STRING));
$name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING));
$shortDesc = trim(filter_input(INPUT_POST, 'shortDesc', FILTER_SANITIZE_STRING));
$imgPath = trim(filter_input(INPUT_POST, 'imgPath', FILTER_SANITIZE_STRING));
$docPath = trim(filter_input(INPUT_POST, 'docPath', FILTER_SANITIZE_STRING));



if (empty($name) || empty($shortDesc) || empty($imgPath) || empty($docPath)) {
	$error = "Invalid data entry. Please check all fields and try again.";
	//include ('../views/error.php');
}
else {
	require "database.php";
	
	$statement = $var_db->prepare('UPDATE tbltutorial SET name = :name, shortDesc = :shortDesc, imgPath = :imgPath, docPath = :docPath WHERE tutId = :tutId');

	$statement->bindParam(':tutId',$tutId);
	$statement->bindParam(':name',$name);
	$statement->bindParam(':shortDesc',$shortDesc);
	$statement->bindParam(':imgPath',$imgPath);
	$statement->bindParam(':docPath',$docPath);
	$statement->execute();

	header('Location: ../MyData.php');
}
?>