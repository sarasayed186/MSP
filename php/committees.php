<?php
include 'nav.php';

$select_comm = "SELECT `type-ID`, `cate-name`, `cname`, `cpics`,`comm` , `id` from `committee` join `committee-cate` on `type-ID` = `cate-ID` join `members` on `id`=`comm` ";;
$comm = mysqli_query($con, $select_comm);


$select_member = "SELECT `cname` , `members`.`name` , `pics`, `cpics`, `cdetails`, `role-tit` from `members` join `committee` on `comm` = `committee`.`id` join `role` on `members`.`role`= `role-ID` ";
$m = mysqli_query($con, $select_member);




?>

<!DOCTYPE html>
<html lang="en">
  <head>
<style>

.member img{
  width: 131px;
  height: 131px;
}
</style>
  
</head>

<body>
  <!-- 
      crew-post
      committees section
    -->
          <!-- IT -->

  <section class="crew-post animated-box in" id="committees">
    <div class="container text-center">
      <h1 class="text-uppercase">OC committees</h1>
      <?php $select_comm = "SELECT `type-ID`, `cate-name`, `cname`, `cpics`,  `id`, `cname` , `cdetails` from `committee` join `committee-cate` on `type-ID` = `cate-ID` where `cname`= 'IT' ";
      $comm_it = mysqli_query($con, $select_comm);
      foreach ($comm_it as $it) {
          ?>

        <div class="row ">




          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="box">
            <a type="button" class=" " data-toggle="modal" data-target="#it">
                <img src="../img/<?php echo $it['cpics']; ?>" class="card-img  pic " alt="...">
              </a>
          
              <div class="card-body">
                <h4 class="card-title"> <?php echo $it['cname']; ?></h4>
              </div>
            </div>
          </div> <?php } ?>

        <!-- fr -->


        <?php $select_comm = "SELECT `type-ID`, `cate-name`, `cname`, `cpics`,  `id`, `cname`,`cdetails` from `committee` join `committee-cate` on `type-ID` = `cate-ID`  where `cname` = 'FR'  ";
        $comm_fr = mysqli_query($con, $select_comm);
        foreach ($comm_fr as $fr) {
          

        ?>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="box">
              <a type="button" class=" " data-toggle="modal" data-target="#fr">
                <img src="../img/<?php echo $fr['cpics']; ?>" class="card-img  pic " alt="...">
              </a>
              <div class="card-body">
                <h4 class="card-title"> <?php echo $fr['cname']; ?></h4>
              </div>
            </div>
          </div> <?php } ?>

        <!-- log -->


        <?php $select_comm = "SELECT `type-ID`, `cate-name`, `cname`, `cpics`,  `id`, `cname`,`cdetails` from `committee` join `committee-cate` on `type-ID` = `cate-ID`  where `cname` like '%ogistic%' ";;
        $comm_log = mysqli_query($con, $select_comm);
        foreach ($comm_log as $log) {
          

        ?>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="box">
              <a type="button" class=" " data-toggle="modal" data-target="#log">
                <img src="../img/<?php echo $log['cpics']; ?>" class="card-img  pic " alt="...">
              </a>
              <div class="card-body">
                <h4 class="card-title"> <?php echo $log['cname']; ?></h4>
              </div>
            </div>
          </div> <?php } ?>

        <!-- digital -->

        <?php $select_comm = "SELECT `type-ID`, `cate-name`, `cname`, `cpics`,  `id`, `cname`,`cdetails` from `committee` join `committee-cate` on `type-ID` = `cate-ID`  where `cname` like '%igital%' ";;
        $comm_mark = mysqli_query($con, $select_comm);
        foreach ($comm_mark as $mark) {
          

        ?>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="box">
              <a type="button" class=" " data-toggle="modal" data-target="#mark">
                <img src="../img/<?php echo $mark['cpics']; ?>" class="card-img  pic " alt="...">
              </a>
              <div class="card-body">
                <h4 class="card-title"> <?php echo $mark['cname']; ?></h4>
              </div>
            </div>
          </div> <?php } ?>
        <!-- hr -->


        <?php $select_comm = "SELECT `type-ID`, `cate-name`, `cname`, `cpics`,  `id`, `cname`,`cdetails` from `committee` join `committee-cate` on `type-ID` = `cate-ID`  where `cname` = 'HR' ";;
        $comm_hr = mysqli_query($con, $select_comm);
        foreach ($comm_hr as $hr) {
          

        ?>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="box">
              <a type="button" class=" " data-toggle="modal" data-target="#hr">
                <img src="../img/<?php echo $hr['cpics']; ?>" class="card-img  pic " alt="...">
              </a>
              <div class="card-body">
                <h4 class="card-title"> <?php echo $hr['cname']; ?></h4>
              </div>
            </div>
          </div> <?php } ?>
     <!-- pr -->


     <?php $select_comm = "SELECT `type-ID`, `cate-name`, `cname`, `cpics`,  `id`, `cname`,`cdetails` from `committee` join `committee-cate` on `type-ID` = `cate-ID`  where `cname` = 'PR' ";;
        $comm_pr = mysqli_query($con, $select_comm);
        foreach ($comm_pr as $pr) {
          

        ?>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="box">
              <a type="button" class=" " data-toggle="modal" data-target="#pr">
                <img src="../img/<?php echo $pr['cpics']; ?>" class="card-img  pic " alt="...">
              </a>
              <div class="card-body">
                <h4 class="card-title"> <?php echo $pr['cname']; ?></h4>
              </div>
            </div>
          </div> <?php } ?>

        <!-- design -->
          





        <?php $select_comm = "SELECT `type-ID`, `cate-name`, `cname`, `cpics`,  `id`, `cname` , `cdetails` from `committee` join `committee-cate` on `type-ID` = `cate-ID`  where `cname` like '%edia%'";
        $comm_med = mysqli_query($con, $select_comm);
        foreach ($comm_med as $med) {

        ?>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="box">
              <a type="button" class=" " data-toggle="modal" data-target="#media">
                <img src="../img/<?php echo $med['cpics']; ?>" class="card-img  pic " alt="...">
              </a>
              <div class="card-body">
                <h4 class="card-title"> <?php echo $med['cname']; ?></h4>
              </div>
            </div>
          </div>

        </div>


      <?php } ?>
    </div>





  </section>


  <!-- Modals -->

  <!-- committee Modals -->


  <!-- it Modal -->





  <section class="pop">
    <div class="modal fade text-center" id="it" tabindex="-1" aria-labelledby="it" aria-hidden="true">
      <div class=" modal-dialog animated-box in">

        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-uppercase" id="it">            <?php foreach ($comm_it as $it) { ?><?php echo $it['cname'];} ?> Committee</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">X</span>
            </button>
          </div>

          <div class="modal-body">
            <?php

            $select = "SELECT `cname` , `members`.`name` , `pics`, `cpics`, `cdetails`, `role-tit`,`id` , `comm` from `members` join `committee` on `comm` = `committee`.`id` join `role` on `role`= `role-ID`  where `cname`= 'IT' and `role-tit` like '%head%' ORDER BY `role-tit` ASC ";;
            $s = mysqli_query($con, $select);
            $select_member = "SELECT `cname` , `members`.`name` , `pics`, `cpics`, `cdetails`, `role-tit` , `comm` from `members` join `committee` on `comm` = `committee`.`id` join `role` on `members`.`role`= `role-ID` where `cname`= 'IT' and `role-tit` like 'member%' ORDER BY `name` ASC  ";;
            $m = mysqli_query($con, $select_member);
            ?>
            <div class="row">
              <?php foreach ($s as $data) { ?>

                <div class="col-md-6 col-sm-12">
                  <div class="box  head">
                    <img  src="../img/<?php echo $data['pics']; ?>" class="card-img  pic " alt="...">
                  </div>
                  <div class="card-body box">
                    <h2 class="card-title"><?php echo $data['name']; ?></h2>
                    <h4 class="card-subtitle mb-2  "> <?php echo $data['cname']; ?> <?php echo $data['role-tit']; ?></h4>
                  </div>

                </div>
              <?php } ?>
            </div>


            <hr>

            <div class="row member">

              <?php foreach ($m as $data) {
              ?>
                <div class="col-md-6 col-sm-12 border-right">

                  <div class="row">

                    <div class="col-6">
                      <div class="box">
                        <img src="../img/<?php echo $data['pics']; ?>" class="card-img  pic " alt="...">
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="card-body hbox">
                        <h2 class="card-title"><?php echo $data['name']; ?></h2>
                        <h4 class="card-subtitle mb-2  "><?php echo $data['role-tit']; ?></h4>
                      </div>
                    </div>

                  </div>

                </div> <?php } ?>



            </div>

            <hr>

            

            <div class="row">
            <?php foreach ($comm_it as $it) { ?>

              <div class="col">
                <h5 class="modal-title text-uppercase" id="it"><?php echo $it['cname']; ?></h5>
                <p class="text-left"><?php echo $it['cdetails']; ?></p>
              </div>
                <?php }?>

            </div>


            <div class="modal-footer">

              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>

            </div>

          </div>

        </div>

      </div>

    </div>


  </section>






  <!-- hr Modal -->
  
  <section class="pop">
    <div class="modal fade text-center" id="hr" tabindex="-1" aria-labelledby="hr" aria-hidden="true">
      <div class=" modal-dialog animated-box in">

        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-uppercase" id="hr">       <?php foreach ($comm_hr as $hr) { ?><?php echo $hr['cname'];} ?> Committee</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">X</span>
            </button>
          </div>

          <div class="modal-body">
            <?php

            $select = "SELECT `cname` , `members`.`name` , `pics`, `cpics`, `cdetails`, `role-tit`,`id` , `comm` from `members` join `committee` on `comm` = `committee`.`id` join `role` on `role`= `role-ID`  where `cname`= 'HR' and `role-tit` like '%head%' ORDER BY `role-tit` ASC ";;
            $s = mysqli_query($con, $select);
            $select_member = "SELECT `cname` , `members`.`name` , `pics`, `cpics`, `cdetails`, `role-tit` , `comm` from `members` join `committee` on `comm` = `committee`.`id` join `role` on `members`.`role`= `role-ID` where `cname`= 'HR' and `role-tit` like 'member%' ORDER BY `name` ASC  ";
            $m = mysqli_query($con, $select_member);
            ?>
            <div class="row">
              <?php foreach ($s as $data) { ?>

                <div class="col-md-6 col-sm-12">
                  <div class="box  head">
                    <img src="../img/<?php echo $data['pics']; ?>" class="card-img  pic " alt="...">
                  </div>
                  <div class="card-body box">
                    <h2 class="card-title"><?php echo $data['name']; ?></h2>
                    <h4 class="card-subtitle mb-2  "> <?php echo $data['cname']; ?> <?php echo $data['role-tit']; ?></h4>
                  </div>

                </div>
              <?php } ?>
            </div>


            <hr>

            <div class="row member">

              <?php foreach ($m as $data) {
              ?>
                <div class="col-md-6 col-sm-12 border-right">

                  <div class="row">

                    <div class="col-6">
                      <div class="box">
                        <img src="../img/<?php echo $data['pics']; ?>" class="card-img  pic " alt="...">
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="card-body hbox">
                        <h2 class="card-title"><?php echo $data['name']; ?></h2>
                        <h4 class="card-subtitle mb-2  "><?php echo $data['role-tit']; ?></h4>
                      </div>
                    </div>

                  </div>

                </div> <?php } ?>



            </div>

            <hr>

            

            <div class="row">
              
            <?php  
               foreach ($comm_hr as $hr) { ?>

              <div class="col">
                <h5 class="modal-title text-uppercase" id="hr"> <?php echo $hr['cname']; ?></h5>
                <p class="text-left">  <?php echo $hr['cdetails']; ?></p>
              </div>
                <?php }?>

            </div>


            <div class="modal-footer">

              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>

            </div>

          </div>

        </div>

      </div>

    </div>


  </section>







  <!-- media Modal -->
  <section class="pop">
    <div class="modal fade text-center" id="media" tabindex="-1" aria-labelledby="media" aria-hidden="true">
      <div class=" modal-dialog animated-box in">

        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-uppercase" id="media">    <?php foreach ($comm_med as $med) { ?><?php echo $med['cname'];} ?> Committee</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">X</span>
            </button>
          </div>

          <div class="modal-body">
            <?php

            $select = "SELECT `cname` , `members`.`name` , `pics`, `cpics`, `cdetails`, `role-tit`,`id` , `comm` from `members` join `committee` on `comm` = `committee`.`id` join `role` on `role`= `role-ID`  where `cname`like '%edia%' and `role-tit` like '%head%' ORDER BY `role-tit` ASC ";;
            $s = mysqli_query($con, $select);
            $select_member = "SELECT `cname` , `members`.`name` , `pics`, `cpics`, `cdetails`, `role-tit` , `comm` from `members` join `committee` on `comm` = `committee`.`id` join `role` on `members`.`role`= `role-ID` where `cname`like '%edia%'  and `role-tit` like 'member%' ORDER BY `name` ASC  ";;
            $m = mysqli_query($con, $select_member);
            ?>
            <div class="row">
              <?php foreach ($s as $data) { ?>

                <div class="col-md-6 col-sm-12">
                  <div class="box  head">
                    <img src="../img/<?php echo $data['pics']; ?>" class="card-img  pic " alt="...">
                  </div>
                  <div class="card-body box">
                    <h2 class="card-title"><?php echo $data['name']; ?></h2>
                    <h4 class="card-subtitle mb-2  "> <?php echo $data['cname']; ?> <?php echo $data['role-tit']; ?></h4>
                  </div>

                </div>
              <?php } ?>
            </div>


            <hr>

            <div class="row member">

              <?php foreach ($m as $data) {
              ?>
                <div class="col-md-6 col-sm-12 border-right">

                  <div class="row">

                    <div class="col-6">
                      <div class="box">
                        <img src="../img/<?php echo $data['pics']; ?>" class="card-img  pic " alt="...">
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="card-body hbox">
                        <h2 class="card-title"><?php echo $data['name']; ?></h2>
                        <h4 class="card-subtitle mb-2  "><?php echo $data['role-tit']; ?></h4>
                      </div>
                    </div>

                  </div>

                </div> <?php } ?>



            </div>

            <hr>

            

            <div class="row">
            <?php foreach ($comm_med as $med) { ?>

              <div class="col">
                <h5 class="modal-title text-uppercase" id="med"><?php echo $med['cname']; ?></h5>
                <p class="text-left"><?php echo $med['cdetails']; ?></p>
              </div>
                <?php }?>

            </div>


            <div class="modal-footer">

              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>

            </div>

          </div>

        </div>

      </div>

    </div>


  </section>



  <!-- PR Modal -->

  <section class="pop">
    <div class="modal fade text-center" id="pr" tabindex="-1" aria-labelledby="pr" aria-hidden="true">
      <div class=" modal-dialog animated-box in">

        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-uppercase" id="pr"> <?php foreach ($comm_pr as $pr) { ?><?php echo $pr['cname'];} ?> Committee</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">X</span>
            </button>
          </div>

          <div class="modal-body">
            <?php

            $select = "SELECT `cname` , `members`.`name` , `pics`, `cpics`, `cdetails`, `role-tit`,`id` , `comm` from `members` join `committee` on `comm` = `committee`.`id` join `role` on `role`= `role-ID`  where `cname`= 'PR' and `role-tit` like '%head%' ORDER BY `role-tit` ASC ";;
            $s = mysqli_query($con, $select);
            $select_member = "SELECT `cname` , `members`.`name` , `pics`, `cpics`, `cdetails`, `role-tit` , `comm` from `members` join `committee` on `comm` = `committee`.`id` join `role` on `members`.`role`= `role-ID` where `cname`= 'PR' and `role-tit` like 'member%' ORDER BY `name` ASC  ";;
            $m = mysqli_query($con, $select_member);
            ?>
            <div class="row">
              <?php foreach ($s as $data) { ?>

                <div class="col-md-6 col-sm-12">
                  <div class="box  head">
                    <img src="../img/<?php echo $data['pics']; ?>" class="card-img  pic " alt="...">
                  </div>
                  <div class="card-body box">
                    <h2 class="card-title"><?php echo $data['name']; ?></h2>
                    <h4 class="card-subtitle mb-2  "> <?php echo $data['cname']; ?> <?php echo $data['role-tit']; ?></h4>
                  </div>

                </div>
              <?php } ?>
            </div>


            <hr>

            <div class="row member">

              <?php foreach ($m as $data) {
              ?>
                <div class="col-md-6 col-sm-12 border-right">

                  <div class="row">

                    <div class="col-6">
                      <div class="box">
                        <img src="../img/<?php echo $data['pics']; ?>" class="card-img  pic " alt="...">
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="card-body hbox">
                        <h2 class="card-title"><?php echo $data['name']; ?></h2>
                        <h4 class="card-subtitle mb-2  "><?php echo $data['role-tit']; ?></h4>
                      </div>
                    </div>

                  </div>

                </div> <?php } ?>



            </div>

            <hr>

            

            <div class="row">
            <?php foreach ($comm_pr as $pr) { ?>

              <div class="col">
                <h5 class="modal-title text-uppercase" id="it"><?php echo @$pr['cname']; ?></h5>
                <p class="text-left"><?php echo $pr['cdetails']; ?></p>
              </div>
                <?php }?>

            </div>


            <div class="modal-footer">

              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>

            </div>

          </div>

        </div>

      </div>

    </div>


  </section>



  <!-- marketing Modal -->
  
  <section class="pop">
    <div class="modal fade text-center" id="mark" tabindex="-1" aria-labelledby="mark" aria-hidden="true">
      <div class=" modal-dialog animated-box in">

        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-uppercase" id="hr"><?php foreach ($comm_mark as $mark) { ?><?php echo $mark['cname'];} ?> Committee</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">X</span>
            </button>
          </div>

          <div class="modal-body">
            <?php

            $select = "SELECT `cname` , `members`.`name` , `pics`, `cpics`, `cdetails`, `role-tit`,`id` , `comm` from `members` join `committee` on `comm` = `committee`.`id` join `role` on `role`= `role-ID`  where `cname` like '%igital%' and `role-tit` like '%head%' ORDER BY `role-tit` ASC ";;
            $s = mysqli_query($con, $select);
            $select_member = "SELECT `cname` , `members`.`name` , `pics`, `cpics`, `cdetails`, `role-tit` , `comm` from `members` join `committee` on `comm` = `committee`.`id` join `role` on `members`.`role`= `role-ID` where `cname` like '%igital%' and `role-tit` like 'member%' ORDER BY `name` ASC  ";;
            $m = mysqli_query($con, $select_member);
            ?>
            <div class="row">
              <?php foreach ($s as $data) { ?>

                <div class="col-md-6 col-sm-12">
                  <div class="box  head">
                    <img src="../img/<?php echo $data['pics']; ?>" class="card-img  pic " alt="...">
                  </div>
                  <div class="card-body box">
                    <h2 class="card-title"><?php echo $data['name']; ?></h2>
                    <h4 class="card-subtitle mb-2  "> <?php echo $data['cname']; ?> <?php echo $data['role-tit']; ?></h4>
                  </div>

                </div>
              <?php } ?>
            </div>


            <hr>

            <div class="row member">

              <?php foreach ($m as $data) {
              ?>
                <div class="col-md-6 col-sm-12 border-right">

                  <div class="row">

                    <div class="col-6">
                      <div class="box">
                        <img src="../img/<?php echo $data['pics']; ?>" class="card-img  pic " alt="...">
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="card-body hbox">
                        <h2 class="card-title"><?php echo $data['name']; ?></h2>
                        <h4 class="card-subtitle mb-2  "><?php echo $data['role-tit']; ?></h4>
                      </div>
                    </div>

                  </div>

                </div> <?php } ?>



            </div>

            <hr>

            

            <div class="row">
              
            <?php  
               foreach ($comm_mark as $mark) { ?>

              <div class="col">
                <h5 class="modal-title text-uppercase" id="mark"> <?php echo $mark['cname']; ?></h5>
                <p class="text-left">  <?php echo $mark['cdetails']; ?></p>
              </div>
                <?php }?>

            </div>


            <div class="modal-footer">

              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>

            </div>

          </div>

        </div>

      </div>

    </div>


  </section>


