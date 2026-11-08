<?php
include('connect.php');

	$name=$_POST['name'];
    $salary=$_POST['salary'];
    $club=$_POST['club'];

if (isset($_POST["create"])) {
    $name = mysqli_real_escape_string($db_con, $_POST["name"]);
    $salary = mysqli_real_escape_string($db_con, $_POST["salary"]);
    $club = mysqli_real_escape_string($db_con, $_POST["club"]);
    $sqlInsert = "INSERT INTO couth(name,salary,club) VALUES ('$name','$salary','$club')";
    if(mysqli_query($db_con,$sqlInsert)){
        session_start();
        $_SESSION["create"] = "Children Added Successfully!";
        header("Location:viewcouth.php");
    }else{
        die("Something went wrong");
    }
}


    


?>