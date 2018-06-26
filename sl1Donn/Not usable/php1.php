

<?php
include 'connect.php';

echo "HI" ;

$sql = "SELECT * FROM Books limit 9";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

echo "Hello0" ;

    // output data of each row
    while($row = $result->fetch_assoc()) {

      echo "I am inside if statement" ;

 echo "- Book ID: " . $row["BId"]. " - Title: " . $row["Title"]. " - Author: " . $row["Author"]. ;
    }
   }

   else {
    echo "0 results";
  }
?>


