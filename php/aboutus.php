<?php
include 'nav.php';
?>


<link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.css">  
  <link rel="stylesheet" href="../css/about%20us.css">

</head>

<body>
 <!-- ======= Header ======= -->
  <!-- End Header -->
<!--------------about section--------------->   
<section id="about" style="margin-top: 120px">
               <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h1 class="about-text">ABOUT US</h1>
                </div>
            </div><br>
<!--------------image slider---------->     
<div id="slider">  
        <div class="slides">  
          <img class="img-slider" src="../img/one.jpg">
         </div>
        <div class="slides">  
          <img class="img-slider" src="../img/two.jpg">
         </div>
        <div class="slides">  
          <img class="img-slider" src="../img/three.jpg">
         </div>
        <div class="slides">  
          <img class="img-slider" src="../img/four.jpg">
         </div>
        <div class="slides">  
          <img class="img-slider" src="../img/five.jpg">
         </div>
          <div id="dot"><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="dot"></span></div>
    </div><br>
<!------------Questions--------------->       
            <div class="Questions">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <h2 class="question">Who Are We ? </h2>
                            <p class="answer">
                                Msp Tech Club is a student activity organized by Microsoft student partner
                                of Microsoft under the super vision aiming to increase the knowledge of
                                students by providing them with the essential training and skills.
                            </p>
                        </div>
                        <div class="row">
                            <h2 class="question">Our VISION ? </h2>
                            <p class="answer">
                                To prepare youth to be able to carry out the honor Of responsibility of sustainable
                                development.
                            </p>
                        </div>
                        <div class="row">
                            <h2 class="question">Our MISSION ?</h2>
                            <p class="answer">
                                To provide youth with labor market needs through workshops , events and seminars.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2 class="question">OUR GOALS ? </h2>
                        <ul class="goal-list">
                            <li>Eliminate the gap between the job market requirements and what graduates have an educationalqualification.</li>
                            <li>Providing students with the qualifications they need through real experience of the external market and Prepare youth to lead sustainable development in our country.</li>
                            <li>Providing workshops match the labor market need.</li>
                            <li>Replace cairo university as a center to prepare leaders , and this is through some
                            qualifications and courses that may help our delegates to discover the leader in each one ofthem.</li>
                            <li>To prepare a crew able to understand , believe , and spread our message.</li>
                            <li>To create an outstanding simulation.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!---------------Contact us----------->




        <?php

            if (isset($_POST['submit'])) {
                    $fname = $_POST['fname'];
                    $lname = $_POST['lname'];
                    $usmail = $_POST['email'];
                    $description = $_POST['message'];

                        $insert_massage= "INSERT INTO `contact`
                            VALUES ( NULL ,'$usmail','$fname','$lname','$description')";
                        $run_insert_massage = mysqli_query($con, $insert_massage);
                        
                            if ($run_insert_massage) {
                                echo "<script>alert('message added')</script>";
                            }
                        }
        ?>

<!---------------form---------------->    
   <section id="contact" style="margin-bottom: 60px">
    <div class="row" style="margin: 70px 0 20px 0;">
        <div class="col-md-12 col-sm-12">
            <h1 class="con-text">CONTACT US</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-12 ">
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="row">
                    <div class="col-sm-6">
                        <input type="text" class="form-control inpname" placeholder="First name" name="fname" required>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control inpname" placeholder="Last name" name="lname"required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <input type="email" class="form-control inpname" placeholder="Email address" name="email"required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <textarea class="form-control textarea_st" id="exampleFormControlTextarea1" name="message"required
                            placeholder="Write your message"></textarea>
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-secondary btn-lg formbtn" name="submit"><b>Send Message</b></button>
                </div>
            </form>
        </div><br><br>
        <!-----------------icons------------------>
        <div class="col-md-6 col-sm-12">
            <div class="raw" style="margin:10px 0 0 22px;">
                <div>
                    <h3>NEED TO KNOW MORE IN DETAILS ?</h3>
                    <h3>GET IN TOUCH.</h3>
                </div>
                <P class="para">You can contact us through our Facebook page or our account on Instagram or Twitter
                    by clicking on one of the following icons.</P>
                <div class="media">
                    <ul class="list-unstyled">
                        <li class="icon-div">
                            <a href="https://www.facebook.com/MSPCU">
                                <i class="icon fa fa-facebook"></i></a>
                        </li>
                        <li class="icon-div">
                            <a href="https://www.instagram.com/mspcu/">
                                <i class="icon fa fa-instagram"></i></a>
                        </li>
                        <li class="icon-div">
                            <a href="https://twitter.com/mspcu">
                                <i class="icon fa fa-twitter"></i></a>
                        </li>
                        <li class="icon-div">
                            <a href="https://mail.google.com/">
                                <i class="icon fa fa-google"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div><br><br>
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
<!--------javascript for slider--------->
    <script>
    var index = 0;
var slides = document.querySelectorAll(".slides");
var dot = document.querySelectorAll(".dot");

function changeSlide(){

  if(index<0){
    index = slides.length-1;
  }
  
  if(index>slides.length-1){
    index = 0;
  }
  
  for(let i=0;i<slides.length;i++){
    slides[i].style.display = "none";
    dot[i].classList.remove("active");
  }
  
  slides[index].style.display= "block";
  dot[index].classList.add("active");
  
  index++;
  
  setTimeout(changeSlide,2000);
  
}
changeSlide();
</script>   
</html>