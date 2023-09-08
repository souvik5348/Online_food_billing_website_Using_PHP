<html>
	<head>
    	<title> Sign In</title>
        <link rel="stylesheet" href="css/sign.css" />
        <link rel="shortcut icon" type="image/png" href="image/logo.png" />
        <style>
			.wrapper{
				width:100%;
				height:auto;
				background-image:url(image/banner4.jpg);
				background-size:cover;
				padding-top:20px;
			}
		</style>
    </head>
    <body>
    	<div class="wrapper">
        	<div class="main_box">
            	<div class="heading">
                	<h2>ADD YOUR RESTRUDENT</h2>
                </div>
            	<form name="f1" action="signdata.php" method="get">
                	<div class="name_box">
                		<p>User Name*</p>
                    	<input type="text" name="username" placeholder="pick a username" />
                    </div>
                    <div class="name_box">
                		<p>Password*</p>
                    	<input type="password" name="password" placeholder="password (must be 8 character)" />
                    </div>
            		<div class="name_box">
                		<p>Restrudent Name*</p>
                    	<input type="text" name="rname" placeholder="restrudent name (capital*)" />
                    </div>
                    <div class="name_box">
                		<p>Restrudent Address*</p>
                    	<input type="text" name="raddress" placeholder="permanent address" />
                    </div>
                    <div class="name_box">
                		<p>Region*</p>
                    	<input type="text" name="region" placeholder="region" />
                    </div>
                    <div class="name_box">
                		<p>Country*</p>
                    	<input type="text" name="country" placeholder="country" />
                    </div>
                    <div class="name_box">
                		<p>State*</p>
                    	<input type="text" name="state" placeholder="state" />
                    </div>
                    <div class="name_box">
                		<p>City*</p>
                    	<input type="text" name="city" placeholder="city" />
                    </div>
                    <div class="name_box">
                		<p>Zip Code*</p>
                    	<input type="number" name="zcode" placeholder="zip code" />
                    </div>
                    <div class="btn_box">
                    	<input type="submit" value="ADD"/>
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