<?php

include("common.php");

$id = $_GET['id'];
$fn = $_GET['fn'];
$ln = $_GET['ln'];

$query = "DELETE FROM DATA WHERE id = '$id'";

$data = mysqli_query($conn, $query);

if($data)
{
    echo "<font color='red'>Record with id : '" .$id. "', Full Name : '" .$fn. " " .$ln."' Deleted from Database";
}
else
{
    echo "<font color='red>Failed to Delete Record from Database";
}

?>
<html>
<body>    
    <br><br><a href="./display_all.php">Show all Records</a>
</body>    
</html>