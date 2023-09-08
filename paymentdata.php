<?php
			$host="localhost";
			$user="root";
			$pass="";
			$database="project";
			$name=$_GET['name'];
			$cnum=$_GET['cnum'];
			$expmonth=$_GET['expmonth'];
			$expyear=$_GET['expyear'];
			$cvv=$_GET['cvv'];
			$con=mysqli_connect($host,$user,$pass,$database);
			$sql="INSERT INTO payment_detail(name,cnum,expmonth,expyear,cvv) VALUES ('$name','$cnum', '$expmonth','$expyear','$cvv')";
			$rs=mysqli_query($con,$sql);
			echo"Data Inserted Succesfully";
?>