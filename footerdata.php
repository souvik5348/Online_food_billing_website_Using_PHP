<html>
	<head>
		<title>Let's Eat</title>
        <link rel="shortcut icon" type="image/png" href="image/logo.png" />
	</head>
	<body>
		<?php
			$host="localhost";
			$user="root";
			$pass="";
			$database="project";
			$name=$_GET['name'];
			$phone=$_GET['phone'];
			$email=$_GET['email'];
			$city=$_GET['city'];
			$rname=$_GET['rname'];
			$message=$_GET['message'];
			$con=mysqli_connect($host,$user,$pass,$database);
			$sql="INSERT INTO user_info(name,phone, email,city,rname,message) VALUES ('$name','$phone' ,'$email','$city','$rname','$message')";
			$rs=mysqli_query($con,$sql);
			echo"Data Inserted Succesfully";
		?>
	</body>
</html>