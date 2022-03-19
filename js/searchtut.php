 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tutorials";


$query = $_GET["q"];





  


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


 

$sql = "SELECT * FROM tblTutorial WHERE name LIKE '%$query%' ";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
    


    while($row = $result->fetch_assoc()) {

    echo "
  <div class='section'>
  
  <div class='row'>

    <div class='col s2'>&nbsp;</div>
    <div class='col s4'> <h1 class = 'center'>".$row['name']."</h1><br><img style='width:100%;' src = ".$row['imgPath']."></div>
    <div class='col s4'><br><br><br><br><br><br><p>".$row['shortDesc']." <br> <a href = ".$row['docPath'].">Document</a></p></div>
    <div class='col s2'>&nbsp;</div>

  </div>

</div>
";






} 
}
$conn->close();





?> 


