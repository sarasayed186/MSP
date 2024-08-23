<?php
include 'nav.php';
include 'session.php';



//--------------add event--------------
if (isset($_POST['submit'])) {


  $title = $_POST['title'];
  $url = $_POST['elink'];



  $imagename = $_FILES['abroad_img']['name'];
  $imagetype = $_FILES['abroad_img']['type'];
  $imagetmp = $_FILES['abroad_img']['tmp_name'];
  $location = "../img/";
  move_uploaded_file($imagetmp, $location . $imagename);
  $safe_url = mysqli_real_escape_string($con, $url);
  $insert = "INSERT into `event`(`id`,`title`,`abroad_img`,`elink`) VALUES (NULL,'$title','$imagename','$safe_url')";


  $q=mysqli_query($con,$insert);
  header('location:listevent.php');

}

//----------update event-------------
$id = NULL;
$title = "";
$elink="";
$url = "";
$safe_url = "";

$update = false;

if (isset($_GET['edit'])) {
  $update = true;
  $id = $_GET['edit'];
  $select = "SELECT * FROM `event` WHERE `id`=$id";
  $s = mysqli_query($con, $select);
  $row = mysqli_fetch_assoc($s);

  $title = $row['title'];
  $elink = $row['elink'];
  $abroad_img = $row['abroad_img'];


}
if (isset($_POST['update'])) {
  $title = $_POST['title'];
  $elink = $_POST['elink'];
  $safe_url = mysqli_real_escape_string($con, $elink);

  $update = "UPDATE `event` SET `title` = '$title' , `elink` = '$safe_url' WHERE `id` = $id ";
  $q=mysqli_query($con , $update);
    header("location:listevent.php");
}





?>


<br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br>

<head>
  <style>
 

    label {
      color: white;
    }

   .container{

      color: white;
    }
  </style>



</head>

<div class="container col-5 mt-5">
  <form method="POST" enctype="multipart/form-data">
    <div class="mx-auto" style="width: 300px;">
      <h2>Add Your Event !</h2>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Event title</label>
      <input type="text" name="title" class="form-control" id="exampleInputEmail1" required  aria-describedby="emailHelp" placeholder="Event title">
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Event Link</label>
      <input type="url" name="elink" class="form-control" id="exampleInputEmail1" required   aria-describedby="emailHelp" placeholder="Event Link">
    </div>

    <?php if ($update == false) : ?>
      <div class="form-group">
        <label for="exampleInputEmail1">Event abroad image</label> <br>
        <input type="file" name="abroad_img" class="custom-file__input" id="field-upload" required  accept="image/*">
      </div>
    <?php endif; ?>

    <?php if ($id) : ?>
      <button type="submit" name="update" class="btn btn-primary">Update event</button>
    <?php else : ?>
      <button type="submit" name="submit" class="btn btn-primary">Add event</button>
    <?php endif; ?>
  </form>
</div>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>  
  <script src="../assets/js/java.js"></script>
  <script src="../assets/js/main.js"></script>

<?php include 'script.php'; ?>