<!DOCTYPE html>
<html>
<head>
  <link rel="icon" type="image/png" href="pictures/logo.png" />
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
  <script src="jquery-3.2.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
  <div class="row">
    <div class="col-md-3">
      <nav class="w3-bar-block w3-collapse" style="width:250px" id="mySidebar">
        <div class="w3-container w3-display-container w3-padding-16">
          <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
          <img src="pictures/logo.png" style="width:200px;height:100px;">
        </div>
      </nav>
    </div>

    <div class="col-md-9">
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#"></a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="about-us.html">About Us</a></li>
            <li><a href="searchByCategory.php?Category=All">Product Categories </a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
          <?php

          session_start(); 
          $emailid = $_SESSION['emailid'];
          $password = $_SESSION['password'];


          if (is_null($emailid)) {

            ?>

            <ul class="nav navbar-nav navbar-right">
              <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
              <li><a href="signin.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>

            <?php
                //login and sign up
          } else {
                //logout
            ?>

            <ul class="nav navbar-nav navbar-right">
             <li>
              <p style="color: white;padding-top: 15px;
              ;"><?php echo "HI  $emailid"; ?></p>
            </li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
          </ul>

          <?php
        }
        ?>
      </div>
    </nav>

    <form action="searchByTitle.php" method="get">
      <div class="input-group custom-search-form">
        <input type="text" class="form-control" name="query" value="">
        <span class="input-group-btn">
          <button class="btn btn-default" type="search">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>    
    </form>
  </div>
</div>
<br/>

<!--?php

 session_start();
 extract($_POST);
 extract($_SESSION);
 
require('includes/config.php');
              if(isset($submit))
	{
	$query="insert into shipping_details(name,address,postal_code,city,state,phone,f_id) values('$name','$address','$pc','$city','$state','$phone','$uid')";
	
	$res=mysqli_query($conn,$query) or die("Can't Execute Query...");
	header("location:paymentdetail.php");
	}

              
              	
	//echo $uid;
	

?-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		
			<!--?php//include("includes/head.inc.php");
		?-->
</head>

<body>
			
				
			<!-- end header -->
			<font style="font-size:30px;margin-left:260px">Payment options</font>
<div class="container">			
			<hr style="margin-left:260px;margin-right:260px;"></hr>
			<div style="border-radius:5px 5px 5px 5px; background:url(images/paper.jpg);margin-left:160px;margin-right:160px;font-size:20px;"><a href="order.php">Secure Online Payment</a></div></br>
			<div style="border-radius:5px 5px 5px 5px; background:url(images/paper.jpg);margin-left:160px;margin-right:160px;font-size:20px;"><a href="order.php">PayUmoney</a></div></br>
			<div style="border-radius:5px 5px 5px 5px; background:url(images/paper.jpg);margin-left:160px;margin-right:160px;font-size:20px;"><a href="order.php">PAYTM Wallet</a></div></br>
			<div style="border-radius:5px 5px 5px 5px; background:url(images/paper.jpg);margin-left:160px;margin-right:160px;font-size:20px;"><a href="order.php">Mobikwik</a></div></br>
			<div style="border-radius:5px 5px 5px 5px; background:url(images/paper.jpg);margin-left:160px;margin-right:160px;font-size:20px;"><a href="order.php">Cash On Delivery</a></div></br>
</body>





<div class="container-fluid">
  <div class="row">
    <div class="cols-md-4"></div>
    <div  class="cols-md-8">
      <footer class="w3-container w3-padding-64 w3-center  w3-xlarge">
        <p> <a href="#"><i class="fa fa-facebook-official" ></i></a>
          <a href="#"><i class="fa fa-pinterest-p"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-flickr"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a></p>
          <p class="w3-medium">
            &copy OWL(Our World Library)<br>All Rights Reserved.
          </p>  
        </footer>
      </div>
    </div>
  </div>
</body>
</html>
