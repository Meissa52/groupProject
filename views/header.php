<!DOCTYPE html>
<html lang="en">
<head>
	<title>ASITHelp</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="css/format.css" type="text/css" rel="stylesheet" />
</head>
<body>
	<nav role="navigation" class="indigo darken-4">
		<div class="nav-wrapper container">
			<a href="index.php"><img src="images/logo.png" class="hide-on-med-and-down" id="siteLogo"/></a>
  			<a href="index.php" class="brand-logo title white-text center">AS IT Help</a>
  			<ul class="right hide-on-med-and-down">
  				<li>
  					<form onchange="savesearch()" onsubmit="window.location.href = 'search.php'; return false;">
      				 <div class="input-field black-text">
      				    <input id="search" type="search" required>
      				    <label class="label-icon white-text" for="search"><i class="material-icons white-text">search</i></label>
         				 <i class="material-icons white-text">close</i>
       					 </div>
     				 </form>
     			</li>
  			</ul>
  			<ul id="mobile-nav" class="sidenav">
  				<li><input id="icon_prefix" type="text" class="validate black-text" placeholder="Search"></li>
				<li><a href="schedules.php">Schedule</a></li>
				<li><div class="divider"></div></li>
				<li><a href="tutorials.php">Tutorials</a></li>
				<li><div class="divider"></div></li>
				<li><a href="inserttut.php">Add Tutorial</a></li>
				<li><div class="divider"></div></li>
				<li><a href="MyData.php">Edit/Delete Tutorial</a></li>
				<li><div class="divider"></div></li>
			</ul>

			<a href="#" data-target="mobile-nav" class="sidenav-trigger white-text"><i class="material-icons">menu</i></a>
		</div>
	</nav>