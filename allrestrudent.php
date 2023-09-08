<?php
			$host="localhost";
			$user="root";
			$pass="";
			$database="project";
			$con=mysqli_connect($host,$user,$pass,$database);
			$sql="SELECT * FROM restrudent_detail";
			$rs=mysqli_query($con,$sql);
?>
<html>
    <head>
        <title>Restrurants</title>
        <link rel="stylesheet" href="css/allrestrudent.css">
        <link rel="shortcut icon" type="image/png" href="image/logo.png" />
        <style>
			.wrapper{
    			width: 100%;
    			height: auto;
			}

		</style>
    </head>
    <body>
        <div class="wrapper">
        	<div class="menu">
            	<div class="menu_logo">
                    	<img src="image/logo.png" />
                </div>
            	<div class="first_menu">
                    <a href="admin.php">Home</a>
                    <a href="allrestrudent.php">Restrurants</a>
                    <a href="login.php">Dashboard</a>
                    <a href="about.php">About Us</a>
                    <a href="#contact">Contact Us</a>
                </div>
            </div>
            <p class="main-title">OUR RESTRURANTS</p>
            <div class="main-box">
            <?php
				while($row=mysqli_fetch_array($rs))
				{
			?>
            	<div class="box-main">
                    <div class="box-text">
                        <p class="text-title">
                            <?php echo $row['rname'];?>
                        </p>
                        <!--<p class="offer1">Flat 20% OFF</p>-->
                    </div>
                    <div class="box-description">
                        <p class="text-description">
                            <?php echo $row['raddress'];?>
                        </p>
                       	<p class="btn-description"><?php echo $row['region'];?></p>
                        <p class="btn-description"><?php echo $row['country'];?>   ,<?php echo $row['state'];?></p>
                        <p class="btn-description"><?php echo $row['city'];?>   ,<?php echo $row['zcode'];?></p>
                        <p class="title-btn"><a href="sign.php"><button>ADD YOURS!</button></a></p>
                    </div>
                </div>
            <?php
				}
			?>
            </div>
        </div>
    </body>
</html>