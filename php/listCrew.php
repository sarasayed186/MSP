<?php
include 'nav.php';
include 'session.php';

//       SELECTING CREW HIGH BOARD 
$selecthb = "SELECT * from `members` join `role` on  `role`.`role-ID` =`members`.`role` where `role`.`role-tit` like'%president%'";
$run_hb = mysqli_query($con, $selecthb);
 /* TESTING 
 testmeseage($run_hb,"high board");*/
/* SELECTING OC COMMITTEE */
$selectOCC="SELECT * From `committee`join `committee-cate` on `committee-cate`.`cate-ID` =`committee`.`type-ID`where `committee-cate`.`cate-name`='OC'";
$run_OCC = mysqli_query($con, $selectOCC);
/* TESTING 
testmeseage($run_OCC,"OCC");*/
/* SELECTING AC COMMITTEE */
$selectACC="SELECT * From `committee`join `committee-cate` on `committee-cate`.`cate-ID` =`committee`.`type-ID`where `committee-cate`.`cate-name`='AC'";
$run_ACC = mysqli_query($con, $selectACC);
/* TESTING 
testmeseage($run_ACC,"ACC");*/
//     DELETING
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = "DELETE FROM `members` WHERE mid = $id ";
    $run_del = mysqli_query($con, $delete);
    /* TESTING 
     testmeseage($run_del,"delet");*/
    header("location: listCrew.php");
}

?>
<style>
     label {
      color: white;
    }

   .container{

      color: white;
    }
</style>

    <div class="container col-9 mt-5">
    <h1  style="color : #1ebbff" class="text-center font-weight-bold mt-3  diplay-2  mt-5">CREW</h1><br>
  <div class="text-center">  

 <a href="#1" class="text-uppercase  "> HIGH BOARD </a> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;
  <a href="#2" class="text-uppercase ">OC</a> &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;
  <a href="#3" class="text-uppercase  "> AC</a>  &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp; <br>
</div>
<!-- show high board -->
<h3 style="" id="1" class="text-center   "> HIGH BOARD</h3>
<div>
        <table class="table ">
            <thead class="text-light" style="">
                <tr>

                    <th scope="col">ID</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Role</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Update</th> 
                </tr>
            </thead>
            <tbody class="text-light">
                <tr> <?php foreach ($run_hb as $highB ) {

                        ?>
                        <th scope="row"><?php echo $highB['mid']; ?></th>
                        <td><img width="150" height="100" src="../img/<?php echo $highB['pics']; ?>" alt="picture"></td>
                        <td> <?php echo $highB['name']; ?> </td>
                        <td> <?php echo $highB['role-tit']; ?> </td>
                        <td> <a href="addmember.php?update=<?php echo $highB['mid']; ?>" class="btn btn-info">Update</a></td>
                          <td>  <a href="listCrew.php?delete=<?php echo $highB['mid']; ?>" class="btn btn-danger"> Delete</a>
                        </td>
                </tr>
            <?php } ?>
            </tbody>
        </table></div>
        <hr style="display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    border-style: inset;
    border-width: 10px;">
<!-- show  OC -->
<h3 style="color : #1ebbff" id="2" class="text-center   "> OC BOARD</h3>
<div style=" display: flex; flex-direction: row;">
<?php foreach($run_OCC as $OCC) {?>
    <img width="200" height="100" src="../img/<?php echo $OCC['cpics']; ?>" alt="picture"><br>
<a href="specifiedCrew.php?id=<?php echo $OCC['id']; ?>"><?php echo $OCC['cname'];?></a>
<?php } ?>
</div>

        <hr style="display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    border-style: inset;
    border-width: 10px;">
    
    <!-- show  AC -->
<h3 style="color : #1ebbff" id="2" class="text-center   "> AC BOARD</h3>
<div style=" display: flex; flex-direction: row;">
<?php foreach($run_ACC as $ACC) {?>
    <img width="200" height="100" src="../img/<?php echo $ACC['cpics']; ?>" alt="picture"><br>
    <a href="specifiedCrew.php?id=<?php echo $ACC['id']; ?>"><?php echo $ACC['cname'];?></a>
<?php } ?>
</div>
        
    </div>
    <?php include "script.php" ;
    ob_end_flush();?>
