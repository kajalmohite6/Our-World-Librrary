<?php
include 'connect.php';

$sql = "SELECT * FROM Books limit 9";
$result = $conn->query($sql);
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	// echo "string";


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>OWL</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="jquery-3.2.1.min.js"></script>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>


<body>
<!-- Navbar -->

	<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="file:///C:/Vivek%20Data/Website%20SL1/FINAL%20SL1/form.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>


<!-- slide show  -->
<section>
<div class="w3-display-container w3-container">
<div class="w3-display-topleft w3-text-white" style="padding:200px 200px">
<div class="input-group custom-search-form">
<input type="text" class="form-control" name="query" value="">
<span class="input-group-btn">
<button class="btn btn-default" type="search">
<span class="glyphicon glyphicon-search"></span>
</button>
</span>
</span>
</div>
</form>

 <h1 class="w3-jumbo w3-hide-small">New arrivals</h1>
      <h1 class="w3-hide-large w3-hide-medium">New arrivals</h1>
      <h1 class="w3-hide-small">COLLECTION</h1>
      <p><a href="#jeans" class="w3-button w3-black w3-padding-large w3-large" style="text-decoration: none">SHOP NOW</a></p>
    </div>
    </div>
    <img class="mySlides" src="pictures/image1.jpg"
  style="width:100%">
  <img class="mySlides" src="pictures/image2.jpg"
  style="width:100%">
  <img class="mySlides" src="pictures/image3.jpg"
  style="width:100%" >
  </section>


  <div>
	<?php
echo $row['BId']. " ";
echo $row['Title']. " ";
echo $row['Author']. " ";
echo $row['Quantity']. " ";
echo $row['Version']. " ";
echo $row['Year']. " ";
echo $row['Amount']. "<br>";
    }
close();
?>
</div>





<!-- <script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 3000);
}
</script> -->
</body>
<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 3000);
}
</script>
</html>

