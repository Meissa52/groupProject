<?php
	
	include('views/header.php');
	include('views/sidebar.php');

?>
	<div class="container">
		  
  <script type="text/javascript">
  

  function Fillimg(f) {
  
    
      localStorage.setItem("DocPath", f);

  
}
</script>

<div class="container">
  <div class="row center">
    <div class="col s12 m12 l12">
      <h3>Add Document</h3>
    </div>
  </div>
  <div class="row center">
    <div class="col s12 m12 l12">
		<form onchange="Fillimg(this.value)" id="pic" action="js/uploaddoc.php" method="post" enctype="multipart/form-data">
			Select Document to upload:
			<input onblur="Fillimg(this.value)" type="file" name="fileToUpload" id="fileToUpload">
			<input type="submit" name="">
		</form>
	</div>
  </div>
 </div>
</div>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />

<?php
	include("views/footer.php");
?>