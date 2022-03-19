<?php
$tutId = trim(filter_input(INPUT_POST, 'tutId', FILTER_VALIDATE_INT));


	require "database.php";
	
	$statement = $var_db->prepare('DELETE FROM tbltutorial WHERE tutId = :tutId');
	
	$statement->bindValue(':tutId', $tutId);
	$statement->execute();

	header('Location: ../MyData.php');
?>