 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tutorial";





// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


 

$sql = "SELECT * FROM tblTutorial";
$result = $conn->query($sql);



if ($result->num_rows > 0) {


    while($row = $result->fetch_assoc()) {

    echo "
  <div class='section'>
  
  <div class='row'>
    <div class='col s12 m12 l12'>
      <div class='row'>
        <div class='col s12 m12 l12'>
          <h1 class = 'center'>".$row['name']."</h1>
        </div>
      </div>
      <div class='row'>
        <div class='col s6 m6 l5'>
          <img style='width:100%;' src = ".$row['imgPath'].">
        </div>
        <div class='col s4'>
          <p>".$row['shortDesc']." 
            <br> 
            <a href = ".$row['docPath'].">Document</a>
          </p>
        </div>
      </div>
      <div class='col s2'>&nbsp;</div>
    </div>
  </div>

</div>
";
        
    }
    
} else {
    echo "0 results";
}
$conn->close();





?> 






