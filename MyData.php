<?php
	
	include('views/header.php');
	include('views/sidebar.php');

?>

<?php

require "models/database.php";

$stmt = $var_db->prepare('SELECT * FROM tbltutorial');

$stmt->execute();

?>
	<div class="container">
		  

<div class="row center">
  <div class="col s12 m12 l12">
    <h1>Edit/Delete Tutorials Form</h1>
  </div>
</div>
<table>
  <tr>
    <th>Title</th>
    <th>Description</th>
    <th>Image</th>
      <th>Document</th>
    <th>Edit Record</th>
    <th>Delete Record</th>
  </tr>
  <?php foreach($stmt as $indStmt) : ?>
   <tr>
    <td><?php echo $indStmt['name'];?></td>
    <td><?php echo $indStmt['shortDesc'];?></td>
    <td><?php echo $indStmt['imgPath'];?></td>
      <td><?php echo $indStmt['docPath'];?></td>
    <td>
      <form action="editrecord.php" method="POST" id="update">  
        <input type="hidden" name="tutId" value="<?php echo $indStmt['tutId'];  ?>">
        <a class="waves-effect waves-light btn black-text" id="updateButton"><input type="Submit" id="updateButton" name="update">Edit</a>
      </form>
    </td>
    <td>
       <form action='models/delete_mydata.php' method="POST" id="delete">  
        <input type="hidden" name="tutId" value="<?php echo $indStmt['tutId']; ?>">
        <a class="waves-effect waves-light btn black-text" id="deleteButton"><input type="Submit" id="deleteButton" name="Delete">Delete</a>
      </form>
    </td>
  </tr>
  <?php endforeach; ?>   
</table>
<br />
<br />







	</div>
<?php
	include("views/footer.php");
?>