<?php
include("common.php");

$id = $_GET['id'];
$fn = $_GET['fn'];
$ln = $_GET['ln'];
$db = $_GET['db'];
$ct = $_GET['ct'];
$mn = $_GET['mn'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-12">
                <h3>Update Record</h3><br>

                <form action=""  method="GET">
                    <div class="form-group">
                        <label for="_id">Id : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="number" name="id" value="<?php echo "$id" ?>"><br><br>
                    </div>
                    <div class="form-group">
                        <label for="_fname">First Name : </label>
                        <input type="text" name="fname" value="<?php echo "$fn" ?>"><br><br>
                    </div>
                    <div class="form-group">
                        <label for="_lname">Last Name : </label>
                        <input type="text" name="lname" value="<?php echo "$ln" ?>"><br><br>
                    </div>
                    <div class="form-group">
                        <label for="_dob">DOB : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="date" name="date" value="<?php echo "$db" ?>"><br><br>
                    </div>
                    <div class="form-group">
                        <label for="_city">City : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" name="city" value="<?php echo "$ct" ?>"><br><br>            
                    </div>
                    <div class="form-group">
                        <label for="_mono">Mobile No : </label>
                        <input type="text" name="mono" value="<?php echo "$mn" ?>"><br><br>
                    </div>                    
                        <!--    <button type="submit" name="submit" class="btn btn-primary">Update</button>&nbsp; &nbsp;    -->
                        <input type="submit" class="formbutton" id="button" name="update_details" value="Update Details">
                        <a href="./display_all.php">Show all data</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php 

// To bind the data to DB
if(isset($_GET['update_details']))
{
    $id = $_GET['id'];    
    $fname = $_GET['fname'];
    $lname = $_GET['lname'];
    $dob = $_GET['date'];
    $city = $_GET['city'];
    $mono = $_GET['mono'];

    $query = "UPDATE DATA SET id='$id', fname='$fname', lname='$lname', dob='$dob', city='$city', mobile_no='$mono'
                 WHERE id = '$id'";

    $data = mysqli_query($conn, $query);

    if($data)
    {        
        echo "<script>alert('Record Updated')</script>";

        //  Redirect browser 
        //header("Location: http://localhost:81/Practice/Database/display_all.php");
        //exit;
        ?>
        <META http-equiv="Refresh" content="0; 
        URL = http://localhost:81/Practice/Database/display_all.php">
        <?php
    }
    else
    {
        echo "Fail to Update Record";
    }

}

?>