<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<h2>Customer Details</h2>
</head>
 
<body>

<!-- Logo -->
<!--center-->
<!--img src="pictures/logo.png" alt="owl" style="width:270px;height:100px;"-->
<!--/center-->

<!-- Navigation Bar -->
<!--ul>
  <li><a class="active" href="viewproduct1.php">View Product</a></li>
    <li><a href="actretdisp.php">Add Product</a></li>
     <li><a href="DetailofBooks.php">View Booksr</a></li>
   <li><a href="shop.php">View Customer Orders</a></li-->

<!--li class="dropdown"><a href="#" class="dropbtn">View Report</a>
<div class="dropdown-content-new">
  <a href="bargraph.php" style="color:#8db14e;">Brand Report</a>
  <a href="bargraph1.php" style="color:#8db14e;;">Category Report</a> 
  <a href="#" style="color:#8db14e;;">Monthwise Report</a>  
  </div>
</li-->
 

<!--li class="dropdown" style="float:right"><a href="#account" class="dropbtn">Account</a>   
    <div class="dropdown-content-account" style="right:0">
      <a href="login.php" id="list">Log out</a>
      <a href="#" id="list">Change password</a>
    </div>
  </li-->



<!-- end navigation bar -->

<?php

include('connect.php');
$sql = "SELECT User_Id, First_name,Last_Name,address,city,Email_Id,password,Mobile,Gender FROM Customer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
echo "<table style='border: solid 1px black;'>";
    echo "<table><tr><th>User_Id</th><th>First_name</th><th>Last_Name</th><th>address</th><th>city</th><th>Email_Id</th><th>password</th><th>Mobile</th><th>Gender</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {

    echo "<tr>";
   
	//echo "<td><img src=".$row['image_name']." height='200px' width='150px' /></td>"; 
 
 echo "<td>".$row["User_Id"]."</td>";
 echo "<td>".$row["First_name"]."</td>"; 
  echo"<td>".$row["Last_Name"]."</td>";
 echo "<td>".$row["address"]."</td>"; 
  echo "<td>".$row["city"]."</td>"; 
 echo "<td>".$row["Email_Id"]."</td>"; 
 echo "<td>".$row["password"]."</td>"; 
 echo "<td>".$row["Mobile"]."</td>"; 
 echo "<td>".$row["Gender"]."</td>";
  echo"</tr>";

}

    echo "</table>";
} else {
    echo "0 results";
}




?>

<br><br>
<!-- Footer -->
<div style="float:center;">
<footer style="background-color: #e6ffff;padding:40px;">
<div class="footer">

<div>
<a href="#" id="footer_links">About us . </a>
<a href="#" id="footer_links">FAQ . </a>
<a href="#" id="footer_links">Privacy & Security . </a>
<a href="#" id="footer_links">Returns & Refunds . </a>
<a href="#" id="footer_links">Shipping Policies . </a>
<a href="#" id="footer_links">Contact Us</a>
</div>
<br></br-->
<!--img src="pictures/logo.png" alt="owl" style="width:170px;height:70px;"-->
<br></br>
  <p style="font-size:150%;padding:20px">Follow us</p>
  <a href="https://www.facebook.com/login/"><i class="fa fa-facebook"></i></a>
  <a href="https://in.pinterest.com/login/"><i class="fa fa-pinterest"></i></a>
  <a href="https://twitter.com/login?lang=en"><i class="fa fa-twitter"></i></a>
  <a href="https://www.instagram.com/accounts/login/"><i class="fa fa-instagram"></i></a>
  <a href="https://in.linkedin.com/"><i class="fa fa-linkedin"></i></a>
  <a href="https://accounts.snapchat.com/accounts/login?continue=https%3A%2F%2Faccounts.snapchat.com%2Faccounts%2Fwelcome" class="fa fa-snapchat-ghost"></a>
</div>
</footer>
</div>

<!-- end footer -->

</body>
</html>

