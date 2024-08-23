<?php 
include 'nav.php';
include 'session.php';

include '../style/msp.php';
if(isset($_POST['add'])){
$name= $_POST['cName'];
$det= addSlashes($_POST['det']);
$role= $_POST['role'];
$img= $_FILES['image']['name'];
$image_type= $_FILES['image']['type'];
$image_tmp= $_FILES['image']['tmp_name'];
$imagesize = $_FILES['image']['size'];
$location = "../img/".$img;  
move_uploaded_file($image_tmp, $location);
$insert = "INSERT INTO `committee` values(NULL,'$name','$det','$img',$role)";
$q=mysqli_query($con,$insert);
header("location: listComm.php");
}
$name= "";
$det= "";
$role= "";
$cname="";
$img= "";
$update=true;
if(isset($_GET['update'])){
    $update=false;
    $id=$_GET['update'];
    $select= "SELECT * from `committee`  join `committee-cate` on  `committee`.`type-ID` =`committee-cate`.`cate-ID` where `committee`.`id` =$id ";
$s = mysqli_query($con , $select);
$row = mysqli_fetch_assoc($s);
$name= $row['cname'];
$det= $row['cdetails'];
$role= $row['type-ID'];
$cname= $row['cate-name'];
$img= $row['cpics'];

if(isset($_POST['upd'])){
    $name= $_POST['cName'];
    $det= addSlashes($_POST['det']);
    $role= $_POST['role'];
    $img= $_FILES['image']['name'];
$image_type= $_FILES['image']['type'];
$image_tmp= $_FILES['image']['tmp_name'];
$imagesize = $_FILES['image']['size'];
 $location = "../img/".$img;
if($_FILES['image']['size']>0){
      move_uploaded_file($image_tmp, $location);
        $update ="UPDATE `committee` SET cpics='$img' WHERE id=$id";
        $i = mysqli_query($con ,$update);
    }       
    $update =" UPDATE `committee` SET cname='$name' , cdetails='$det' , `type-ID`=$role  WHERE id=$id";
    $i = mysqli_query($con ,$update);
    header("location: listComm.php");

}}
?>

<style>
  body{
    background-color: #000;
  }
  .container{
    color: white;
  }
</style>

<body>
<div class="container col-6 mt-5">
<h2 class="text-center text-info display-2">Add committee</h2>

<form method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">committee Name</label>
    <input required type="text" value="<?php echo $name; ?>" class="form-control" name="cName" placeholder="Please enter committee name" >
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">committee details</label>
    <input required type="text" value="<?php echo $det; ?>" class="form-control" name="det" placeholder="Please enter committee details" >
</div>
  
  <?php 
  $select="SELECT * FROM  `committee-cate`";
  $query=mysqli_query($con,$select);
 
  ?>
  <div class="input-group">
        
  <select required  class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon" name="role">
  <option hidden selected="true" value="<?php if(!$update) echo $role; ?>"> Category <?php if(!$update) echo $cname; ?></option>
  <?php  foreach($query as $data){ ?>               
    <option value=<?php echo $data['cate-ID'];  ?>><?php echo $data['cate-name'];  ?></option>
                <?php } ?>
            </select>
        </div> <br>
   
  <div class="form-group">
                <label>upload images</label> <br>
                <input class="fas fa-upload" type="file" name="image" accept="image/*">
            </div>
  
        <?php if($update):?>
            <button type="submit" name="add" class="btn btn-primary btn-md fas fa-paper-plane">Add committee</button>
  <?php else : ?>
    <button type="submit" name="upd" class="btn btn-primary btn-md fas fa-pen">Update</button>
  
  <?php endif;

   ob_end_flush();?>
</form>
</div></body>

<?php 
  include 'footer.php';

include "script.php" ;?>

<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>  
  <script src="../assets/js/java.js"></script>
  <script src="../assets/js/main.js"></script>
