<?php
include("common.php");

// To POST current data
$f = $_POST["fname"];
$l = $_POST["lname"];
$d = $_POST['date'];
$c = $_POST['city'];
$m = $_POST['mono'];

$sql = "INSERT INTO DATA (fname, lname, dob, city, mobile_no) VALUES ('$f', '$l', '$d', '$c', '$m');";

if(mysqli_query($conn, $sql))
{
    echo "Data added successfully"."<br>";
}
else
{
    echo "Failed to Insert. " .$conn->error;
}

echo <<<off
    <form action="form_index.html">
        <p>Want to insert more?</p>
        <input type="submit" name="yes" value="YES"> &nbsp;
        <a href="./display_all.php">Show all data</a>        
    </form>
off;

$conn->close();

?>
