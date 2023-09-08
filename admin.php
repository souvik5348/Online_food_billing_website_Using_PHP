<html>
	<head>
    	<title>Let's Eat</title>
        <link rel="shortcut icon" type="image/png" href="image/favicon.png"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/admin.css"/>
    </head>
    <body>
    	<div class="wrapper">
        	<div class="menu">
            	<div class="menu_logo">
                    	<img src="image/logo.png" />
                </div>
            	<div class="first_menu">
                    <a href="#">Home</a>
                    <a href="allrestrudent.php">Restrurants</a>
                    <a href="login.php">Dashboard</a>
                    <a href="about.php">About Us</a>
                    <a href="#contact">Contact Us</a>
                </div>
            </div>

            <!--<div class="second_menu">
                <p class="contact_info">
                	<a href="tel:7890569854">Call Us: +91 78905 69854</a>
                </p>
                <p class="email_info">
                	<a href="mailto:letseat@gmail.com">Email Us: letseat@gmail.com</a>
                </p>	
            </div>-->
        	<div class="banner_info">
            	<div class="banner_image">
        			<img src="image/banner1.jpg" />
                </div>
                <div class="banner_btn">
                	<input type="submit" value="ADD RESTRURANTS" onClick="restrudent();"/>
                    <script>
						function restrudent()
						{
							window.location="sign.php";
						}
					</script>
                </div>
             </div>
                <div class="first_heading">
                	<h1>Our Happy Customers</h1>
                </div>
                <div class="underline">--------------   ---</div>
                <div class="customer_name">
                	<div class="first_row">
                		<div class="res_image">
                    		<img src="image/r1.png"/>
                    	</div>
                        <div class="res_image">
                    		<img src="image/r2.png"/>
                    	</div>
                        <div class="res_image">
                    		<img src="image/r3.png"/>
                    	</div>
                        <div class="res_image">
                    		<img src="image/r4.png"/>
                    	</div>
                        <div class="res_image">
                    		<img src="image/r5.png"/>
                    	</div>
                     </div>
                     <div class="first_row">
                		<div class="res_image">
                    		<img src="image/r6.png"/>
                    	</div>
                        <div class="res_image">
                    		<img src="image/r7.png"/>
                    	</div>
                        <div class="res_image">
                    		<img src="image/r8.png"/>
                    	</div>
                        <div class="res_image">
                    		<img src="image/r9.png"/>
                    	</div>
                        <div class="res_image">
                    		<img src="image/r10.png"/>
                    	</div>
                     </div>
                     <div class="first_row">
                		<div class="res_image">
                    		<img src="image/r11.png"/>
                    	</div>
                        <div class="res_image">
                    		<img src="image/r15.png"/>
                    	</div>
                        <div class="res_image">
                    		<img src="image/r13.png"/>
                    	</div>
                        <div class="res_image">
                    		<img src="image/r14.png"/>
                    	</div>
                        <div class="res_image">
                    		<img src="image/r16.png"/>
                    	</div>
                     </div>
                </div>
                <div class="after_text">
                	<h2>Let's Eat</h2>
                    <p class="description">is a leading restaurant-tech company with a suite of products for Fine-Dine Restaurants,Pubs, Cafes,Revenue & Profits.</p>
                </div>
                <div class="second_heading">
                	<h1>Our Products</h1>
                </div>
                <div class="underline">--------------   ---</div>
                <div class="product_info">
                	<div class="product_image">
                    	<img src="image/p1.png"/>
                    </div>
                    <div class="product_text">
                    	<p class="product_title">
                        	Digital Menu
                        </p>
                        <p class="product_description">
                        	Digital Menu is a complete website and <br>customer engagement platform where<br> customers are presented with a dynamic 
                        </p>
                        <div class="button">
                            <p class="explore_btn">
                                <input type="submit" value="Explore Us" onClick="explore();"/>
                                <script>
									function explore()
									{
										window.location="about.php";
									}
								</script>
                            </p>
                            <p class="contact_btn">
                                <input type="submit" value="Contact Us" onClick="contact();">
                                <script>
									function contact()
									{
										window.location="footer.php";
									}
								</script>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="product_info1">
                	<div class="product_text1">
                    	<p class="product_title1">
                        	Go Direkt
                        </p>
                        <p class="product_description1">
             Allows customers to order directly using<br>  your digital menu thus saving commissions<br> aggregators Operates seamessly with state<br> of the art contactless QR code ordering<br> system that integrates with our POS billing
                        </p>
                        <div class="button1">
                            <p class="explore_btn1">
                                <input type="submit" value="Explore Us" onClick="explore();"/>
                                <script>
									function explore()
									{
										window.location="about.php";
									}
								</script>
                            </p>
                            <p class="contact_btn1">
                                <input type="submit" value="Contact Us" onClick="contact();"/>
                                <script>
									function contact()
									{
										window.location="footer.php";
									}
								</script>
                            </p>
                         </div>
                    </div>
                	<div class="product_image1">
                    	<img src="image/p2.png"/>
                    </div>
                </div>
                <div class="product_info2">
                	<div class="product_image2">
                    	<img src="image/p3.png"/>
                    </div>
                    <div class="product_text2">
                    	<p class="product_title2">
                        	Billing Software
                        </p>
                        <p class="product_description2">
                        	User friendly Point-of-Sale & billing software to manage dine-in, delivery and take away orders along with back office menu management. This would include options to integrate with Zomato / Swiggy. It will also generate numerous reports to give you a complete end-to-end visibility of all your operations.
                        </p>
                        <div class="button2">
                            <p class="explore_btn2">
                                <input type="submit" value="Explore Us" onClick="explore();"/>
                                <script>
									function explore()
									{
										window.location="about.php";
									}
								</script>
                            </p>
                            <p class="contact_btn2">
                                <input type="submit" value="Contact Us" onClick="contact();"/>
                                <script>
									function contact()
									{
										window.location="footer.php";
									}
								</script>
                            </p>
                         </div>
                    </div>
                </div>
             <!--/*      <div class="product_info3">
                	<div class="product_text3">
                    	<p class="product_title3">
                        	Owners App
                        </p>
                        <p class="product_description3">
            Remote access dashboard for owners to monitor the status of the operations. Through the restaurant management system, the dashboard provides an accurate view of the occupancy and multiple reports.
                        </p>
                        <p class="explore_btn3">
                        	<input type="submit" value="Explore Us">
                        </p>
                        <p class="contact_btn3">
                        	<input type="submit" value="Contact Us">
                        </p>
                    </div>
                	<div class="product_image3">
                    	<img src="image/p5.png"/>
                    </div>
                </div>
                <div class="product_info4">
                	<div class="product_image4">
                    	<img src="image/p8.png"/>
                    </div>
                    <div class="product_text4">
                    	<p class="product_title4">
                        	Customer Feedback
                        </p>
                        <p class="product_description4">
                        	The feedback collection system enables the management to monitor individual item feedback which can help improve food quality or address recurring issues with a particular item. It also provides individual server performance, which helps is making decisions to improve overall customer experience.
                        </p>
                        <p class="explore_btn4">
                        	<input type="submit" value="Explore Us">
                        </p>
                        <p class="contact_btn4">
                        	<input type="submit" value="Contact Us">
                        </p>
                    </div>
                </div>*/-->
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
             <div class="footer" id="contact">
					<?php include 'footer.php';?>           	
             </div>
        </div>
    </body>
</html>