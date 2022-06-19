<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: index.php');
    exit;
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <meta charset="UTF-8">
    <title>BOL/BOS Filtering</title>
    <meta name="description" contents="Just a test website for learning html, css and php">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <title>Dashboard For Admin</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bootstrap.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    <link href="../blog.css" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Admin Dashboard</a>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="logout.php">Sign out</a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <form method="post">
                        
                        <ul class="nav flex-column d-grid">
                        <div class="btn-group-vertical mx-auto" role="group" aria-label="First group">
                            
                            <button type="submit" class="btn btn-outline-secondary" name="Dashboard">
                            <span data-feather="home"></span>
                            <span class="sr-only">(current)</span>Dashboard
                            </button>

                            <button type="submit" class="btn btn-outline-secondary" name="button2">
                            <span data-feather="star"></span>
                            <span class="sr-only"></span>BOS
                            </button>

                            <button type="submit" class="btn btn-outline-secondary" name="button3">
                            <span data-feather="star"></span>
                            <span class="sr-only"></span>BOL
                            </button>

                            <button type="submit" class="btn btn-outline-secondary" name="button4">
                            <span data-feather="star"></span>
                            <span class="sr-only"></span>Hybrid
                            </button>
                            
                        </div>
                    </form>
                </div>

            </nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <!--?php include 'dash_bol.php'; ?-->

                <?php

                if (array_key_exists('Dashboard', $_POST)) {
                    button1();
                } else if (array_key_exists('button2', $_POST)) {
                    button2();
                } else if (array_key_exists('button3', $_POST)) {
                    button3();
                } else if (array_key_exists('button4', $_POST)) {
                    button4();
                } else if (array_key_exists('button5', $_POST)) {
                    button5();
                } else if (array_key_exists('button6', $_POST)) {
                    button6();
                } else if (array_key_exists('button7', $_POST)) {
                    button7();
                }

                function button1()
                {
                    include 'dash_bol.php';
                }
                function button2()
                {
                    include 'dash_bos.php';
                }
                function button3()
                {
                    include 'dash_bol.php';
                }
                function button4()
                {
                    include 'dash_hybrid.php';
                }
                function button5()
                {
                    include '../PT/bos.php';
                }
                function button6()
                {
                    include '../PT/bol.php';
                }
                function button7()
                {
                    include '../PT/hybrid.php';
                }
                ?>
            </main>
        </div>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()
    </script>

</body>

</html>