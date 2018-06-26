<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
  <script src="jquery-3.2.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  a:hover{
    background-color: grey;
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 16px;
  }

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
    </style>
  </head>

  <body>

    <?php
    include 'connect.php';
    $sql = "SELECT * FROM Books limit 8";
    $result = $conn->query($sql);
    ?>

    <!-- navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#"></a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="about-us.html">About Us</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Product Categories 
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <a href="searchByCategory.php?Category=All" class="w3-bar-item w3-button">All</a>
              <a href="searchByCategory.php?Category=Fiction" class="w3-bar-item w3-button">Fiction</a>
              <a href="searchByCategory.php?Category=Biography" class="w3-bar-item w3-button">Biography</a>
              <a href="searchByCategory.php?Category=Comedy" class="w3-bar-item w3-button">Comedy</a>
            </ul>
          </li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="file:///C:/Vivek%20Data/Website%20SL1/FINAL%20SL1/form.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
      </div>
    </nav>
    <!-- Slide show part of the website -->
    <section>
      <div class="w3-display-container w3-container">
        <div class="w3-display-topleft w3-text-white" style="padding:200px 200px">
          <form action="searchByTitle.php" method="get">
            <div class="input-group custom-search-form">
              <input type="text" class="form-control" name="query" value=""/>
              <span class="input-group-btn">
                <button class="btn btn-default" type="search">
                  <span class="glyphicon glyphicon-search"></span>
                </button>
              </span>
            </div>
          </form>
          <h1 class="w3-jumbo w3-hide-small">New arrival</h1>
          <h1 class="w3-hide-large w3-hide-medium">New arrival</h1>
          <h1 class="w3-hide-small">Collection</h1>
          <p>
            <a href="#bookshelf" class="w3-button w3-black w3-padding-large w3-large" style="text-decoration: none">SHOP NOW
            </a>
          </p>
        </div>
      </div>
      <img class="mySlides" src="pictures/image1.jpg"
      style="width:100%">
      <img class="mySlides" src="pictures/image2.jpg"
      style="width:100%">
      <img class="mySlides" src="pictures/image3.jpg"
      style="width:100%" >
    </section>

    <br/>

    <div class="container-fluid" >
      <div class="row">
        <div class="col-md-10" align="center">
          <section>
            <!-- Bottom Images -->
            <div class="bookshelf" id="bookshelf">
              <!-- sefsdf -->
              <section class="bookshelf">
                <?php
                if ($result->num_rows > 0) {
                          // output data of each row
                  while($row = $result->fetch_assoc()) {
                    ?>
                    <div style="display: inline-block;">
                      <div class="w3-display-container" style="width:100%">
                        <div class="thumbnail">
                          <a href="cart.php?BId=<?php echo $row['BId'];?>">
                            <div style="width:220px;height:250px;">
                              <?php
                          //Render image
                              echo '<img src="data:image/jpg;base64,' . base64_encode($row['image']) . '" width="220" height="250">' . '</dd>';
                              ?>
                            </div>
                            <div class="caption">
                              <p align="center" style="width:220px;">
                                <?php 
                                echo $row['Title']. " ";
                                ?>
                              </p>
                              <div class="w3-display-middle w3-display-hover">
                                <button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button>
                              </div>
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
              </section> 
            </div>
          </section>
        </div>
      </div>
    </div>

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
            &copy Vivek Mutha.<br>All Rights Reserved.
          </p>
        </div>
        <div class="cols-xs-*"></div>

      </div>  
    </footer>

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
