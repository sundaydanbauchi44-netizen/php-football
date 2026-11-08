
<?php

include 'connect.php';

/* =========================================
   SEARCH COUTH
========================================= */

$search = "";

if (isset($_GET['search'])) {

    $search = mysqli_real_escape_string(
        $db_con,
        $_GET['search']
    );

}


/* =========================================
   CUSTOMER QUERY
========================================= */

if ($search != "") {

    $sql = mysqli_query(
        $db_con,
        "SELECT * FROM couth
         WHERE name LIKE '%$search%'
         OR salary LIKE '%$search%'
         OR club LIKE '%$search%'"
    ); 

} else {

    $sql = mysqli_query(
        $db_con,
        "SELECT * FROM couth"
    );

}

?>


<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Football | Couth</title>

    <link rel="stylesheet"
          href="css/style.css">

</head>


<body>


<!-- =========================================
     HEADER
========================================= -->

<?php include ("includes/header.php")?>



<!-- =========================================
     COUTH SECTION
========================================= -->

<main class="couth-page">


    <div class="couth-header">

        <div>

            <h1>Couth Management</h1>

            <p>
                View and manage EAsport couth records.
            </p>

        </div>


        <a href="createcouth.php"
           class="add-couth-btn">

            + Add Couth

        </a>

    </div>



    <!-- =====================================
         SEARCH
    ====================================== -->

    <div class="couth-search">

        <form method="GET"
              action="viewcouth.php">

            <input
                type="text"
                name="search"
                placeholder="Search couth by name, salary, club..."
                value="<?php echo htmlentities($search); ?>"
            >


            <button type="submit">
                Search
            </button>


            <?php if ($search != "") { ?>

                <a href="viewcouth.php"
                   class="clear-search">

                    Clear

                </a>

            <?php } ?>

        </form>

    </div>



    <!-- =====================================
         COUTH TABLE
    ====================================== -->

    <div class="couth-table-card">


        <!-- COUTH LIST HEADER -->

        <div class="table-title">

            <h2>
                Couth List
            </h2>


            <a href="excelcouth.php<?php
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

                        <th>Salary</th>

                        <th>Club</th>

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


                        <td class="couth-name">

                            <?php

                            echo htmlentities(
                                $row['name']
                            );

                            ?>

                        </td>


                        <td>

                            <?php

                            echo htmlentities(
                                $row['salary']
                            );

                            ?>

                        </td>


                        <td>

                            <?php

                            echo htmlentities(
                                $row['club']
                            );

                            ?>

                        </td>





                        <td>

                            <div class="action-buttons">


                                <a
                                    href="editcouth.php?id=<?php echo $row['id']; ?>"
                                    class="edit-btn"
                                >

                                    Edit

                                </a>


                                <a
                                    href="deletecouth.php?id=<?php echo $row['id']; ?>"
                                    class="delete-btn"
                                    onclick="return confirm('Are you sure you want to delete this couth?');"
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
                            class="no-couth"
                        >

                            No couth records found.

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

<?php include ("includes/footer.php")?>

</body>

</html>
