<?php
	
	include('views/header.php');
	include('views/sidebar.php');

?>
	<div class="container">
		  <script type="text/javascript">
  

		window.onload = loadDoc();
		function loadDoc() {
 		 var xhttp = new XMLHttpRequest();
  			xhttp.onreadystatechange = function() {
  		  if (this.readyState == 4 && this.status == 200) {
   		  document.getElementById("result").innerHTML = this.responseText;
  		  }
 		 };
 		 xhttp.open("GET", "js/gettut.php?q=" +  true);
 			 xhttp.send();
  

  
  
			}
</script>

<script type="text/javascript">
  	

  	  function savesearch() {
  
    
 	  localStorage.setItem("search", document.getElementById("search").value);
      
}

  	  function savesearch2() {
  
    
 	  localStorage.setItem("search", document.getElementById("search2").value);
      
}
  
  </script>
		



<div id="result"></div>
	</div>
<?php
	include("views/footer.php");
?>