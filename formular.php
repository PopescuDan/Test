<?php 
  include 'include.php';
  	if (isset($_POST['sub']))
	{
		if (isset($_POST))
		{
			if (isset($_POST["nume"])){
				$nume =$_POST["nume"];
				$nume = filter_var ($_POST["nume"], FILTER_SANITIZE_STRING);
				$nume = $conn->real_escape_string ($nume);
			}
			if (isset($_POST["autor"])){
				$autor =$_POST["autor"];
				$autor = filter_var($autor, FILTER_SANITIZE_STRING);
				$autor = $conn->real_escape_string($autor);
			}
			if (isset($_POST["an"])){
				$an =$_POST["an"];
				$an = filter_var($an, FILTER_SANITIZE_NUMBER_INT);
			}
			if (isset($_POST["nr_pagini"])){
				$nr_pagini = $_POST["nr_pagini"];
				$nr_pagini = filter_var($nr_pagini, FILTER_SANITIZE_NUMBER_INT);
			}
			$sql = "INSERT into carti set nume='$nume', autor='$autor', an='$an', nr_pagini='$nr_pagini'";
			$result = mysqli_query($conn, $sql);
		}
		// Introducere rand nou		
		header('location: test.php');
	}
   ?> 
<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<link type="text/css" rel="stylesheet" href="css/form.css"/>
</head>
<body>
	<div class="formular">
	<form method="POST">
		Nume:
		<br>
		<input type="text" name="nume">
		<br>
		Autor: 
		<br>
		<input type="text" name="autor">
		<br>
		An:
		<br>
		<input type="text" name="an">
		<br>
		Nr Pagini:
		<br>
		<input type="text" name="nr_pagini">
		<br><br>
		<input type="submit" name="sub">
		<div class="clear"></div>
	</form>
</div>
</body>

