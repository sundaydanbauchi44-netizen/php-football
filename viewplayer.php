
<?php

include 'connect.php';

/* =========================================
   SEARCH PLAYER
========================================= */

$search = "";

if (isset($_GET['search'])) {

    $search = mysqli_real_escape_string(
        $db_con,
        $_GET['search']
    );

}


/* =========================================
   PLAYER QUERY
========================================= */

if ($search != "") {

    $sql = mysqli_query(
        $db_con,
        "SELECT * FROM player
         WHERE name LIKE '%$search%'
         OR country LIKE '%$search%'
         OR age LIKE '%$search%'"
    ); 

} else {

    $sql = mysqli_query(
        $db_con,
        "SELECT * FROM player"
    );

}

?>


<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Football | Player</title>

    <link rel="stylesheet"
          href="css/style.css">

</head>


<body>


<!-- =========================================
     HEADER
========================================= -->

<?php include ("includes/header.php")?>



<!-- =========================================
     PLAYER SECTION
========================================= -->

<main class="player-page">


    <div class="player-header">

        <div>

            <h1>Player Management</h1>

            <p>
                View and manage football player records.
            </p>

        </div>


        <a href="createplayer.php"
           class="add-player-btn">

            + Add Player

        </a>

    </div>



    <!-- =====================================
         SEARCH
    ====================================== -->

    <div class="player-search">

        <form method="GET"
              action="viewplayer.php">

            <input
                type="text"
                name="search"
                placeholder="Search player by name, country, age..."
                value="<?php echo htmlentities($search); ?>"
            >


            <button type="submit">
                Search
            </button>


            <?php if ($search != "") { ?>

                <a href="viewplayer.php"
                   class="clear-search">

                    Clear

                </a>

            <?php } ?>

        </form>

    </div>



    <!-- =====================================
         PLAYER TABLE
    ====================================== -->

    <div class="player-table-card">


        <!-- PLAYER LIST HEADER -->

        <div class="table-title">

            <h2>
                Player List
            </h2>


            <a href="excelplayer.php<?php
                echo ($search != "")
                    ? '?search=' . urlencode($search)
                    : '';
            ?>"
               class="export-excel-btn">

                📊 Export Excel

            </a>

        </div>


        <?php if ($search != "") { ?>

            <p class="search-result-text">

                Search results for:

                <strong>
                    <?php echo htmlentities($search); ?>
                </strong>

            </p>

        <?php } ?>


        <div class="table-responsive">

            <table class="customer-table">

                <thead>

                    <tr>

                        <th>#</th>

                        <th>Name</th>

                        <th>Country</th>

                        <th>Age</th>

                        <th>Action</th>

                    </tr>

                </thead>


                <tbody>


                <?php

                $cnt = 1;

                if (mysqli_num_rows($sql) > 0) {

                    while ($row = mysqli_fetch_array($sql)) {

                ?>


                    <tr>

                        <td>

                            <?php echo $cnt; ?>

                        </td>


                        <td class="player-name">

                            <?php

                            echo htmlentities(
                                $row['name']
                            );

                            ?>

                        </td>


                        <td>

                            <?php

                            echo htmlentities(
                                $row['country']
                            );

                            ?>

                        </td>


                        <td>

                            <?php

                            echo htmlentities(
                                $row['age']
                            );

                            ?>

                        </td>





                        <td>

                            <div class="action-buttons">


                                <a
                                    href="editplayer.php?id=<?php echo $row['id']; ?>"
                                    class="edit-btn"
                                >

                                    Edit

                                </a>


                                <a
                                    href="deleteplayer.php?id=<?php echo $row['id']; ?>"
                                    class="delete-btn"
                                    onclick="return confirm('Are you sure you want to delete this player?');"
                                >

                                    Delete

                                </a>


                            </div>

                        </td>

                    </tr>


                <?php

                        $cnt++;

                    }

                } else {

                ?>


                    <tr>

                        <td
                            colspan="6"
                            class="no-player"
                        >

                            No player records found.

                        </td>

                    </tr>


                <?php } ?>


                </tbody>

            </table>

        </div>

    </div>


</main>



<!-- =========================================
     FOOTER
========================================= -->

<?php include ("includes/header.php")?>

</body>

</html>