<!-- fr Modal -->
<section class="pop">
    <div class="modal fade text-center" id="fr" tabindex="-1" aria-labelledby="fr" aria-hidden="true">
      <div class=" modal-dialog animated-box in">

        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-uppercase" id="fr"><?php foreach ($comm_fr as $fr) { ?><?php echo $fr['cname'];} ?> Committee</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">X</span>
            </button>
          </div>

          <div class="modal-body">
            <?php

            $select = "SELECT `cname` , `members`.`name` , `pics`, `cpics`, `cdetails`, `role-tit`,`id` , `comm` from `members` join `committee` on `comm` = `committee`.`id` join `role` on `role`= `role-ID`  where `cname`= 'FR' and `role-tit` like '%head%' ORDER BY `role-tit` ASC ";;
            $s = mysqli_query($con, $select);
            $select_member = "SELECT `cname` , `members`.`name` , `pics`, `cpics`, `cdetails`, `role-tit` , `comm` from `members` join `committee` on `comm` = `committee`.`id` join `role` on `members`.`role`= `role-ID` where `cname`= 'FR' and `role-tit` like 'member%' ORDER BY `name` ASC  ";;
            $m = mysqli_query($con, $select_member);
            ?>
            <div class="row">
              <?php foreach ($s as $data) { ?>

                <div class="col-md-6 col-sm-12">
                  <div class="box  head">
                    <img src="../img/<?php echo $data['pics']; ?>" class="card-img  pic " alt="...">
                  </div>
                  <div class="card-body box">
                    <h2 class="card-title"><?php echo $data['name']; ?></h2>
                    <h4 class="card-subtitle mb-2  "> <?php echo $data['cname']; ?> <?php echo $data['role-tit']; ?></h4>
                  </div>

                </div>
              <?php } ?>
            </div>


            <hr>

            <div class="row member">

              <?php foreach ($m as $data) {
              ?>
                <div class="col-md-6 col-sm-12 border-right">

                  <div class="row">

                    <div class="col-6">
                      <div class="box">
                        <img src="../img/<?php echo $data['pics']; ?>" class="card-img  pic " alt="...">
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="card-body hbox">
                        <h2 class="card-title"><?php echo $data['name']; ?></h2>
                        <h4 class="card-subtitle mb-2  "><?php echo $data['role-tit']; ?></h4>
                      </div>
                    </div>

                  </div>

                </div> <?php } ?>



            </div>

            <hr>

            

            <div class="row">
            <?php foreach ($comm_fr as $fr) { ?>

              <div class="col">
                <h5 class="modal-title text-uppercase" id="it"><?php echo $fr['cname']; ?></h5>
                <p class="text-left"><?php echo $fr['cdetails']; ?></p>
              </div>
                <?php }?>

            </div>


            <div class="modal-footer">

              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>

            </div>

          </div>

        </div>

      </div>

    </div>


  </section>



