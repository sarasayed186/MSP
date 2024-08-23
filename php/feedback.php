<?php
include 'nav.php';
include 'session.php';

$select = "SELECT * FROM `contact`";
$s = mysqli_query($con, $select);

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $delete = "DELETE FROM `contact` WHERE `cont_ID` = $id";
    $d = mysqli_query($con, $delete);
    header("location: feedback.php");
}


?>

<div class="container">
    <table class="table table-dark" style="margin-top:300px;">
        <tr>

            <th>ID</th>
            <th>email</th>
            <th>First Name</th>
            <th>Last Name</th>

            <th>message</th>
           

            <th>Delete</th>
        </tr>
        <?php foreach($s as $s){ ?>
        <tr>
            <td><?php echo $s['cont_ID']; ?></td>
            <td><?php echo $s['usmail']; ?></td>
            <td><?php echo $s['fname']; ?></td>
            <td><?php echo $s['lname']; ?></td>

            <td><?php echo $s['descriptions']; ?></td>


            <td><a href="feedback.php?delete=<?php echo $s['cont_ID']; ?>" class="btn btn-danger">Delete</a></td>  
        </tr>
        <?php } ?>
    </table>
</div>
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

