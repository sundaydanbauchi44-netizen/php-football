<?php
include('connect.php');

	$name=$_POST['name'];
    $country=$_POST['country'];
    $age=$_POST['age'];
   
    




if (isset($_POST["edit"])) {
    $name = mysqli_real_escape_string($db_con, $_POST["name"]);
    $country = mysqli_real_escape_string($db_con, $_POST["country"]);
    $age = mysqli_real_escape_string($db_con, $_POST["age"]);
    $id = mysqli_real_escape_string($db_con, $_POST["id"]);
    $sqlUpdate = "UPDATE player SET name = '$name', country = '$country', age = '$age' WHERE id='$id'";
    if(mysqli_query($db_con,$sqlUpdate)){
        session_start();
        $_SESSION["update"] = "player Record Updated Successfully!";
        header("Location: viewplayer.php");
    }else{
        die("Something went wrong");
    }
	}

	

?>