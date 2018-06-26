<?php
include 'connect.php';
session_start(); 
$emailid=$_POST["email"];
$password=$_POST["password"];
$_SESSION['emailid'] = $emailid;
$_SESSION['password'] = $password;


        $var = "SELECT * FROM Customer WHERE Email_Id = '$emailid' AND Password = '$password';";
        $var2 = "SELECT * FROM Administrator WHERE AEmail_Id = '$emailid' AND Password = '$password';";
        $result1 = mysqli_query($conn,$var);
        $result2 = mysqli_query($conn,$var2);
        if(mysqli_num_rows($result1)==1)
        {
            echo "Customer Login Successful";
            header( "Location: index.php" );
        }
        else if (mysqli_num_rows($result2)==1) {
            echo "Administrator login Successful";
            header( "Location: admin.php" );
        }
        else
        {
            echo "Invalid Credentials";
        }

 

 

  $conn->close();

?>



