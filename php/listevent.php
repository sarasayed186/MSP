<?php
include 'nav.php';
include 'session.php';


$select = "SELECT * FROM `event` ";
$s = mysqli_query( $con , $select);

//--------delete event--------
if (isset($_GET['delete'])){
  $id = $_GET['delete'];
  $delete = "DELETE FROM `event` WHERE id = $id";
  $d = mysqli_query( $con , $delete);
  header('listevent.php');
}

//------post event--------
$update =false;
if (isset($_GET['post'])){
  $update=true;
  $id=$_GET['post'];
  $update = " UPDATE `event` SET `posted` = 1 WHERE id = $id ";
  $u =mysqli_query( $con , $update );
  header('listevent.php');

}

?>

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
<style>  
        th {color: white;}
        tr {color:white;}
        h2 {color:#1ebbff;}
</style>   

</head>
   

<div class="container col-8 text-center my-5">
<div class="mx-auto" style="width: 300px;"><h2>Your Events !</h2></div>
<br>
    <table class="table">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Event title</th>
      <th scope="col">Event Link</th>
      <th scope="col">abroad image</th>
      <th scope="col">Actions</th>
      <th scope="col">Post</th>
      <th scope="col"></th>
    </tr>
    <?php foreach($s as $data){ ?>
    <tr>
      <th scope="row"> <?php echo $data['id'] ?> </th>
      <td> <?php echo $data['title'] ?> </td>
    
      <td> <?php echo $data['elink'] ?> </td>
      <td> <a href="<?php echo $data['elink'] ?>" target="_blank"> <img width="150" height="100" src="../img/<?php echo $data['abroad_img']; ?>"> </a> </td>
      <td> 
          <a href="listevent.php?delete=<?php echo $data['id'] ?>" onclick="return confirm(' Are you sure you want to delete this event ? ')" class="btn btn-danger"> Delete </a>
            <br></br>
          <a href="addevent.php?edit=<?php echo $data['id'] ?>"  class="btn btn-primary"> Update </a>
      </td>
      
          </td>
    </tr>
    <?php } ?>
    </table>
</div>

 

<?php include 'script.php'; ?>