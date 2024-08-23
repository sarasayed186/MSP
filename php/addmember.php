<?php 
include 'nav.php';
include 'session.php';

$select="SELECT * FROM  `committee`";
  $query=mysqli_query($con,$select);
  $sel="SELECT * FROM `role` ";
        $qu=mysqli_query($con,$sel);
if(isset($_POST['add'])){
$name= $_POST['mName'];

$comm= $_POST['comm'];
$role= $_POST['role'];

$img= $_FILES['image']['name'];
$image_type= $_FILES['image']['type'];
$image_tmp= $_FILES['image']['tmp_name'];
$imagesize = $_FILES['image']['size'];
$location = "../img/".$img;  
move_uploaded_file($image_tmp, $location);
if($comm=="hb") {
  $insert = "INSERT INTO `members` values(NULL,'$name','$img',NULL,'$role')";
$q=mysqli_query($con,$insert);
header("location: listCrew.php");
}
$insert = "INSERT INTO `members` values(NULL,'$name','$img','$comm','$role')";
$q=mysqli_query($con,$insert);
header("location: listCrew.php");

}
$name="";
$comm= "";
$role= "";
$img= "";
$update=true;
if(isset($_GET['update'])){
    $update=false;
    $id=$_GET['update'];
    $select= " SELECT * From `members` join `role` on `role`.`role-ID`=`members`.`role`
    left join `committee` on  `committee`.`id`=`members`.`comm`  where mid =$id ";
$s = mysqli_query($con , $select);
$row = mysqli_fetch_assoc($s);
$name=$row['name'];
$comm= $row['comm'];
$commn= $row['cname'];
$role= $row['role-tit'];
$roleid=$row['role-ID'];

$img= $row['pics'];

if(isset($_POST['upd'])){
    $name= $_POST['mName'];

$comm= $_POST['comm'];
$role= $_POST['role'];

$img= $_FILES['image']['name'];
$image_type= $_FILES['image']['type'];
$image_tmp= $_FILES['image']['tmp_name'];
$imagesize = $_FILES['image']['size'];
 $location = "../img/".$img;
    if($_FILES['image']['size']>0){
      move_uploaded_file($image_tmp, $location);
        $update ="UPDATE `members` SET pics='$img' WHERE mid=$id";
        $i = mysqli_query($con ,$update);
    } 
    if($comm=="hb") {
      $update =" UPDATE `members` SET name='$name', comm=NULL , role=$role  WHERE mid=$id";
    $i = mysqli_query($con ,$update);
    header("location: listCrew.php");
    }      
    $update =" UPDATE `members` SET name='$name' , comm=$comm , role=$role  WHERE mid=$id";
    $i = mysqli_query($con ,$update);
    header("location: listCrew.php");
}}
?>

<!DOCTYPE html>
<html lang="en">
<head>
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../style/add.css">
</head>
<body>    
    <form method="POST" enctype="multipart/form-data" >
        <div class="container">  
            <center>  <h1 class="title"> ADD MEMBER</h1> </center>  
            <hr>  
          <label> name </label>   
          <input value="<?php echo $name ?>" type="text" name="mName" placeholder= "name" size="15" required />   
         
        

        <div>  
            <label class="">   
            committe :<br>  
            </label>         
            <select required  id="committesel" name="comm">
            <option hidden selected="true" value="<?php if(!$update) echo $comm ?>"> committtee <?php if(!$update) echo $commn; ?></option>  
            <option value="hb">High board</option>
      <?php  foreach($query as $data){ ?>  
        <option value=<?php echo $data['id'];  ?>><?php echo $data['cname'];  ?></option>
                <?php } ?>      
                  </select>  
        </div>  
        

        <div>  
            <label >   
            position :<br>  
            </label>         
            <select required id="postionsel" name="role">  
            <option hidden selected="true" value="<?php if(!$update) echo $roleid; ?>"> role <?php if(!$update) echo $role; ?></option>
                    <?php
            foreach($qu as $data){
                ?>
                 <option value=<?php echo $data['role-ID'];  ?>><?php echo $data['role-tit'];  ?></option>
                <?php } ?> 
            </select>  
        </div> 
             
        <div>  
             <label> image </label>    
             <input type="file" name="image" placeholder="image"  accept="image/*" size="15" <?php if($update) { ?>required <?php } ?> />
        </div>

        <!-- <div class="i">  
            <label >   
           Description :  
            </label><br>  
            <input class="radio" type="radio" value="AC" name="gender" checked > AC
            <input class="radio" type="radio" value="OC" name="gender" checked > OC
            <input class="radio" type="radio" value="High Board" name="gender" checked > High Board
       </div>  -->
       <?php if($update):?>
             <button class="registerbtn" type="submit" name="add"> ADD MEMBER </button>  
             <?php else : ?>
                <button class="registerbtn" type="submit" name="upd" > Update </button>  
                <?php endif;
                include "script.php"; 
                 ob_end_flush();?>
                
        </div>
    </form>
</body>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>  
  <script src="../assets/js/java.js"></script>
  <script src="../assets/js/main.js"></script>
</html>