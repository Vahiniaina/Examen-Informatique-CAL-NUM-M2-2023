<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<!--head-->
<head>
    <title>Acceuille</title>
    <meta charset="utf-8" >
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link href="../assets/css/navbar-top-fixed.css" rel="stylesheet">
    <script src="../bootstrap/js/jquery-3.5.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    <!--Header-->
    <?php include(dirname(__FILE__).'/header.php'); ?>
    <!-- Content -->
    <section>
        <div class="container-fluid">
            <h1>Hello World </h1>
            <a href="../Controllers/startAdiscussion.php">Start a discussion</a>
            <?php 
                // include(dirname(__FILE__).'/../Controllers/latestdiscussio.php');
            ?>
        </div>
    </section>
    <!--Footer-->
    <?php include(dirname(__FILE__).'/footer.php'); ?>
</body>
</html>