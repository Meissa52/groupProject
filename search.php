<?php
	
	include('views/header.php');
	include('views/sidebar.php');

?>
	<div class="container">


		 <script type="text/javascript">
    window.onload = loadDoc();


    function loadDoc() {
    var search = localStorage.getItem("search")
    var xhttp = new XMLHttpRequest();
     xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("result").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "js/searchtut.php?q=" + search, true);
  xhttp.send();

}

  </script>

  
		



<div id="result"></div>
	</div>
<?php
	include("views/footer.php");
?>