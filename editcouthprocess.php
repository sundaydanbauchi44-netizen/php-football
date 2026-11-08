<?php
include('connect.php');

	$name=$_POST['name'];
    $salary=$_POST['salary'];
    $club=$_POST['club'];
   
    




if (isset($_POST["edit"])) {
    $name = mysqli_real_escape_string($db_con, $_POST["name"]);
    $salary = mysqli_real_escape_string($db_con, $_POST["salary"]);
    $club = mysqli_real_escape_string($db_con, $_POST["club"]);
    $id = mysqli_real_escape_string($db_con, $_POST["id"]);
    $sqlUpdate = "UPDATE couth SET name = '$name', salary = '$salary', club = '$club' WHERE id='$id'";
    if(mysqli_query($db_con,$sqlUpdate)){
        session_start();
        $_SESSION["update"] = "couth Record Updated Successfully!";
        header("Location: viewcouth.php");
    }else{
        die("Something went wrong");
    }
	}

	

?>