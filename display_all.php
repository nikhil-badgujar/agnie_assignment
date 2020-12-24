<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    
<?php

    include("common.php");

    $sql = "SELECT * FROM DATA";

    $result = $conn->query($sql);

    if($result ->num_rows > 0)
    {
?>
    <div class="container">
        <div class="table-responsive">
            <h3> All Records : </h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>FName</th>
                        <th>LName</th>
                        <th>DOB</th>
                        <th>City</th>
                        <th>Mobile No</th>
                        <th align=center>Update</th>
                        <th align=center>Delete</th>
                    </tr>           
                </thead>
                <tbody>
<?php             
                    while($row = $result->fetch_assoc())
                    {
                        echo "
                        <tr>
                            <td>" .$row['id']. "</td>
                            <td>" .$row['fname']. "</td>
                            <td>" .$row['lname']. "</td>
                            <td>" .$row['dob']. "</td>
                            <td>" .$row['city']. "</td>
                            <td>" .$row['mobile_no']. "</td>
                            <td><a href = 'update.php?id=$row[id]&fn=$row[fname]&ln=$row[lname]&db=$row[dob]&ct=$row[city]&mn=$row[mobile_no]'>Update</td>
                            <td><a href = 'delete.php?id=$row[id]&fn=$row[fname]&ln=$row[lname]&db=$row[dob]&ct=$row[city]&mn=$row[mobile_no]'>Delete</td>
                        </tr>
                        ";            
                    }
?>                           
                </tbody>
            </table>
                <br>
                <a href="./form_index.html">Add New Record</a>
        </div>
    </div>

<?php
    }
    else    
    {
        echo "0 Results.";
    }

    $conn->close();
?>

</body>
</html>