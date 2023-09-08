<?php
			$host="localhost";
			$user="root";
			$pass="";
			$database="project";
			$username=$_GET['username'];
			$password=$_GET['password'];
			$rname=$_GET['rname'];
			$raddress=$_GET['raddress'];
			$region=$_GET['region'];
			$country=$_GET['country'];
			$state=$_GET['state'];
			$city=$_GET['city'];
			$zcode=$_GET['zcode'];
			$ip=$_SERVER['REMOTE_ADDR']; 
			$con=mysqli_connect($host,$user,$pass,$database);
			$sql="INSERT INTO restrudent_detail(username,password,rname,raddress,region,country,state,city,zcode,ip)VALUES('$username','$password','$rname','$raddress','$region','$country','$state','$city','$zcode','$ip')";
			$rs=mysqli_query($con,$sql);
			$sql="SELECT rid FROM restrudent_detail ORDER BY rid DESC";
			$rs=mysqli_query($con,$sql);
			$row=mysqli_fetch_array($rs);
			echo"Data Inserted Succesfully";
?>

<html>
	<head>
    	<title>Sign In</title>
        <link rel="shortcut icon" type="image/png" href="image/logo.png" />
        <style>
			.dashboard{
				margin-top:30px;
				margin-left:400px;
				text-align:center;
				background-color:#F08422;
				border:1px solid #F08422;
				width:40%;
				height:30px;
				transition:1s;
			}

			.dashboard:hover{
				background-color:#FFFFFF;
			}
			
			.dashboard a{
				color:#FFFFFF;
				font-family:calibri;
				font-size:18px;
				text-decoration:none;
			}
			
			
			.dashboard a:hover{
				color:#F08422;
			}
			
			.info{
				margin-top:20px;
			}
			
			.info p{
				text-align:center;
				font-family:calibri;
				font-size:18px;
			}
			
			@media only screen and (max-width: 768px)
			{
				.dashboard{
					margin-left:150px;
				}
			}
		</style>
    </head>
    <body>
    	<div class="dashboard">
        	<a href="item.php">ADD YOUR FOOD ITEMS</a>
        </div>
        <div class="dashboard">
        	<a href="admin.php">BACK TO HOME</a>
        </div>
        <div class="info">
        	<p>Restrudent id: <?php echo $row['rid'];?></p>
            <p>Please remember this id for sign & login</p>
        </div>	
    </body>
</html>