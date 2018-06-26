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
 /* .bookshelf{

      width: 1000px;
height: 1000px;
        overflow: auto;
white-space: nowrap;
}*/
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}

a:hover{
  background-color: grey;
}
.navbar {
  overflow: hidden;
  background-color: black;
  /*position: fixed;*/
  top: 0;
  width: 100%;
  font-family: Times New Roman;
  font-style:initial;
  font-size: 16px;
}
.navbar a {
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 16px;
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

</style>
</head>

<body>
  <?php
  include 'connect.php'; 
  ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="width:250px" id="mySidebar">
          <div class="w3-container w3-display-container w3-padding-16">
            <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
            <img src="pictures/logo.png" style="width:200px;height:100px;">
          </div>
          
          <div class="col-md-3">
            
              <br>
              <h3>Details of All Books</h3>
            
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

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-9">
          <section>
           <?php

           $sqlDetailofBooks = "SELECT * FROM Books ORDER BY Title";
           $resultDetailofBooks = $conn->query($sqlDetailofBooks);

           ?>
           <div class="bookshelf">


            <?php
            if ($resultDetailofBooks->num_rows > 0) {
                          // output data of each row
              while($rowDetailofBooks = $resultDetailofBooks->fetch_assoc()) {

                $BId=$rowDetailofBooks['BId'];

                $sql = "SELECT * FROM Books WHERE BId = $BId";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();

                ?>
                <div style="display: inline-block;">
                  <div class="w3-display-container" style="width:100%">

                    <div class="thumbnail">

                      <a href="cart.php?BId=<?php echo $rowByCategory['BId'];?>">
                        <div style="width:220px;height:250px;">
                          <?php
                          //Render image
                          echo '<img src="data:image/jpg;base64,' . base64_encode($row['image']) . '" width="220" height="250">' . '</dd>';
                          ?>
                        </div>
                        <div class="caption">
                          <p align="center">
                            <p align="center" style="width:220px;">
                             Name : 
                             <?php 
                             echo $row['Title']. " ";
                             ?>              
                           </li>
                           <li>
                            Book ID : 
                            <?php 
                            echo $row['BId']. " ";
                            ?>              
                          </li>
                          <li>
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
                          <li>Rating : 
                            <?php 
                            echo $row['Rating']. " ";
                            ?>
                          </li>
                          <li>
                            Category : 
                            <?php 
                            echo $row['Category']. " ";
                            ?>              
                          </li>
                          <li>
                            Year of Publish : 
                            <?php 
                            echo $row['Year']. " ";
                            ?>              
                          </li>
                        </p>
                      </p>
                    </div>
                  </a>
                </div>
              </div>
            </div>

            <?php
          }
        } else {
          echo "0 results";
        }
        ?>

      </div>
    </section>
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
