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
                <h5>Change Your password</h5>
            </div>
            <div class="auth-info p-5">                
                <form action="store.php" method="POST" class="d-flex flex-column gap-4 justify-content-center align-items-center" >
                    <input type="password" name="oldpass" placeholder="Enter old password..." class="form-control">
                    <input type="password" name="newpass" placeholder="Enter new password..." class="form-control">
                    <input type="submit" class="btn btn-danger ms-4" value="change" name="editpass">
                </form>
            </div>
        </div>
    </div>
</div>
</div>








<?php

include "../master/footer.php";

?>