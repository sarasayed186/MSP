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
  <link rel="stylesheet" href="../css/events.css">

  <link rel="stylesheet" href="../css/navbar.css">
</head>

    
    <section id="events">
        <div class="event-container">
       
            <h2>MSP Events 2022</h2>
            

            
            
             <div class="row">        
                 <?php $select=" SELECT* FROM `event`" ;
            
            $s= mysqli_query($con,$select);
               foreach ($s as $data ) {            ?>


                <div class="col-md-4 col-sm-12">
                    <a target="_blank" href="<?php echo $data['elink'];?>"><img class="event-img" src="../img/<?php  echo $data['abroad_img'];   ?>"></a>
                    <a target="_blank" href="<?php echo $data['elink'];?>"><h2><?php  echo $data['title'];?></h2></a>
                </div>           <?php }?>

              
                
             
            </div>
        </div>
    </section>
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