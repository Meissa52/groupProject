<?php
	
	include('views/header.php');
	include('views/sidebar.php');

?>
	<div class="container">
		 <?php
$tutID = $_POST['tutId'];

require "models/database.php";


$stmt = $var_db->prepare('SELECT * FROM tbltutorial WHERE tutId = :tutId');
$stmt->bindParam(':tutId', $tutID);

$stmt->execute();

$indStmt = $stmt->fetch();

?>


  
 

 <div class="row">
    <form method="POST" action="models/update_mydata.php" class="col s12">
  <div class="row">
        <div class="input-field col s12">
          <input name="tutId" type="hidden"  value="<?php echo $indStmt['tutId'];?>">
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="name" type="text" class="validate" value="<?php echo $indStmt['name'];?>">
          <label for="name">Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="shortDesc" type="text" class="validate" value="<?php echo $indStmt['shortDesc'];?>">
          <label for="shortDesc">shortDesk</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="imgPath" name="imgPath" type="text" class="validate" value="<?php echo $indStmt['imgPath'];?>">
          <label for="imgPath">imgPath</label>
        </div>
      </div>
         <div class="row">
        <div class="input-field col s12">
          <input id="docPath" name="docPath" type="text" class="validate" value="<?php echo $indStmt['docPath'];?>">
          <label for="docPath">docPath</label>
        </div>
      </div>
      <input type="submit" value="Update"/>
    </form>
  </div>
  



	</div>
<?php
	include("views/footer.php");
?>