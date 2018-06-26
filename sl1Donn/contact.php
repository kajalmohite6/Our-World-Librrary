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
  /*a:hover{
    background-color: grey;
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 16px;
    }*/

    .bookshelf{
      width: 1150px;
        /*height: 1000px;
        overflow: auto;
        white-space: nowrap; */
      }

      .imgstyle{
        width: 100%;
        height: 170%;
      }

      img:hover {
        box-shadow: 0 0 2px 1px rgba(0, 140, 186, 1.5);
      }
      .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 300px;
        margin: auto;
        text-align: center;
      }

    </style>
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
              <li><a href="about-us.php">About Us</a></li>
              <li><a href="searchByCategory.php?Category=All">Product Categories </a></li>
              <li class="active"><a href="contact.php">Contact</a></li>
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
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"><?php
                
                ?></span> Logout</a></li>
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
    <!-- Slide show part of the website -->
    <section>
      <div class="container-fluid" >
        <div class="row">
          <div class="col-md-12" align="center">
            <div style="display: inline-block;" >
              <div class="w3-display-container" style="width:100%">
                <div class="card">
                  <img src="pictures/sir.jpg" alt="sir" style="width:270px ; height: 325px">
                  <h1>Mr. R. B. Murumkar</h1>
                  <p class="title">Professor, PICT</p>
                  <p>Project Guide</p>
                  <div style="margin: 24px 0;"> 
                    <a href="https://twitter.com/Ravi_Murumkar?lang=en&lang=en"><i class="fa fa-twitter w3-xlarge"></i></a>  
                    <a href="https://www.facebook.com/ravi.murumkar"><i class="fa fa-facebook w3-xlarge"></i></a> 
                    <p>Email : rbmurumkar@pict.edu</p> 
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>



      <div class="container-fluid" >
        <div class="row">
          <div class="col-md-12" align="center">
            <section>
              <!-- Bottom Images -->
              <div class="bookshelf" id="bookshelf">
                <!-- sefsdf -->
                <section class="bookshelf">
                  <div style="display: inline-block;">
                    <div class="w3-display-container" style="width:100%">
                      <div class="card">
                        <img src="pictures/vivek.jpg" alt="vivek" style="width:270px ; height: 325px">
                        <h1>Vivek Mutha</h1>
                        <p class="title">Student, PICT</p>
                        <p>OWL</p>
                        <div style="margin: 24px 0;">

                          <a href="https://twitter.com/muthavivek?lang=en""><i class="fa fa-twitter w3-xlarge" ></i></a>  
                          <a href="https://www.facebook.com/vivek.mutha.9"><i class="fa fa-facebook w3-xlarge"></i></a> 
                          <p>Email : muthavivek94@gmail.com</p> 
                        </div>
                      </div>

                    </div>
                  </div>

                  <div style="display: inline-block;">
                    <div class="w3-display-container" style="width:100%">
                      <div class="card">
                        <img src="pictures/vaishnav.jpg" alt="vaishnav" style="width:270px ; height: 325px">
                        <h1>Vaishnav M</h1>
                        <p class="title">Student, PICT</p>
                        <p>OWL</p>
                        <div style="margin: 24px 0;"> 
                          <a href="https://twitter.com/vaishnavhere?lang=en"><i class="fa fa-twitter w3-xlarge"></i></a>  
                          <a href="https://www.facebook.com/vaishnav.mishra.1"><i class="fa fa-facebook w3-xlarge"></i></a> 
                          <p>Email : mishravaishnav97@gmail.com</p> 
                        </div>
                      </div>

                    </div>
                  </div>


                  <div style="display: inline-block;">
                    <div class="w3-display-container" style="width:100%">
                      <div class="card">
                        <img src="pictures/batul.jpg" alt="batul" style="width:270px ; height: 325px">
                        <h1>Batul Merchant</h1>
                        <p class="title">Student, PICT</p>
                        <p>OWL</p>
                        <div style="margin: 24px 0;"> 
                          <a href="https://twitter.com/batulmerchant25?lang=en"><i class="fa fa-twitter w3-xlarge"></i></a>  
                          <a href="https://www.facebook.com/batulmerchant1234"><i class="fa fa-facebook w3-xlarge"></i></a> 
                          <p>Email : batulmerchant8@gmail.com</p> 
                        </div>
                      </div>

                    </div>
                  </div>


                  <div style="display: inline-block;">
                    <div class="w3-display-container" style="width:100%">
                      <div class="card">
                        <img src="pictures/kajal1.jpg" alt="John" style="width:270px ; height: 325px">
                        <h1>Kajal Mohite</h1>
                        <p class="title">Student, PICT</p>
                        <p>OWL</p>
                        <div style="margin: 24px 0;"> 
                          <a href="https://twitter.com/PradipKajal?lang=en"><i class="fa fa-twitter w3-xlarge"></i></a>  
                          <a href="https://www.facebook.com/kajal.mohite.927"><i class="fa fa-facebook w3-xlarge"></i></a> 
                          <p>Email : mohitekajal961@gmail.com</p> 
                        </div>
                      </div>

                    </div>
                  </div>
                </section>
              </div>
            </section>
          </div>
        </div>
      </div>
    </section>


    <br/>

    <footer class="w3-container w3-padding-64 w3-center  w3-xlarge">
      <div class="row">
        <div class="cols-xs-*"></div>
        <div  class="cols-xs-4">
          <a href="#"><i class="fa fa-facebook-official" ></i></a>
          <a href="#"><i class="fa fa-pinterest-p"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-flickr"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>


          <p class="w3-medium">
            &copy OWL(Our World Library)<br>All Rights Reserved.
          </p>
        </div>
        <div class="cols-xs-*"></div>

      </div>  
    </footer>

  </body>
  </html>
