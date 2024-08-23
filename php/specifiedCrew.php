<?php
include 'nav.php';
include 'session.php';

// SELECTING ACCORDING TO ID
if (isset($_GET['id'])) {
    $var = true;
    $id = $_GET['id'];
    //SELECTING NAME 
    $selectn = "SELECT cname,`cate-name` from `committee`join `committee-cate`on `committee`.`type-ID`=`committee-cate`.`cate-ID` where committee.id=$id";
    $runn = mysqli_query($con, $selectn);
    $array = mysqli_fetch_array($runn);
    /* TESTING 
 testmeseage($run_C,"C");*/
    //selecting member 
    $selectm = "SELECT `name`,`members`.`pics`,`mid`,`role-tit`, `cname` from `members` join `committee` on  `committee`.`id` =`members`.`comm`
    join `role` on  `role`.`role-ID` =`members`.`role` 
     where `committee`.`id`=$id and `role-tit`='member'";
    $run_m = mysqli_query($con, $selectm);
    //selecting head 
    $selecth = "SELECT * from `members` join `committee` on  `committee`.`id` =`members`.`comm`
    join `role` on  `role`.`role-ID` =`members`.`role` 
     where `committee`.`id`=$id and `role-tit`like '%head%' order by `role-tit` asc ";
    $run_h = mysqli_query($con, $selecth);
    //check the no of member 
    $numm = mysqli_num_rows($run_m);
    //check the no of member 
    $numh = mysqli_num_rows($run_h);
    if ($numm == 0 && $numh == 0) {
        $var = false;
    }
    /* TESTING 
 testmeseage($run_C,"C");*/
    //     DELETING
    if (isset($_GET['delete'])) {
        $mid = $_GET['delete'];
        $delete = "DELETE FROM `members` WHERE mid = $mid ";
        $run_del = mysqli_query($con, $delete);
        /* TESTING 
     testmeseage($run_del,"delete");*/
        header("location: listCrew.php");
    }
}

?>
<style>
    table {
        background-color: white;
    }
</style>


<div class="container col-9 mt-2">

    <h1 class="text-center text-info display-3 "> <?php echo $array['cname'] ?></h1>
    <?php if ($var) : ?>
        <div>
            <table class="table table-hover table-striped">
                <thead class="text-light" style="background-color:#489991;">
                    <tr>

                        <th scope="col">ID</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">committee</th>

                        <th scope="col">Role</th>

                        <th scope="col">Update</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- reterive head -->
                    <?php foreach ($run_h as $data) { ?>
                        <tr>
                            <th scope="row"><?php echo $data['mid']; ?></th>
                            <td><img width="150" height="100" src="../img/<?php echo $data['pics']; ?>" alt="picture"></td>
                            <td> <?php echo $data['name']; ?> </td>
                            <td> <?php echo $data['cname']; ?> </td>

                            <td> <?php echo $data['role-tit']; ?> </td>

                            <td> <a href="addmember.php?update=<?php echo $data['mid']; ?>" class="btn btn-info">Update</a></td>
                            <td> <a href="specifiedCrew.php?delete=<?php echo $data['mid']; ?>&id=<?php echo $data['id']; ?>" class="btn btn-danger"> Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                    <!-- reterive member -->
                    <?php foreach ($run_m as $data) { ?>
                        <tr>
                            <th scope="row"><?php echo $data['mid']; ?></th>
                            <td><img width="150" height="100" src="../img/<?php echo $data['pics']; ?>" alt="picture"></td>
                            <td> <?php echo $data['name']; ?> </td>
                            <td> <?php echo $data['cname']; ?> </td>

                            <td> <?php echo $data['role-tit'] . " " . $array['cate-name']; ?> </td>

                            <td> <a href="addmember.php?update=<?php echo $data['mid']; ?>" class="btn btn-info">Update</a></td>
                            <td> <a href="specifiedCrew.php?delete=<?php echo $data['mid']; ?>&id=<?php echo $data['mid']; ?>" class="btn btn-danger"> Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    <?php else : ?>
        <div class='alert alert-success ' style="color:white;">
            there is no member assigned yet
        </div>
    <?php endif;
    include "script.php";
    ob_end_flush(); ?>

</div>