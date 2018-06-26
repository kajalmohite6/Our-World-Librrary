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


$title=$_POST["title"];
$quantity=$_POST["quantity"];
$author=$_POST["author"];
$category=$_POST["category"];
$rating=$_POST["rating"];
$year=$_POST["year"];
$amount=$_POST["amount"];
$image = addslashes(file_get_contents($_FILES['image']['tmp_name'])); //SQL Injection defence!



$query = "INSERT INTO `projectSL_1`.`Books` (`BId`, `Title`, `Quantity`, `Author`, `Category`, `Rating`, `Year`, `Amount`, `image`) VALUES (NULL, '$title', '$quantity', '$author', '$category', '$rating', '$year', '$amount', '$image')";

  if ($conn->query($query) === TRUE) {
    echo "New record created successfully";
    header( "Location: admin.php" );
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>
<!-- 
// if($file_name!="" && ($file_type="image/jpeg"||$file_type="image/png"||$file_type="image/gif")&& $file_size<=614400)

// if(move_uploaded_file ($file_path,'images/'.$file_name))//"images" is just a folder name here we will load the file.
// $query=mysql_query("insert into user(photo)values('$file_name')"); -->
 
       <!--  $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
 -->
  
