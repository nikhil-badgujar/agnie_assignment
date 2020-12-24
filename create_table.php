<?php

// db credentials
$servername="localhost";
$username="root";
$password="root";
$db = "ZEDD";

$conn = new mysqli($servername, $username, $password, $db);

if($conn->connect_error){
    die ("CanNot Connect".$conn->connect_error);
}

$sql="CREATE TABLE DATA(
    id TINYINT PRIMARY KEY AUTO_INCREMENT,
    fname VARCHAR(20),
    lname VARCHAR(20),
    dob DATE,
    city VARCHAR(20),
    mobile_no VARCHAR(10)
    );";

if($conn->query($sql) === TRUE)
{
    echo "Successful";
    echo "<br>";
}
  else
  {
        echo "Failed: ".$conn->error;
  }

    $conn->close();
?>
