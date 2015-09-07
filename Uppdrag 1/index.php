
<!DOCTYPE html>
	<html>
		<head>
			<link href="CSS/style.css" rel="stylesheet"/>
			<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
			<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
			<link href='https://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
			<meta charset="utf-8">
			<title>T4 Hemsida</title>
			<link rel="icon" type="image/png" href="/Resources/t4icon32x32.png" sizes="32x32">
		</head>
		<body>
			<nav id="meny">
				<ul>
					<li id="knuff"><a href="index.php?page=om">Om mig</a></li>
					<li><a href="index.php?page=project">Projektet</a></li>
					<li><a href="index.php?page=why">Varför?</a></li>
					<li><a href="index.php?page=HTML">HTML&CSS </a></li>
					<li><a href="index.php?page=omw">Webbplatsen</a></li>
					<li><a href="index.php?page=tid">Tidsplan</a></li>
				</ul>
			</nav>
			<header> 
				<img src="Resources/sunset-32.png" alt="solnedgång"> 
			</header>
<?php
	
	if(isset($_GET['page'])) {
		$page = $_GET['page'];

	if($page=="project")
		$file = "project.html";
	else if($page=="why")
		$file = "why.html";
	else if($page=="HTML")
		$file = "html.html";
	else if($page=="omw")
		$file = "omw.html";
	else if($page=="tid")
		$file = "Tidsplan.html";
	else
		$file = "Home.html"; 

	include $file; 	
	}
	
?>
		<footer id="back">&copy; Robin Saverstam</footer>