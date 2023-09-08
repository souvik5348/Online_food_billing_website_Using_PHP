<?php
			$host="localhost";
			$user="root";
			$pass="";
			$database="project";
			$rid=$_GET['rid'];
			$oname=$_GET['oname'];
			$oprice=$_GET['oprice'];
			$cname=$_GET['cname'];
			$cnumber=$_GET['cnumber'];
			$quantity=$_GET['quantity'];
			$payment=$_GET['payment'];
			$date=$_GET['date'];
			$con=mysqli_connect($host,$user,$pass,$database);
			$sql="INSERT INTO order_detail(rid,oname,oprice,cname,cnumber,quantity,payment,date)VALUES('$rid','$oname','$oprice','$cname','$cnumber','$quantity','$payment','$date')";
			$rs=mysqli_query($con,$sql);
			$total=$oprice*$quantity;
			$sql="SELECT * FROM restrudent_detail WHERE rid='$rid'";
			$rs=mysqli_query($con,$sql);
			$row=mysqli_fetch_array($rs);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Custom Style -->
    <link rel="stylesheet" href="css/bill.css">

    <title>Invoice..!</title>
    <style>
		.btn
		{
			margin-left:70px;
		}
		.btn input{
			padding-left:28px;
			padding-top:10px;
			padding-right:28px;
			padding-bottom:10px;
			border:1px solid #F08422;
			color:#FFFFFF;
			background-color:#F08422;
			outline:none;
			cursor:pointer;
			transition:1s;
		}
		
		.btn input:hover{
			background-color:#FFFFFF;
			color:#F08422;
		}
	</style>
</head>

<body>
    <div class="my-5 page" size="A4">
        <div class="p-5">
            <section class="store-user mt-5">
                <div class="col-10">
                    <div class="row bb pb-3">
                        <div class="col-7">
                            <p>Supplier,</p>
                            <h2><?php echo $row['rname']; ?></h2>
                            <p class="address"> <?php echo $row['raddress']; ?>, <br> <?php echo $row['city']; ?>, <br /><?php echo $row['zcode'];?>, <br><?php echo $row['state']; ?></p>
                            <div class="txn mt-2"><?php echo $row['region']; ?></div>
                        </div>
                    </div>
                    <div class="row extra-info pt-3">
                        <div class="col-7">
                            <p>Payment Method: <span><?php echo $payment; ?></span></p>
                        </div>
                        <div class="col-5">
                            <p>Deliver Date: <span><?php echo $date; ?></span></p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="product-area mt-4">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <td>Item Description</td>
                            <td>Price</td>
                            <td>Quantity</td>
                            <td>Total</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="media">
                                    <div class="media-body">
                                        <p class="mt-0 title"><?php echo $oname; ?></p>
                                    </div>
                                </div>
                            </td>
                            <td><?php echo $oprice; ?> Rs</td>
                            <td><?php echo $quantity; ?></td>
                            <td><?php echo $total; ?> Rs</td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <section class="balance-info">
                <div class="row">
                    <div class="col-8">
                        <p class="m-0 font-weight-bold"> Note: </p>
                        <p>This Is A Computerised Bill. Don't Change the Items which you have already odered. Otherwise You Will Pay for it.</p>
                    </div>             
                </div>
            </section>
        </div>
        <div class="btn">
        	<input type="submit" value="Print" onClick="print();"/>
        </div>
        <div class="btn">
        	<input type="submit" value="Order Again" onClick="back();"/>
        </div>
        <script>
			function back()
			{
				window.location="order.php";
			}
		</script>
    </div>
</body>
</html>