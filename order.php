<html>
	<head>
    	<title>Order</title>
        <link rel="stylesheet" href="css/order.css" />
        <link rel="shortcut icon" type="image/png" href="image/logo.png" />
        <style>
			.wrapper{
				width:100%;
				height:805px;
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
                	<h2>ORDER MEMO</h2>
                </div>
            	<form name="f1" action="orderdata.php" method="get">
            		<div class="name_box">
                		<p>Restrudent ID*</p>
                    	<input type="text" name="rid" placeholder="restrudent id" />
                    </div>
                    <div class="name_box">
                		<p>Order Name*</p>
                    	<input type="text" name="oname" placeholder="order name" />
                    </div>
                    <div class="name_box">
                		<p>Order Price*</p>
                    	<input type="number" name="oprice" placeholder="order name" />
                    </div>
                    <div class="name_box">
                		<p>Customer Name*</p>
                    	<input type="text" name="cname" placeholder="customer name" />
                    </div>
                    <div class="name_box">
                		<p>Phone Number*</p>
                    	<input type="number" name="cnumber" placeholder="customer number" />
                    </div>
                    <div class="name_box">
                		<p>Quantity*</p>
                    	<input type="number" name="quantity" placeholder="quantity" />
                    </div>
                    <div class="name_box">
                		<p>Payment Method*</p>
                    	<input type="text" name="payment" placeholder="payment" />
                    </div>
                    <div class="name_box">
                		<p>Order Date*</p>
                    	<input type="date" name="date" />
                    </div>
                    <div class="btn_box">
                    	<input type="submit" value="Order"/>
                    </div>
                 </form>
            </div>
        </div>
    </body>
</html>