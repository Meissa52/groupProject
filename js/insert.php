<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "tutorial");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Escape user inputs for security
$Name = $mysqli->real_escape_string($_REQUEST['name']);
$Desc = $mysqli->real_escape_string($_REQUEST['desc']);
$DocPath = $mysqli->real_escape_string($_REQUEST['docPath']);
$Imgpath = $mysqli->real_escape_string($_REQUEST['imgPath']);


 
// Attempt insert query execution
$sql = "INSERT INTO tbltutorial (name, shortDesc, imgPath, docPath) VALUES ('$Name', '$Desc', '$Imgpath', '$DocPath');";
if($mysqli->query($sql) === true){
	header('Location: ../tutorials.php');
    //echo "<h1>Sucess! <a href='../inserttut.php'>Add Another?</a>";
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();



?>