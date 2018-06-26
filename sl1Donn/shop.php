<!DOCTYPE html>
<html>
<head>
  <link rel="icon" type="image/png" href="pictures/logo.png" />

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="jquery-3.2.1.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
  .bookshelf{

/*      width: 1000px;
height: 1000px;
*/        overflow: auto;
white-space: nowrap;
}
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}

a:hover{
  background-color: grey;
}

* {
  box-sizing: border-box;
}

.columns {
  float: right;
  width: 66.3%;
  padding: 8px 100px;
}

.price {
  list-style-type: none;
  border: 1px solid #eee;
  margin: 0;
  padding: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}

.price:hover {
  box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
}

.price .header {
  background-color: #111;
  color: white;
  font-size: 25px;
}

.price li {
  border-bottom: 1px solid #eee;
  padding: 20px;
  text-align: center;
}

.price .grey {
  background-color: #eee;
  font-size: 20px;
}

@media only screen and (max-width: 600px) {
  .columns {
    width: 100%;
  }

  img:hover {
    box-shadow: 0 0 2px 1px rgba(0, 140, 186, 1.5);
  }

  .img-responsive{
    margin: 0 auto;
  }
  /* The Modal (background) */
  .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  }

  /* Modal Content */
  .modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
  }

  /* Add Animation */
  @-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
  }

  @keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
  }

  /* The Close Button */
  .close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
  }

  .close:hover,
  .close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
  }

  .modal-header {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
  }

  .modal-body {padding: 2px 16px;}

  .modal-footer {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
  }
</style>
</head>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

<body>
  <?php
  include 'connect.php';
  $BId = $_GET['BId'];
  $sql = "SELECT * FROM Books WHERE BId = $BId";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc(); 
  ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="width:250px" id="mySidebar">
          <div class="w3-container w3-display-container w3-padding-16">

            <img src="pictures/logo.png" style="width:200px;height:100px;">
          </div>
          <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
            <a href="searchByCategory.php?Category=All" class="w3-bar-item w3-button">All</a>
            <a href="searchByCategory.php?Category=Fiction" class="w3-bar-item w3-button">Fiction</a>
            <a href="searchByCategory.php?Category=Biography" class="w3-bar-item w3-button">Biography</a>
            <a href="searchByCategory.php?Category=Comics" class="w3-bar-item w3-button">Comics</a>
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
              <li><a href="about-us.php">About Us</a></li>
              <li class="active"><a href="searchByCategory.php?Category=All">Product Categories </a></li>
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
      <br/>
      <!--To add search parameter use the syntax as in the line below-->
      <!--<input type="hidden" name="col" value="2">-->


      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5">
            <?php
                //Render image
            echo '<img src="data:image/jpg;base64,' . base64_encode($row['image']) . '" width="300" height="400">' . '</dd>';
            ?>
          </div>
          <div class="col-md-7">
            <ul class="price">
              <li class="header">
                Name : 
                <?php 
                echo $row['Title']. " ";
                ?>              
              </li>
              <li class="grey">
                Price :
                <?php 
                echo $row['Amount']. " ";
                ?>              
              </li>
              <li>
                Author : 
                <?php 
                echo $row['Author']. " ";
                ?>              
              </li>
              <li>
                Rating :
                <?php 
                echo $row['Rating']. " ";
                ?> 
              </li>
              <li>
                Year of Publish : 
                <?php 
                echo $row['Year']. " ";
                ?>              
              </li>

              <?php

              session_start(); 
              $emailid = $_SESSION['emailid'];
              $password = $_SESSION['password'];
              if (is_null($emailid)) {
                header( "Location: signin.html" );
              }
              else{

                $sqlSearchCust = "SELECT * FROM Customer WHERE Email_Id= '$emailid' and Password = '$password'";

                $resultSearchCust = $conn->query($sqlSearchCust);
                $rowSearchCust = $resultSearchCust->fetch_assoc();

                $User_Id=$rowSearchCust[User_Id];
                $check_quantity = "SELECT * from Books WHERE BId = '$BId' ";
                $result_quantity = $conn->query($check_quantity);
                $row_quantity = $result_quantity->fetch_assoc();


                $sqlInsert = "INSERT INTO Purchase_and_Deliver (User_Id, BId, Quantity, Delivery_date)
                VALUES ($User_Id, $BId, 1, now())";
              }
              ?>
              <li class="header">
                <?php

                if ($conn->query($sqlInsert) === TRUE && $row_quantity['Quantity']>0) {
                  // <!-- Trigger/Open The Modal -->
                  // <button id="myBtn">Open Modal</button>

                  // <div id="myModal" class="modal">

                  // <!-- Modal content -->
                  // <div class="modal-content">
                  // <div class="modal-header">
                  // <span class="close">&times;</span>
                  // <h2>CONGRATULATIONS!!</h2>
                  // </div>
                  // <div class="modal-body">
                  // <p>YOUR ORDER IS PLACED SUCCESSFULLY!!!</p>
                  // <p>Some other text...</p>
                  // </div>
                  // <div class="modal-footer">
                  // <h3>HAPPY SHOPPING!</h3>
                  // </div>
                  // </div>

                  // </div>
                  echo "Book Purchased";

                }
                elseif ($conn->query($sqlInsert) === TRUE && $row_quantity['Quantity']<=0) {
                  echo "Out of Stock!";
                }
                else {
                  echo "Please Sign In First".$conn->error ;
                }
                ?>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <br> 
      <hr><br> 
    </div>
  </div>
</div> 



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
