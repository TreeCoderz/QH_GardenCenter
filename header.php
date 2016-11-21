<?php
	session_start();
	date_default_timezone_set('America/Los_Angeles');
	
	$query = $_GET['query'];
		
	if($query == 'Search Inventory..'){
		header('Location: search.php');
	}
	if($query !== ''){
		$conn = mysqli_connect('localhost', 'root', 'root', 'QHGC');
	
		if(!$conn){
			die('Connection failed'.mysqli_connect_error());
		}
	}
	include 'submit.php';	
	
?>

<html>
	<head>
		<title>Quartz Hill Garden Center</title>
		<link rel="stylesheet" href="style.css" media="screen" />
		<script type='text/javascript'>	
			function active(){
				var search = document.getElementById('searchBar');	
				if(search.value == 'Search Inventory..'){					
					search.value = '';
					search.placeholder = 'Search Inventory..';
				}
			}
		
			function inActive() {
				var search = document.getElementById('searchBar');	
				if(search.value == ''){
					search.value = 'Search Inventory..';
					search.placeholder = '';
				}
			}
		</script>
	</head>
	
<body>
	<div id='nav'>
	
	<form action='search.php' method='GET' id='finder'>
		<input type='text' name='query' value='Search Inventory..' placeholder='' id='searchBar' onMouseDown='active();' onBlur='inActive();'/><input type='submit' value='Search' id='searchBtn'/>
	</form>
	<div id='tabs'>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="supplies.php">Supplies</a>
				<ul>
					<li><a href="#">Flowers</a></li>
					<li><a href="#">Trees</a></li>
					<li><a href="#">Plants</a></li>
					<li><a href="#">Hardware</a></li>
				</ul>
			</li>
			<li><a href="about.php">About</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
	</div>
		<div id='hours'>
			Mon-Sat: <strong>8am-5pm</strong><br/>Sunday: <strong>9am-4pm</strong>
		</div>
	</div>
