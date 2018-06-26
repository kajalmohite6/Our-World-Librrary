<html>
<head>
  <link rel="icon" type="image/png" href="pictures/logo.png" />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="jquery-3.2.1.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
  .box{
   width: 180px;
   height: 180px;
   background-color: black;
   position: relative;
   margin: auto;
   text-align: center;
   padding-bottom: 10px;
   margin-bottom: 20px;
 }
 .textcolor{
  text-align: center;
  color: white;
  font-family: times new roman;
  text-decoration: none;
}

.adminwork{
  width: 1150px;
}
</style>

</head>

<body>



  <?php
  include 'connect.php';
  $sql = "SELECT * FROM Books limit 8";
  $result = $conn->query($sql);
  ?>

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
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="about-us.php">About Us</a></li>
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
      <br/>
      <!--To add search parameter use the syntax as in the line below-->
      <!--<input type="hidden" name="col" value="2">-->
    </div>
  </div>
</div>


<div class="col-md-9 adminwork">

  <br><br><br>
  <div class="container-fluid">
    <div class="row">
      <div class="textcolor">  
        <div class="col-md-3">
          <a href="index.php">
            <div class="box">  
              <i class="material-icons" style="font-size:100px;color: white">home</i>
              <br>
              <h3>View Website</h3>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a href="DetailofCustomer.php">
            <div class="box">  
              <i class="material-icons" style="font-size:100px;color: white">face</i>
              <br>
              <h3>Details of Customers</h3>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a href="top10Customer.php">
            <div class="box">  
              <i class="material-icons" style="font-size:100px;color: white">assessment</i>
              <br>
              <h3>Top 10 Consistent Customers</h3>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a href="DetailofBooks.php">
            <div class="box">  
              <i class="material-icons" style="font-size:100px;color: white">import_contacts</i>
              <br>
              <h3>Details of Books</h3>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a href="CopiesSold.php">
            <div class="box">

              <i class="material-icons" style="font-size:100px;color: white">shopping_cart</i>
              <br>
              <h3>No. of copies sold</h3>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a href="top10SoldBooks.php">
            <div class="box">  
              <i class="material-icons" style="font-size:100px;color: white">assessment</i>
              <br>
              <h3>Top 10 Sold Books</h3>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a href="top10RatedBooks.php">
            <div class="box">  
              <i class="material-icons" style="font-size:100px;color: white">assessment</i>
              <br>
              <h3>Top 10 Rated Books</h3>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a href="AddNewBook.php">
            <div class="box">  
              <i class="material-icons" style="font-size:100px;color: white">note_add</i>
              <br>
              <h3>Add New Books to stock</h3>
            </div>
          </a>
        </div>

      </div>
    </div>
  </div>

</div>
</body>
</html>
