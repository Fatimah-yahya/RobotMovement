<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "robot wovement";



$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['move'])){
    $We = $_POST['move'];

 }  
 $sql = "insert into robot movement (Controller) values('$We')";
 echo $We;
 echo '<br>';
 

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 





