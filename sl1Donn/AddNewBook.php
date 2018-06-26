<!DOCTYPE html>
<html>
<head>
  <link rel="icon" type="image/png" href="pictures/logo.png" />
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
  <script src="jquery-3.2.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>

  body
  {
    background-image: url("pictures/image4.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    color: black;
    font-family: "Times New Roman", Georgia, Serif;
  }

  table {
    width: 60%;
  }

  table, th, td {
    border: 0.1px  black;

  }

  th, td {
    padding: 8px;
    text-align: left;
  }

  tr:hover {background-color: #ffd6cc}

  th {
    background-color: black;
    color: red;
  }

  th, td {
    border-bottom: 0.1px;
  } 

  tr.noBorder td {
    border: 0;
  }
  h1 {
    color: white;
    margin-left: 20px;
    text-shadow: 3px 2px red;
  }
  .button4 {

    padding: 8px 100px;
  }

</style>


<script type="text/javascript">
 function formvalidator()
 {
  var letters= /^[a-zA-Z]+$/;
  var num = /[0-9]/g;
  var alpha= /^[0-9a-zA-Z]+$/;
  if(document.form1.title.value == "" ||document.form1.title.value == null)
  {
    alert("*Please Enter Title");
    document.form1.title.focus();
    return false;
  }
  else
  {
    if(!(document.form1.title.value.match(alpha)))
    { 
      alert("*Only Alphabets Are Allowed For TITLE");
      document.form1.title.focus();
      return false;
    }
  }

  if(document.form1.quantity.value == "" ||document.form1.quantity.value == null)
  {
    alert("*Please Enter Quantity");
    document.form1.quantity.focus();
    return false;
  }
  else
  {
    if(!(document.form1.quantity.value.match(num)))
    { 
      alert("*Only Numbers Are Allowed For Quantity");
      document.form1.title.focus();
      return false;
    }
  }

  if(document.form1.author.value == "" ||document.form1.author.value == null)
  {
    alert("*Please Enter Author Name");
    document.form1.author.focus();
    return false;
  }
  else
  {
    if(!(document.form1.author.value.match(letters)))
    {
      alert("*Only Alphabets Are Allowed In Author's Name");
      document.form1.author.focus();
      return false;
    }
  }


  if(document.form1.category.value == "" ||document.form1.category.value == null)
  {
    alert("*Please Enter Category Name");
    document.form1.category.focus();
    return false;
  }
  else
  {
    if(!(document.form1.category.value.match(letters)))
    {
      alert("*Only Alphabets Are Allowed In Category Name");
      document.form1.category.focus();
      return false;
    }
  }


  if(document.form1.rating.value == "" ||document.form1.rating.value == null)
  {
    alert("*Please Enter Rating of Book");
    document.form1.rating.focus();
    return false;
  }
  else
  {
    if(!(document.form1.rating.value.match(num)))
    { 
      alert("*Only Numbers Are Allowed For Rating");
      document.form1.year.focus();
      return false;
    }
  }


  if(document.form1.year.value == "" ||document.form1.year.value == null)
  {
    alert("*Please Enter Year of Publish");
    document.form1.year.focus();
    return false;
  }
  else
  {
    if(!(document.form1.year.value.match(num)))
    { 
      alert("*Only Numbers Are Allowed For Amount");
      document.form1.year.focus();
      return false;
    }
  }


  if(document.form1.amount.value == "" ||document.form1.amount.value == null)
  {
    alert("*Please Enter Amount");
    document.form1.amount.focus();
    return false;
  }
  else
  {
    if(!(document.form1.amount.value.match(num)))
    { 
      alert("*Only Numbers Are Allowed For Amount");
      document.form1.amount.focus();
      return false;
    }
  }


  $image = "image";
  if($image!="" && ($file_type="image/jpeg"||$file_type="image/png"||$file_type="image/gif")&& $file_size<=614400)



    return(true);
}

</script>
</head> 


<body>
  <div class="row">
    <div class="col-md-3">
      <nav class="w3-bar-block w3-collapse" style="width:250px" id="mySidebar">
        <div class="w3-container w3-display-container w3-padding-16">

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
            <li><a href="contact.php">Contact</a></li>
          </ul>
         <!--  <ul class="nav navbar-nav navbar-right">
            <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="signin.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul> -->
          <?php

          session_start(); 
          $emailid = $_SESSION['emailid'];
          $password = $_SESSION['password'];


          if (is_null($emailid)) {

            ?>

            <ul class="nav navbar-nav navbar-right">
              <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
              <li><a href="signin.html"><span class="glyphicon glyphicon-log-in"></span> Log in</a></li>
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
    
    <div id="myDIV"></div>
    <form action="Add_New_Book.php" name="form1" onsubmit="return formvalidator();" method="POST"  enctype="multipart/form-data">
      <div style="background-color:#ff5c33;margin-left: 330px ;width: 500px;height: 450px">
        <center><h1>Enter Information</h1></center>
        <table align="center" style="z-index: 1">
          <div class="" style="color: black;">
            <tr>
              <td>Title of the Book</td>
              <td><input type="text" name="title"></td>
            </tr>
            <tr>
              <td>Quantity</td>
              <td><input type="text" name="quantity"></td>
            </tr>
            <tr>
              <td>Author</td>
              <td><input type="text" name="author"></td>
            </tr>
            <tr>
              <td>Category</td>
              <td><input type="text" name="category">
              </td>
            </tr>
            <tr>
              <td>Rating</td>
              <td><input type="text" name="rating">
              </td>
            </tr>
            <tr>
              <td>Year</td>
              <td><input type="text" name="year">
              </td>
            </tr>
            <tr>
              <td>Amount</td>
              <td><input type="text" name="amount">
              </td>
            </tr>
            <tr>
              <td>Image</td>
              <td>
                <input type="file" name="image">
              </td>
            </tr>
            



          </div>
        </table>
        <div class="w3-container w3-center">
          <div class="button4">
            <input type="submit" name="submit" value="Submit"> 
          </div>
        </div>
      </div>

    </form>
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
<script>
  function myFunction() {
    var x = document.getElementById("myFile");
    
  }
</script>

</html>
