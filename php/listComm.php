<?php
include 'nav.php';  
include 'session.php';

//       SELECTING OC COMMITTEE
$selectOC = "SELECT * from `committee` join `committee-cate` on  `committee`.`type-ID` =`committee-cate`.`cate-ID`
 where `committee-cate`.`cate-name`='OC'";
$run_OC = mysqli_query($con, $selectOC);
/* TESTING 
 testmeseage($run_OC,"OC");*/
//       SELECTING CREW AC
$selectAC = "SELECT * from `committee` join `committee-cate` on  `committee`.`type-ID` =`committee-cate`.`cate-ID`
 where `committee-cate`.`cate-name`='AC'";
$run_AC = mysqli_query($con, $selectAC);
 /* TESTING 
 testmeseage($run_AC,"AC");*/
//     DELETING
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = "DELETE FROM `committee` WHERE id = $id ";
    $run_del = mysqli_query($con, $delete);
    /* TESTING 
     testmeseage($run_del,"delet");
    header("location: listComm.php");*/

}
?>

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
<style>


    table,tr,td,th{ 
    background-color: #1ebbff;}
</style>
    <div class="container col-8 mt-5 ">
    <h1  style="color : #1ebbff" class="text-center font-weight-bold mt-3  diplay-2  mt-5">COMMITTEES</h1><br>
  <div class="text-center">  
  <a href="#1" class="text-uppercase ">OC COMMITTEE</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp; 
  <a href="#2" class="text-uppercase  "> AC WORKSHOPS</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp; <br>
</div>
<!-- show  OC COMMITEE -->
<h3 style="color : #1ebbff" id="1" class="text-center   "> OC BOARD</h3>

<div>
        <table class="table table-hover table-striped">
            <thead class="text-light" >
                <tr>

                    <th scope="col">ID</th>
                    <th scope="col-2">Name</th>
                    <th scope="col-2">Image</th>
                    <th scope="col">Detail</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($run_OC as $OC ) { ?>
                <tr> 
                        <th scope="row"><?php echo $OC['id']; ?></th>
                        <td> <?php echo $OC['cname']; ?> </td>
                        <td><img width="150" height="100" src="../img/<?php echo $OC['cpics']; ?>" alt="picture"></td>
                        <td> <?php echo $OC['cdetails']; ?> </td>
                        <td> <a href="adddcommittee.php?update=<?php echo $OC['id']; ?>" class="btn btn-info">Update</a></td>
                          <td>  <a href="listComm.php?delete=<?php echo $OC['id']; ?>" class="btn btn-danger"> Delete</a>
                        </td>
                </tr>
            <?php } ?>
            </tbody>
        </table></div>
        <hr style="display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    border-style: inset;
    border-width: 8px;">
    
    <!-- show  AC -->
<h3 style="color : #1ebbff" id="2" class="text-center   "> AC BOARD</h3>

<div>
        <table class="table table-hover table-striped">
            <thead class="text-light" style="background-color:#489991;">
                <tr>
                <th scope="col">ID</th>
                    <th scope="col-2">Name</th>
                    <th scope="col-2">Image</th>
                    <th scope="col">Detail</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
              
                </tr>
            </thead>
            <tbody>
                <?php foreach ($run_AC as $AC ) { ?>
                <tr> 
                        <th scope="row"><?php echo $AC['id']; ?></th> 
                        <td> <?php echo $AC['cname']; ?> </td>
                        <td><img width="150" height="100" src="../img/<?php echo $AC['cpics']; ?>" alt="picture"></td>
                        <td> <?php echo $AC['cdetails']; ?> </td>
                        <td> <a href="adddcommittee.php?update=<?php echo $AC['id']; ?>" class="btn btn-info">Update</a></td>
                          <td>  <a href="listComm.php?delete=<?php echo $AC['id']; ?>" class="btn btn-danger"> Delete</a>
                        </td>
                </tr>
            <?php } ?>
            </tbody>
        </table></div>
        
    </div>
   <?php include "script.php" ; 
   ob_end_flush();?>
                  
   </body>

</html>