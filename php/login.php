<?php include "nav.php" ;
 if(!isset($_SESSION['admin'])){

}
else{

    header("location: home.php");

}
                              
if (isset($_POST['send'])) {

  $pass = $_POST['pass'];
  $name = $_POST['name'];
  
  $qw = "SELECT * FROM `admin` WHERE `name`='$name' AND `pass`= '$pass' ";
  $qq = mysqli_query($con, $qw);
  $ew = mysqli_num_rows($qq);
  $ss=mysqli_fetch_array($qq);
  if ($ew > 0) {
  $admin_ID=$ss['id'];
  $_SESSION['admin']=$admin_ID;
    header('location:home.php');
  } else {?>
    <div class="alert alert-danger" role="alert">
  <?php  echo "Wrong Email or Password";?>
  
</div>
<?php 
  }
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

</style>


<br>
<br><br><br><br><br><br><br>

<div class="container col-6 mt-5">
  <form method="POST">
  <blockquote class="blockquote text-center">
  <p class="h2 mb-0">WELCOME BACK!!</p>
</blockquote>
    <div class="form-group">
      <label for="exampleInputPassword1">Your Name</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="name">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
    </div>
    <button type="submit" class="btn btn-primary btn btn-block" name="send">login</button>
  </form>
</div>


</select>
</div>

<?php

?>