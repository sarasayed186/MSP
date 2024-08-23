
<?php include 'nav.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .pop .box {
            width: 80%;
        }
        .pop .card-title {
            margin: 27px 0 10px 0;
        }
        .member img{
  width: 131px;
  height: 131px;
}
    </style>
</head>
<body>
    <!-- ======= Header ======= -->
  
    <section class="crew-post animated-box in" id="workshops">
    <div class="container text-center">
        <h1 class="text-uppercase">workshops</h1>
        <?php $select_comm = "SELECT `type-ID`, `cate-name`, `cname`, `cpics`,  `id`, `cname` , `cdetails` from `committee` join `committee-cate` on `type-ID` = `cate-ID` where `cname` like '%evelop%' ";
      $work_web = mysqli_query($con, $select_comm);
      foreach ($work_web as $web) {
          ?>
        <div class="row ">
          <!--  web workshop -->


      
            <div class="col-lg-4 col-md-6 col-sm-12">
              
              <div class="box">
                <a type="button" class=" " data-toggle="modal" data-target="#web">
                  <img src="../img/<?php echo $web['cpics']; ?>" class="card-img  pic " alt="...">
                </a>
                  <div class="card-body">
                    <h4 class="card-title"><?php echo $web['cname']; ?></h4>
                  </div>
              </div>
            </div><?php } ?>
             



        <?php $select_comm = "SELECT `type-ID`, `cate-name`, `cname`, `cpics`,  `id`, `cname` , `cdetails` from `committee` join `committee-cate` on `type-ID` = `cate-ID` where `cname` like '%obile%' ";
      $work_mob = mysqli_query($con, $select_comm);
      foreach ($work_mob as $mob) {
          ?>
          <!--  mob workshop -->


      
            <div class="col-lg-4 col-md-6 col-sm-12">
              
              <div class="box">
                <a type="button" class=" " data-toggle="modal" data-target="#mob">
                  <img src="../img/<?php echo $mob['cpics']; ?>" class="card-img  pic " alt="...">
                </a>
                  <div class="card-body">
                    <h4 class="card-title"><?php echo $mob['cname']; ?></h4>
                  </div>
              </div>
            </div><?php } ?>
             

        <?php $select_comm = "SELECT `type-ID`, `cate-name`, `cname`, `cpics`,  `id`, `cname` , `cdetails` from `committee` join `committee-cate` on `type-ID` = `cate-ID` where `cname` like '%nterac%' ";
      $work_inter = mysqli_query($con, $select_comm);
      foreach ($work_inter as $inter) {
          ?>
          <!--  inter workshop -->


      
            <div class="col-lg-4 col-md-6 col-sm-12">
              
              <div class="box">
                <a type="button" class=" " data-toggle="modal" data-target="#inter">
                  <img src="../img/<?php echo $inter['cpics']; ?>" class="card-img  pic " alt="...">
                </a>
                  <div class="card-body">
                    <h4 class="card-title"><?php echo $inter['cname']; ?></h4>
                  </div>
              </div>
            </div><?php } ?>
             
            <?php $select_comm = "SELECT `type-ID`, `cate-name`, `cname`, `cpics`,  `id`, `cname` , `cdetails` from `committee` join `committee-cate` on `type-ID` = `cate-ID` where `cname` = 'Marketing' ";
      $work_mark = mysqli_query($con, $select_comm);
      foreach ($work_mark as $mark) {
          ?>
          <!--  market workshop -->


      
            <div class="col-lg-4 col-md-6 col-sm-12">
              
              <div class="box">
                <a type="button" class=" " data-toggle="modal" data-target="#mark">
                  <img src="../img/<?php echo $mark['cpics']; ?>" class="card-img  pic " alt="...">
                </a>
                  <div class="card-body">
                    <h4 class="card-title"><?php echo $mark['cname']; ?></h4>
                  </div>
              </div>
            </div><?php } ?>
            <?php $select_comm = "SELECT `type-ID`, `cate-name`, `cname`, `cpics`,  `id`, `cname` , `cdetails` from `committee` join `committee-cate` on `type-ID` = `cate-ID` where `cname` like '%kills' ";
      $work_soft = mysqli_query($con, $select_comm);
      foreach (  $work_soft as $soft) {
          ?>
          <!--  soft workshop -->


      
            <div class="col-lg-4 col-md-6 col-sm-12">
              
              <div class="box">
                <a type="button" class=" " data-toggle="modal" data-target="#soft">
                  <img src="../img/<?php echo $soft['cpics']; ?>" class="card-img  pic " alt="...">
                </a>
                  <div class="card-body">
                    <h4 class="card-title"><?php echo $soft['cname']; ?></h4>
                  </div>
              </div>
            </div><?php } ?>
            

    </div>

    </div>
    
    </section>

    <!-- Modals -->
    
    <!-- workshops Modals -->
    
    <!-- web Modal -->
    <section class="pop">
      <div class="modal fade text-center" id="web" tabindex="-1" aria-labelledby="web" aria-hidden="true">
        <div class=" modal-dialog animated-box in animated-box in">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-uppercase" id="web">web development workshop</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">X</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
              <?php
               $select = "SELECT `cname` , `members`.`name` , `pics`, `cpics`, `cdetails`, `role-tit`,`id` , `comm` from `members` join `committee` on `comm` = `committee`.`id` join `role` on `role`= `role-ID`  where `cname` like '%evelop%' ";;
                   $s = mysqli_query($con, $select);
                   foreach ($s as $data) { ?>

                  <div class="col-md-6 col-sm-12 border-right">
                
                    <div class="row member"> 
                      <div class="col-6">
                        <div class="box">
                          <img src="../img/<?php echo $data['pics']; ?>" class="card-img  pic " alt="...">
                      </div>
                      </div>
                      <div class="col-6">
                        <div class="card-body hbox">
                          <h2 class="card-title"><?php echo $data['name']; ?></h2>
                          <h4 class="card-subtitle mb-2  "> AC <?php echo $data['role-tit']; ?></h4>
                        </div>
                      </div>

                    </div>                             
      
                  </div> <?php } ?>
                  
              </div>
              <hr>
          
              <div class="row">
            <?php foreach ($work_web as $web) { ?>

              <div class="col">
                <h5 class="modal-title text-uppercase" id="med"><?php echo $web['cname']; ?></h5>
                <p class="text-left"><?php echo $web['cdetails']; ?></p>
              </div>
                <?php }?>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
   
    
    <!-- mob Modal -->
    <section class="pop">
      <div class="modal fade text-center" id="mob" tabindex="-1" aria-labelledby="mob" aria-hidden="true">
        <div class=" modal-dialog animated-box in animated-box in">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-uppercase" id="mob"> Mobile Application workshop</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">X</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
              <?php
               $select = "SELECT `cname` , `members`.`name` , `pics`, `cpics`, `cdetails`, `role-tit`,`id` , `comm` from `members` join `committee` on `comm` = `committee`.`id` join `role` on `role`= `role-ID`  where `cname` like '%obile%' ";;
                   $s = mysqli_query($con, $select);
                   foreach ($s as $data) { ?>

                  <div class="col-md-6 col-sm-12 border-right">
                
                    <div class="row member"> 
                      <div class="col-6">
                        <div class="box">
                          <img src="../img/<?php echo $data['pics']; ?>" class="card-img  pic " alt="...">
                      </div>
                      </div>
                      <div class="col-6">
                        <div class="card-body hbox">
                          <h2 class="card-title"><?php echo $data['name']; ?></h2>
                          <h4 class="card-subtitle mb-2  "> AC <?php echo $data['role-tit']; ?></h4>
                        </div>
                      </div>

                    </div>                             
      
                  </div> <?php } ?>
                  
              </div>
              <hr>
          
              <div class="row">
            <?php foreach ($work_mob as $mob) { ?>

              <div class="col">
                <h5 class="modal-title text-uppercase" id="med"><?php echo $mob['cname']; ?></h5>
                <p class="text-left"><?php echo $mob['cdetails']; ?></p>
              </div>
                <?php }?>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
    <!-- interact Modal -->
    <section class="pop">
      <div class="modal fade text-center" id="inter" tabindex="-1" aria-labelledby="inter" aria-hidden="true">
        <div class=" modal-dialog animated-box in animated-box in">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-uppercase" id="inter"> Interaction Design workshop</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">X</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
              <?php
               $select = "SELECT `cname` , `members`.`name` , `pics`, `cpics`, `cdetails`, `role-tit`,`id` , `comm` from `members` join `committee` on `comm` = `committee`.`id` join `role` on `role`= `role-ID`  where `cname` like '%nterac%' ";;
                   $s = mysqli_query($con, $select);
                   foreach ($s as $data) { ?>

                  <div class="col-md-6 col-sm-12 border-right">
                
                    <div class="row member"> 
                      <div class="col-6">
                        <div class="box">
                          <img src="../img/<?php echo $data['pics']; ?>" class="card-img  pic " alt="...">
                      </div>
                      </div>
                      <div class="col-6">
                        <div class="card-body hbox">
                          <h2 class="card-title"><?php echo $data['name']; ?></h2>
                          <h4 class="card-subtitle mb-2  "> AC <?php echo $data['role-tit']; ?></h4>
                        </div>
                      </div>

                    </div>                             
      
                  </div> <?php } ?>
                  
              </div>
              <hr>
          
              <div class="row">
            <?php foreach ($work_inter as $inter) { ?>

              <div class="col">
                <h5 class="modal-title text-uppercase" id="med"><?php echo $inter['cname']; ?></h5>
                <p class="text-left"><?php echo $inter['cdetails']; ?></p>
              </div>
                <?php }?>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
    <!-- mark Modal -->
    <section class="pop">
      <div class="modal fade text-center" id="mark" tabindex="-1" aria-labelledby="mark" aria-hidden="true">
        <div class=" modal-dialog animated-box in animated-box in">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-uppercase" id="mark"> Marketing workshop</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">X</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
              <?php
               $select = "SELECT `cname` , `members`.`name` , `pics`, `cpics`, `cdetails`, `role-tit`,`id` , `comm` from `members` join `committee` on `comm` = `committee`.`id` join `role` on `role`= `role-ID`  where `cname` like 'Marketing' ";;
                   $s = mysqli_query($con, $select);
                   foreach ($s as $data) { ?>

                  <div class="col-md-6 col-sm-12 border-right">
                
                    <div class="row member"> 
                      <div class="col-6">
                        <div class="box">
                          <img src="../img/<?php echo $data['pics']; ?>" class="card-img  pic " alt="...">
                      </div>
                      </div>
                      <div class="col-6">
                        <div class="card-body hbox">
                          <h2 class="card-title"><?php echo $data['name']; ?></h2>
                          <h4 class="card-subtitle mb-2  "> AC <?php echo $data['role-tit']; ?></h4>
                        </div>
                      </div>

                    </div>                             
      
                  </div> <?php } ?>
                  
              </div>
              <hr>
          
              <div class="row">
            <?php foreach ($work_mark as $mark) { ?>

              <div class="col">
                <h5 class="modal-title text-uppercase" id="med"><?php echo $mark['cname']; ?></h5>
                <p class="text-left"><?php echo $mark['cdetails']; ?></p>
              </div>
                <?php }?>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
     <!-- soft Modal -->
     <section class="pop">
      <div class="modal fade text-center" id="soft" tabindex="-1" aria-labelledby="soft" aria-hidden="true">
        <div class=" modal-dialog animated-box in animated-box in">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-uppercase" id="soft"> Soft Skills</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">X</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
              <?php
               $select = "SELECT `cname` , `members`.`name` , `pics`, `cpics`, `cdetails`, `role-tit`,`id` , `comm` from `members` join `committee` on `comm` = `committee`.`id` join `role` on `role`= `role-ID`  where `cname` like '%kills' ";;
                   $s = mysqli_query($con, $select);
                   foreach ($s as $data) { ?>

                  <div class="col-md-6 col-sm-12 border-right">
                
                    <div class="row member"> 
                      <div class="col-6">
                        <div class="box">
                          <img src="../img/<?php echo $data['pics']; ?>" class="card-img  pic " alt="...">
                      </div>
                      </div>
                      <div class="col-6">
                        <div class="card-body hbox">
                          <h2 class="card-title"><?php echo $data['name']; ?></h2>
                          <h4 class="card-subtitle mb-2  "> AC <?php echo $data['role-tit']; ?></h4>
                        </div>
                      </div>

                    </div>                             
      
                  </div> <?php } ?>
                  
              </div>
              <hr>
          
              <div class="row">
            <?php foreach ($work_soft as $soft) { ?>

              <div class="col">
                <h5 class="modal-title text-uppercase" id="med"><?php echo $soft['cname']; ?></h5>
                <p class="text-left"><?php echo $soft['cdetails']; ?></p>
              </div>
                <?php }?>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
  <br><br>
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
<script src="../js/jquery-3.6.0.min.js"></script>
<script src="../js/main.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>

</html>