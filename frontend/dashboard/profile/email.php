<?php
// include '../../public/uploads/testimonials/08-09-2024-1725798929.png'
include '../../../backend/config/db.php';
include "../master/header.php";
$authid = $_SESSION['author_id'];
$query = "SELECT * FROM admins WHERE id='$authid'";
$admins = mysqli_query($db_connect, $query);
$admin = mysqli_fetch_assoc($admins);
?>


<?php include '../components/msg.php'; ?>


<!-- App content here -->

<div class="row">
    <div class="col-xl-6 col-md-6 col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-center align-items-center">
                <h5>Change Your email</h5>
            </div>
            <div class="auth-info p-5">
                <h5 class=" mb-4">
                    <span>Your email : </span>
                    <span><?= $admin['email']; ?></span>
                </h5>
                <form action="store.php" method="POST" class="d-flex justify-content-center align-items-center">
                    <input type="text" autocomplete="off" name="email" placeholder="Enter your email..."
                        class="form-control">
                    <input type="submit" class="btn btn-danger ms-4" value="change" name="editemail">
                </form>
            </div>
        </div>
    </div>
</div>
</div>








<?php

include "../master/footer.php";

?>