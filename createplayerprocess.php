<?php
include('connect.php');

	$name=$_POST['name'];
    $country=$_POST['country'];
    $age=$_POST['age'];

if (isset($_POST["create"])) {
    $name = mysqli_real_escape_string($db_con, $_POST["name"]);
    $country = mysqli_real_escape_string($db_con, $_POST["country"]);
    $age = mysqli_real_escape_string($db_con, $_POST["age"]);
    $sqlInsert = "INSERT INTO player(name,country,age) VALUES ('$name','$country','$age')";
    if(mysqli_query($db_con,$sqlInsert)){
        session_start();
        $_SESSION["create"] = "Children Added Successfully!";
        header("Location:viewplayer.php");
    }else{
        die("Something went wrong");
    }
}


    


?>