<?php

// db credentials
$servername="localhost";
$username="root";
$password="root";
$db = "ZEDD";

$conn = new mysqli($servername, $username, $password, $db);

if($conn->connect_error)
{
    die ("Can not Connect".$conn->connect_error);
}
?>