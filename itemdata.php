<?php

	// Database configuration 
	$hostname = "localhost"; 
	$username = "root"; 
	$password = ""; 
	$dbname   = "project"; 
	 
	// Create database connection 
	$conn = mysqli_connect($hostname, $username, $password, $dbname); 
	 
	// Check connection
	if(mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  exit();
	}
	$userData = count($_POST["name"]);
	
	if ($userData > 0) {
	    for ($i=0; $i < $userData; $i++) { 
			if (trim($_POST['name'] != '') && trim($_POST['price'] != '')) {
				$name   = $_POST["name"][$i];
				$price  = $_POST["price"][$i];
				$category = $_POST["category"][$i];
				$rid = $_POST["rid"][$i];
				$query  = "INSERT INTO food_detail(rid,name,price,category) VALUES ('$rid','$name','$price','$category')";
				$result = mysqli_query($conn, $query);
			}
	    }
	   echo "Data Inserted Succesfully";
	}
	else{
	    echo "Please Enter user name";
	}

?>