<!-- logis Modal -->
<section class="pop">
    <div class="modal fade text-center" id="log" tabindex="-1" aria-labelledby="log" aria-hidden="true">
      <div class=" modal-dialog animated-box in">

        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-uppercase" id="log"><?php foreach ($comm_log as $log) { ?><?php echo $log['cname'];} ?> Committee</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">X</span>
            </button>
          </div>

          <div class="modal-body">
            <?php

            $select = "SELECT `cname` , `members`.`name` , `pics`, `cpics`, `cdetails`, `role-tit`,`id` , `comm` from `members` join `committee` on `comm` = `committee`.`id` join `role` on `role`= `role-ID`  where `cname` like '%ogist%' and `role-tit` like '%head%' ORDER BY `role-tit` ASC ";;
            $s = mysqli_query($con, $select);
            $select_member = "SELECT `cname` , `members`.`name` , `pics`, `cpics`, `cdetails`, `role-tit` , `comm` from `members` join `committee` on `comm` = `committee`.`id` join `role` on `members`.`role`= `role-ID` where `cname` like '%ogist%' and `role-tit` like 'member%' ORDER BY `name` ASC  ";;
            $m = mysqli_query($con, $select_member);
            ?>
            <div class="row">
              <?php foreach ($s as $data) { ?>

                <div class="col-md-6 col-sm-12">
                  <div class="box  head">
                    <img src="../img/<?php echo $data['pics']; ?>" class="card-img  pic " alt="...">
                  </div>
                  <div class="card-body box">
                    <h2 class="card-title"><?php echo $data['name']; ?></h2>
                    <h4 class="card-subtitle mb-2  "> <?php echo $data['cname']; ?> <?php echo $data['role-tit']; ?></h4>
                  </div>

                </div>
              <?php } ?>
            </div>


            <hr>

            <div class="row member">

              <?php foreach ($m as $data) {
              ?>
                <div class="col-md-6 col-sm-12 border-right">

                  <div class="row">

                    <div class="col-6">
                      <div class="box">
                        <img src="../img/<?php echo $data['pics']; ?>" class="card-img  pic " alt="...">
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="card-body hbox">
                        <h2 class="card-title"><?php echo $data['name']; ?></h2>
                        <h4 class="card-subtitle mb-2  "><?php echo $data['role-tit']; ?></h4>
                      </div>
                    </div>

                  </div>

                </div> <?php } ?>



            </div>

            <hr>

            

            <div class="row">
              
            <?php  
               foreach ($comm_log as $mark) { ?>

              <div class="col">
                <h5 class="modal-title text-uppercase" id="mark"> <?php echo $log['cname']; ?></h5>
                <p class="text-left">  <?php echo $log['cdetails']; ?></p>
              </div>
                <?php }?>

            </div>


            <div class="modal-footer">

              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>

            </div>

          </div>

        </div>

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
<script src="../js/jquery-3.6.0.min.js"></script>
<script src="../js/main.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>

</html>