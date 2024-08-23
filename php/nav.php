<?php
include 'db.php';
include 'function.php';
session_start();
ob_start();


if(isset ($_POST['logout'])){

session_unset();
session_destroy();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OUR CREW</title>
    <!-- Favicons -->
  <link href="../img/logo.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/navbar.css">
  
</head>
<body>
   <!-- ======= Header ======= -->

   
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">

    <div class="container d-flex justify-content-between align-items-center">
        <div class="logo me-auto">
            <a href="home.php">
                <img src="../img/transparent-logo.png" class="rounded-circle" alt="logo"></a>
        </div>
        <nav id="navbar" class="navbar">
        <i class="bi bi-list mobile-nav-toggle"></i>

            <ul>
                <li><a class="active" href="home.php">Home</a></li>
                <li><a href="aboutus.php">About</a></li>
                <li class="dropdown"><a href="#" style="cursor: default"><span>Our crew</span>
                        <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li class="dropdown-item"><a href="committees.php"><span>Committees</span> 
                            <i class="bi bi-chevron-right"></i></a>

                        </li>
                        <li class="dropdown-item"><a href="workshops.php"><span>Workshops </span> 
                            <i class="bi bi-chevron-right"></i></a>

                        </li>
                        <?php 
                         if(isset($_SESSION['admin'])){
                              ?>
                        <li class="dropdown-item"><a href="addmember.php"><span>Add Member </span> 
                            <i class="bi bi-chevron-right"></i></a>

                        </li>
                        <li class="dropdown-item"><a href="adddcommittee.php"><span>Add Committee </span> 
                            <i class="bi bi-chevron-right"></i></a>

                        </li>
                        <li class="dropdown-item"><a href="listCrew.php"><span> Members' list</span> 
                            <i class="bi bi-chevron-right"></i></a>

                        </li>
                        <li class="dropdown-item"><a href="listComm.php"><span>Committees' list</span> 
                            <i class="bi bi-chevron-right"></i></a>
                        </li>
                        <?php }?>
                    </ul>
                </li>
                

                <?php 
                         if(isset($_SESSION['admin'])){
                              ?>
                <li class="dropdown"><a href="events.php"><span>Events</span> <i class="bi bi-chevron-down"></i></a>
                
                    <ul>
                        <li><a class="dropdown-item" href="addevent.php"><span>Add events</span> <i class="bi bi-chevron-right"></i></a>
                        </li>
                        
                        <li><a class="dropdown-item" href="listevent.php"><span>list event</span> <i class="bi bi-chevron-right"></i></a>
                        </li>

                    </ul>
                    <?php } else{     ?>           <li><a href="events.php">Events</a></li> <?php }?>


                </li>  <?php 
                         if( isset($_SESSION['admin'])){
                              ?>
                <li class="dropdown"><a href="aboutus.php#contact"><span>Contact</span> <i class="bi bi-chevron-down"></i></a>
              
                    <ul>
                        <li><a class="dropdown-item" href="feedback.php"><span>Feedback</span> <i class="bi bi-chevron-right"></i></a>
                        </li>

                    </ul></li>

                <li>  <form action="" method="POST">
                <button type="submit" name="logout" class="btn btn-outline-primary">Log out</button>
                </form>  
</li>                                <?php } else{ ?>           <li><a href="aboutus.php#contact">Contact</a></li> <?php }?>
                        


            </ul>


        </nav><!-- .navbar -->
    </div>
    
</header><!-- End Header -->
