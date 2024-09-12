<?php
// include '../../public/uploads/testimonials/08-09-2024-1725798929.png'
include '../../../backend/config/db.php';
include "../master/header.php";
$authid = $_SESSION['author_id'];
$link_query = "SELECT * FROM admins WHERE id='$authid'";
$admins = mysqli_query($db_connect, $link_query);


?>

<?php include '../components/msg.php'; ?>


<!-- App content here -->

<div class="row">
    <div class="col-xl-6 col-md-6 col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-center align-items-center">
                <h5>Change Your name</h5>
            </div>
            <div class="auth-info d-flex flex-column gap-4 p-5">
                <span>
                    <span>Your Current Name: </span>
                    <span><?= $_SESSION['author_name'] ?></span>
                </span>
                <form action="store.php" method="POST" class="d-flex gap-4 justify-content-center align-items-center" >
                    <input type="text" name="name" placeholder="Enter Your name..." class="form-control">
                    <input type="submit" class="btn btn-danger ms-4" value="change" name="editname">
                </form>
            </div>
        </div>
    </div>
</div>
</div>








<?php

include "../master/footer.php";

?>