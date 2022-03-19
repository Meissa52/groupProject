<?php
	
	include('views/header.php');
	include('views/sidebar.php');

?>
<div class="container">
	
<script type="text/javascript">
  

  function Fillimg() {
  
      document.getElementById("imgPath").value ="uploads/" + localStorage.getItem("Path").substr(12);
    
     document.getElementById("docPath").value ="doc/" + localStorage.getItem("DocPath").substr(12);


  
}
</script>

  <div class="row center">
    <div class="col s12 m12 l12">
      <h3>Add Tutorial Form</h3>
    </div>
  </div>
  <div class="row">
    <div class="col s12 m12 l12">
      <form onchange="Fillimg()" action="js/insert.php" method="post">
        
        <label>Title</label>
        <input type="text" name="name">
        <label>Short Description</label>
        <input type="text" name="desc">
        <label>Link</label>
        <input type="text" id="docPath" name="docPath">
        <label>Image</label>
        <input type="text" id="imgPath" name="imgPath">
        <div class="row center">
          <input type="submit" name="">
        </div>
      </form>
    </div>
  </div>
  <br />
  <br />
</div>
<?php
	include("views/footer.php");
?>