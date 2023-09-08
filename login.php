<html>
	<head>
    	<title>Let's Eat |  Login</title>
        <link rel="stylesheet" href="css/login.css" />
        <link rel="shortcut icon" type="image/png" href="image/logo.png" />
        <style>
			.wrapper{
				width:100%;
				height:100vh;
				background-image:url(image/banner2.jpg);
				background-size:cover;
				padding-top:200px;
			}
		</style>
    </head>
    <body>
    	<div class="wrapper">
        	<div class="box_main">
            	<div class="heading">
                	<h1>Login</h1>
                </div>
                <form name="f1" action="logindata.php" method="get">
                	<div class="userbox">
                   		<input type="number" name="rid" placeholder="restrudent id" />
                	</div>
            		<div class="userbox">
                   		<input type="text" name="username" placeholder="username" />
                	</div>
                	<div class="passwordbox">
                    	<input type="password" name="password" placeholder="password"/>
                 	</div>
                 	<div class="btnbox">
                    	<input type="submit" value="Log In" />
                 	</div>
               	</form>
                <div class="btnbox">
                    	<input type="submit" value="Home" onClick="back();" />
                 </div>
                    <script>
						function back()
						{
							window.location="admin.php";
						}
		    </script>
                    <div class="link">
                 		<a href="#">Forgot Password?</a>
                 	</div>
            </div>
        </div>
    </body>
</html>