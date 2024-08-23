<?php
include './db.php';
?>
include 'session.php';


<?php

if (isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $detail = $_POST['detail'];
    $sponser_img = $_FILES['sponser_img']['name'];
    
    $temp_name = $_FILES['sponser_img']['tmp_name'];
    move_uploaded_file($temp_name, "img/sponsers/$sponser_img");
    
    $insert_sponsers = "Insert into sponsers (id,name,details,pics) values ('$id','$name','$detail','$sponser_img')";
}

?>