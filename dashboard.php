<?php

include("connect.php");

/* =========================================
   DASHBOARD STATISTICS
========================================= */

/* COUTH COUNT */
$couth_result = mysqli_query(
    $db_con,
    "SELECT COUNT(*) AS total FROM couth"
);

$couth_football = mysqli_fetch_assoc($couth_result);
$total_couth = $couth_football['total'];


/* PLAYER COUNT */
$player_result = mysqli_query(
    $db_con,
    "SELECT COUNT(*) AS total FROM player"
);

$player_football = mysqli_fetch_assoc($player_result);
$total_player = $player_football['total'];




?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>EAsport | Dashboard</title>

    <link
        rel="stylesheet"
        href="css/style.css"
    >

</head>


<body>


<!-- =========================================
     NAVIGATION
========================================= -->

<?php include ("includes/header.php")?>



<!-- =========================================
     MAIN DASHBOARD
========================================= -->

<main class="dashboard">


    <!-- =====================================
         DASHBOARD HEADER
    ====================================== -->

    <section class="dashboard-header">

        <div>

            <h1>
                Football Management System
            </h1>

            <p>
                Welcome to the EAsport administration dashboard.
            </p>

        </div>

    </section>



    <!-- =====================================
         STATISTICS CARDS
    ====================================== -->

    <section class="stats">


        <!-- COUTH -->

        <div class="stat-card">

            <div class="stat-icon">
                &#128100;
            </div>


            <div>

                <h3>
                    Couth
                </h3>

                <p>
                    <?php echo $total_couth; ?>
                </p>

            </div>

        </div>



        <!-- PLAYER -->

        <div class="stat-card">

            <div class="stat-icon">
                &#128188;
            </div>


            <div>

                <h3>
                    player
                </h3>

                <p>
                    <?php echo $total_player; ?>
                </p>

            </div>

        </div>








        </div>


    </section>



    <!-- =====================================
         QUICK ACTIONS
    ====================================== -->

    <section class="quick-section">

        <h2>
            Quick Actions
        </h2>


        <div class="quick-actions">


            <!-- COUTH -->

            <a
                href="viewcouth.php"
                class="action-card"
            >

                <span>
                    &#128100;
                </span>

                <h3>
                    Manage Couth
                </h3>

                <p>
                    Add, edit, view and delete couth.
                </p>

            </a>



            <!-- PLAYER -->

            <a
                href="viewplayer.php"
                class="action-card"
            >

                <span>
                    &#128188;
                </span>

                <h3>
                    Manage player
                </h3>

                <p>
                    Manage EAsport player records.
                </p>

            </a>


        </div>

    </section>


</main>



<!-- =========================================
     FOOTER
========================================= -->



<?php include ("includes/footer.php")?>
</body>

</html>