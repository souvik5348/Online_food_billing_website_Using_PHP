		<?php
			$host="localhost";
			$user="root";
			$pass="";
			$database="project";
			$username=$_GET['username'];
			$password=$_GET['password'];
			$con=mysqli_connect($host,$user,$pass,$database);
			$sql="SELECT * FROM restrudent_detail WHERE username='$username' AND password='$password'";
			$rs=mysqli_query($con,$sql);
			$row=mysqli_fetch_array($rs);
			if(empty($username)|| empty($password))
			{
				include 'error.php';
			}
			else
			{
		?>		
					<html>
						<head>
							<title>Restrudents</title>
							<link rel="stylesheet" href="css/restrudent.css" />
							<link rel="shortcut icon" type="image/png" href="image/logo.png" />
							<style>
								.order_info{
									width:100%;
									height:220px;;
									background-image:url(image/banner2.jpg);
									background-size:cover;
									background-color:rgba(0,0,0,0.2);
									margin-top:70px;
								}
								
								.order_info a{
									text-decoration:none;
									color:#FFFFFF;
									font-size:20px;
									font-family:calibri;
								}
								
								.order_info a:hover{
									color:#F08422;
								}
								
								.order_image{
									margin-left:330px;
								}
					
								.order_image img{
									width:50px;
									margin-top:40px;
								}
								
								.order_text{
									margin-left:400px;
									margin-top:-40px;
								}
								
								.phone_image{
									margin-left:330px;
								}
					
								.phone_image img{
									width:40px;
									margin-top:80px;
								}
								
								.phone_text{
									margin-left:400px;
									margin-top:-30px;
								}
								
								.offers_image{
									margin-left:640px;
								}
					
								.offers_image img{
									width:50px;
									margin-top:-150px;
								}
								
								.offers_text{
									margin-left:710px;
									margin-top:-140px;
								}
								
								.feedback_image{
									margin-left:650px;
								}
					
								.feedback_image img{
									width:50px;
									margin-top:80px;
								}
								
								.feedback_text{
									margin-left:720px;
									margin-top:-40px;
								}
								
								@media only screen and (max-width: 768px)
								{
									.order_info a{
										margin-left:-330px;
										font-size:18px;
									}
									
									.order_image{
										margin-left:20px;
									}
									
									.phone_image{
										margin-left:20px;
									}
									
									.feedback_image{
										margin-left:320px;
									}
									
									.offers_image{
										margin-left:320px;
									}
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
										<img src="image/phone.png" />
										<p>+91 788 788 9182</p>
										<input type="button" value="Contact Us" onClick="contact();" />
									</div>
                                    <script>
											function contact()
											{
												window.location="footer.php";
											}
									</script>
								</div>
								<div class="restrudent_info">
									<div class="restrudent_name">
										<h1><?php echo $row['rname'];?></h1>
									</div>
									<div class="restrudent_description">
										<p><?php echo $row['raddress'];?></p>
										<p><?php echo $row['region'];?></p>
										<p><?php echo $row['country'];?>  ,<?php echo $row['state'];?></p>
										<p><?php echo $row['city'];?>  ,<?php echo $row['zcode'];?></p>
									</div>
									<div class="restrudent_image">
										<img src="image/p1.png" />
									</div>
								</div>
								<div class="restrudent_category">
									<div class="category_heading">
										<h1>Our Category</h1>
									</div>
									<div class="underline1">------------   ---</div>
									<?php
										$host="localhost";
										$user="root";
										$pass="";
										$database="project";
										$con=mysqli_connect($host,$user,$pass,$database);
										$rid=$_GET['rid'];
										$sql="SELECT name,price FROM food_detail WHERE rid='$rid'";
										$rs=mysqli_query($con,$sql);
										while($row=mysqli_fetch_array($rs))
										{
									?>
										<div class="category_name">
											<p><?php echo $row['name'];?><br>
                                            	Rs: <?php echo $row['price'];?>/-</p>
										</div>
									<?php
										}
									?>
								</div>
								<div class="order_info">
									<div class="order_image">
										<img src="image/order.png" />
									</div>
									<div class="order_text">
										<a href="order.php">Order Placing</a>
									</div>
									<div class="phone_image">
										<img src="image/phone.png" />
									</div>
									<div class="phone_text">
										<a href="#">Call US</a>
									</div>
									<div class="offers_image">
										<img src="image/offer.png" />
									</div>
									<div class="offers_text">
										<a href="#">Check Offers</a>
									</div>
									<div class="feedback_image">
										<img src="image/offers.png" />
									</div>
									<div class="feedback_text">
										<a href="item.php">Add Items</a>
									</div>
								</div>
								<div class="third_heading">
									  <h3>Tips,Tricks And Expert Opinions</h3>
								   </div>
									<div class="underline">--------------   ---</div>
									<div class="box_info">
										<div class="box_main">
											<div class="box_image">
												<img src="image/t1.jpg"/>
											</div>
											<div class="box_title">
												<p>Why a contact less ordering system is a must have solution for post- lockdown recovery for your restaurant?</p>
											</div>
										<div class="box_main1">
											<div class="box_image1">
												<img src="image/t2.jpg"/>
											</div>
											<div class="box_title1">
												<p>Why a contact less ordering system is a must have solution for post- lockdown recovery for your restaurant?</p>
											</div>
										</div>
								   </div>
								   <div class="footer">
										<?php include 'footer.php';?>
								   </div>
							</div>
						</body>
					</html>
			<?php		
            	}
			?>