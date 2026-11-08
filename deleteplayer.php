```php
<?php

include("connect.php");


/* =========================================
   CHECK PLAYER ID
========================================= */

if (isset($_GET['id']) && is_numeric($_GET['id'])) {

    $id = mysqli_real_escape_string(
        $db_con,
        $_GET['id']
    );


    /* =========================================
       DELETE PLAYER
    ========================================= */

    $sql = "DELETE FROM player WHERE id='$id'";


    if (mysqli_query($db_con, $sql)) {

        session_start();

        $_SESSION["delete"] =
            "Player Record Deleted Successfully!";

        header("Location: viewplayer.php");

        exit();

    } else {

        die(
            "Unable to delete player record. Please try again."
        );

    }

} else {

    echo "Invalid player record.";

}

?>
```
