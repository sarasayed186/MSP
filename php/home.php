
<?php
include 'nav.php';
?>




<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>msp</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
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
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/navbar.css">
  <link href="../css/home.css" rel="stylesheet">

</head>
<body>
  <!-- ======= main Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center"
    style="background-image:url(../img/backgroundmsp.jpg);background-size: cover;background-attachment: fixed; background-position: center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        <!-- content-->
        <div class="carousel-item active">
            <div class="carousel-container">
                <h2 class="animate__animated animate__fadeInDown txt">Welcome to MSP CU<br> <span>2022</span></h2>
                <p class="animate__animated animate__fadeInUp">Your potential is our passion </p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp">Let's Start</a>
            </div>
        </div>
    </div>
</section><!-- End content -->
<!-- ======= Who we are ======= -->
   <section id="about" class="about">
    <div class="container">
        <div class="section-title">
            <h2>Who Are We?</h2>
        </div>
        <div class="row">
            <div class="col-md-6 order-1 order-md-2">
                <img src="../img/logo.png" class="img-fluid" alt="">
            </div>
            <div class="col-md-6 order-2 order-md-1">
                <p class="about-msp">
                    Msp Tech Club is a student activity organized by Microsoft student partner
                    of Microsoft under the super vision aiming to increase the knowledge of
                    students by providing them with the essential training and skills.
                </p>
                <div class="stage">
                    <a href="aboutus.php" class="learn-more">Learn More</a>
                </div>
            </div>
        </div>
    </div>
  </section>
<!-- ======= crew ======= -->
<section class="crew-post animated-box in" style="width: 70%; margin-bottom: 100px">
        <div class="container text-center">
            <h1 class="text-uppercase">People Behind MSP</h1>
            <!-- president section -->
            <?php
            $select= " SELECT `name` , `role-tit`, `pics` from `members` join `role` on `role` = `role-ID` where `role-tit` = 'president' ";
            $s= mysqli_query($con, $select );  
            foreach ($s as $data ) {

            ?>
            <div class="row">
                <div class="col">
                    <div class="headcard">
                      <img src="../img/<?php  echo $data['pics'];   ?>" class="card-img pic" alt="...">
                        <div class="card-body">
                          <h2 class="card-title"><?php  echo $data['name'];   ?></h2>
                          <h4 class="card-subtitle mb-2  "><?php  echo $data['role-tit'];   ?></h4>
                        </div>
                      </div>
                </div>
            </div><?php }?>
            <!-- vice president section -->
            <div class="row ">
            <?php
            $select= " SELECT `name` , `role-tit`, `pics` from `members` join `role` on `role` = `role-ID`  where `role-tit` like '%vice pr%' ";
            $s= mysqli_query($con, $select );  
            foreach ($s as $data ) {

            ?>
              <div class="col-lg-6 col-md-6 col-sm-12">
                  <div class="box">
                      <img src="../img/<?php  echo $data['pics'];   ?>" class="card-img pic" alt="...">
                      <div class="card-body">
                        <h4 class="card-title"> <?php  echo $data['name'];?> </h4>
                        <h6 class="card-subtitle mb-2"><?php  echo $data['role-tit'];?></h6>
                      </div>
                  </div>
              </div><?php }?>
              
            </div>
        </div>
    </section><br> 
<!-- ======= bottom to up ======= -->
    
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center" style="background-color: #1ebbff;border-radius: 100%"><i class="bi bi-arrow-up-short"></i></a>
    
<!-- ============= footer========== -->
 <?php include 'footer.php';
?>
 
  
</body>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>  
  <script src="../assets/js/java.js"></script>
  <script src="../assets/js/main.js"></script>
</html>