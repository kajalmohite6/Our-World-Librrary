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
<!-- Slide show part of the website -->
<section>
  <div class="w3-display-container w3-container">
    <div class="w3-display-topleft w3-text-white" style="padding:200px 200px">
      <h1 class="w3-jumbo w3-hide-small">About Our World Library</h1>
      <h1 class="w3-hide-small">OWL</h1>
      <p><h4>
        We, at Our World Library (OWL) believe that Books are the manifestation of an author's imagination. In today's world where advancements in technology is growing at an increasing rate, we believe that reading books is the only constant even if the world faces a revolution in digitalisation. We love to read and we discovered that we could share our hundreds of books with others by selling them online. Our goal is to give a second life to books by getting them in the hands of readers across the globe. Since then, we've more than doubled our inventory each year, allowing us to expand to our warehouse in Pune, Maharashtra. Our inventory is currently well over thousands of books divided into three different categories namely Fiction, Biography and Comics; and we sell on different online marketplaces with more being added regularly. During the current recession, we've proudly been able to increase our staff and hire 80 new employees.  
        In reference to George R. R. Martin's words, "A reader lives a thousand lives before he dies", we aspire to simplify the reading process so that imagination will never cease to exist!
      </h4>
    </p>
  </div>
</div>
<img class="mySlides" src="pictures/book1.jpg"
style="width:100%">
     <!--  <img class="mySlides" src="pictures/book2.jpg"
      style="width:100%">
      <img class="mySlides" src="pictures/book3.jpg"
      style="width:100%" > -->
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
<!-- 
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
  </script> -->
  </html>
