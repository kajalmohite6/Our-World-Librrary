<?php
$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "projectSL_1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 


$fname=$_POST["fname"];
$lname=$_POST["lname"];
$Address=$_POST["Address"];
$city=$_POST["city"];
$mobile=$_POST["mob"];
$emailid=$_POST["email"];
$password=$_POST["password"];
$mobile=$_POST["mobile"];
$passwordConfirm=$_POST["passwordConfirm"];

switch($_POST["gender"])
{
  case "female":
  $gender="female";
  break;
  case "male":
  $gender="male";
  break;
}

$query = "INSERT INTO `projectSL_1`.`Customer` (`User_Id`, `First_Name`, `Last_Name`, `Address`, `City`, `Email_Id`, `Password`, `Mobile`, `Gender`) VALUES (NULL, '$fname', '$lname', '$Address', '$city', '$emailid', '$password', '$mobile', '$gender')";

if ($conn->query($query) === TRUE) {
  echo "New record created successfully";
  header( "Location: signin.html" );
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>



