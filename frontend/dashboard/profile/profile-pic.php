<?php
// include '../../public/uploads/testimonials/08-09-2024-1725798929.png'
include '../../../backend/config/db.php';
include "../master/header.php";
$authid = $_SESSION['author_id'];
$query = "SELECT * FROM admins WHERE id='$authid'";
$admins = mysqli_query($db_connect, $query);
$admin = mysqli_fetch_assoc($admins);
// include'../../public/uploads/profile/'
?>


<?php include '../components/msg.php'; ?>


<!-- App content here -->

<div class="row">
    <div class="col-xl-6 col-md-6 col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-center align-items-center">
                <h5>Change Your profile picture</h5>
            </div>
            <div class="auth-info p-5 gap-5 d-flex flex-column align-items-center">
                <div class="d-flex">
                    <img class="img img-fluid" id="displayImg" style="max-width: 200px; height:100%;"
                        src="../../public/uploads/profile/<?= (!$admin['avatar']) ? 'default.png' : $admin['avatar'] ?>"
                        alt="">
                </div>
                <div class="d-flex" style="max-width: 380px;">
                    <form action="store.php" method="POST" enctype="multipart/form-data"
                        class="d-flex justify-content-center align-items-center">
                        <input type="file" name="avatar" class="form-control" onchange="document.getElementById('displayImg').src = window.URL.createObjectURL(this.files[0])">
                        <input type="submit" class="btn btn-danger ms-4" value="change" name="editavatar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>








<?php

include "../master/footer.php";

?>