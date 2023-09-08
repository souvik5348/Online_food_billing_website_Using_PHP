<html>
	<head>
    	<title> Sign In</title>
        <link rel="stylesheet" href="css/payment.css" />
        <link rel="shortcut icon" type="image/png" href="image/logo.png" />
        <style>
			.wrapper{
				width:100%;
				height:100vh;
				background-image:url(image/banner4.jpg);
				background-size:cover;
				padding-top:50px;
			}
		</style>
    </head>
    <body>
    	<div class="wrapper">
        	<div class="main_box">
            	<div class="heading">
                	<h2>PAY ONLINE</h2>
                </div>
            	<form name="f1" action="paymentdata.php" method="get">
                	<div class="name_box">
                		<p>Card Name*</p>
                    	<input type="text" name="name" placeholder="souvik das" />
                    </div>
                    <div class="name_box">
                		<p>Card Number*</p>
                    	<input type="number" name="cnum" placeholder="1111-2222-3333-4444" />
                    </div>
            		<div class="name_box">
                		<p>Expiry Month*</p>
                    	<input type="text" name="expmonth" placeholder="January" />
                    </div>
                    <div class="name_box">
                		<p>Expiry year*</p>
                    	<input type="number" name="expyear" placeholder="2022" />
                    </div>
                    <div class="name_box">
                		<p>CVV*</p>
                    	<input type="password" name="cvv" placeholder="" />
                    </div>
                    <div class="btn_box">
                    	<input type="submit" value="MAKE PAYMENT"/>
                    </div>
                 </form>
                 <div class="btn_box">
                    	<input type="submit" value="Home" onClick="back();"/>
                 </div>
                 <script>
						function back()
						{
							window.location="admin.php";
						}
				 </script>
            </div>
        </div>
    </body>
</html>