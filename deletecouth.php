```php
<?php

include("connect.php");


/* =========================================
   CHECK COUTH ID
========================================= */

if (isset($_GET['id']) && is_numeric($_GET['id'])) {

    $id = mysqli_real_escape_string(
        $db_con,
        $_GET['id']
    );


    /* =========================================
       DELETE COUTH
    ========================================= */

    $sql = "DELETE FROM couth WHERE id='$id'";


    if (mysqli_query($db_con, $sql)) {

        session_start();

        $_SESSION["delete"] =
            "Couth Record Deleted Successfully!";

        header("Location: viewcouth.php");

        exit();

    } else {

        die(
            "Unable to delete couth record. Please try again."
        );

    }

} else {

    echo "Invalid couth record.";

}

?>
```
