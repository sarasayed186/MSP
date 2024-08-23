<?php
//$active = "Contact";
include('./db.php');

?>
        <?php

            if (isset($_POST['submit'])) {
                    $fname = $_POST['fname'];
                    $lname = $_POST['lname'];
                    $usmail = $_POST['email'];
                    $subject = $_POST['subject'];
                    $description = $_POST['message'];

                        $receiver_mail = 'Mostafa.a.soliman00@gmail.com';
                        mail($receiver_mail, $user_name, $user_subject, $user_msg, $user_email);
                            
                        $insert_massage= "Insert into contact (id,usmail,fname,lname,subject,description)
                            values ('$id','$usmail','$fname','$lname','$subject','$description')";
                        $run_insert_massage = mysqli_query($con, $insert_massage);
                        
                            if ($run_insert_massage) {
                                echo "<script>alert('message added')</script>";
                            }
                        }
        ?>
