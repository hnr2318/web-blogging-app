<?php include_once('config.php') ?>

<?php 
    $username = "";
    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
    }
?>
<html>

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>blogger</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

    <header>
        <!-- header inner -->
        <div class="navigation1">
            <div class="header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                            <div class="full">
                                <div class="center-desk">
                                    <div class="logo">
                                        <a href="index.php"><img src="images/logo.png" alt="#" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                            <nav class="navigation navbar navbar-expand-md navbar-dark ">
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarsExample04" aria-controls="navbarsExample04"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarsExample04">
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item">
                                            <a class="nav-link" href="./index.php"> Home </a>
                                        </li>
                                        <?php 
                                            if ($username !== "") {
                                                echo 
                                                    '<li class="nav-item">'.
                                                    '<a class="nav-link" href="./publish.php">Publish Post</a>'.
                                                    '</li>';

                                                echo 
                                                    '<li class="nav-item">'.
                                                    '<a class="nav-link" href="./logout.php">Log out</a>'.
                                                    '</li>';
                                                 echo 
                                                    '<li class="nav-item">'.
                                                    "Welcome {$username}".
                                                    '</li>';
                                            }
                                            else {
                                                echo 
                                                    '<li class="nav-item">'.
                                                    '<a class="nav-link" href="./login.php">Login</a>'.
                                                    '</li>';
                                                echo 
                                                    '<li class="nav-item">'.
                                                    '<a class="nav-link" href="./register.php">Register</a>'.
                                                    '</li>';
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end header inner -->
            <!-- end header -->
            <!-- banner -->
          
        </div>
    </header>

<body class="main-layout">
   