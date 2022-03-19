

<?php
  
  include('views/header.php');
  include('views/sidebar.php');

?>
<script type="text/javascript">
  

  function Fillimg(f) { 
      localStorage.setItem("Path", f);
  }
</script>

 
<div class="container">
  <div class="row center">
    <div class="col s12 m12 l12">
      <h3>Add Image</h3>
    </div>
  </div>
  <div class="row center">
    <div class="col s12 m12 l12">
      <form onchange="Fillimg(this.value)" id="pic" action="js/upload.php" method="post" enctype="multipart/form-data">
          Select image to upload:
          <input onblur="Fillimg(this.value)" type="file" name="fileToUpload" id="fileToUpload">
          <input type="submit" name="">
      </form>
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
</div>



<?php
  include('views/footer.php');
?>






