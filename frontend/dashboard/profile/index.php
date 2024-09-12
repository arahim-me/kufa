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

<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Your Profile</h1>
        </div>
    </div>
    <div class="col">
        <div class="page-description">
            <h5 class="text-end">Visit your site<a href="../../../index.php" target="_blank"
                    class="ms-4 text-decoration-none">
                    <button class="btn btn-dark">Visit</button></a></h5>
        </div>
    </div>
</div>

<!-- App content here -->

<div class="row">
    <div class="col-xl-6 col-md-6 col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-center align-items-center">
                <h5>Change Your Profile</h5>
            </div>
            <div class="card-body p-5 d-flex justify-content-center align-items-center">
                <div class="auth-img me-3 d-flex">
                    <span>
                        <img class="img img-fluid"
                            style="width:180px; height: 180px;; border-radius:5px; object-fit: cover;"
                            src="../../public/uploads/profile/<?= (!$admin['avatar']) ? 'default.png' : $admin['avatar'] ?>"
                            alt="author-img">
                    </span>
                    <span style="margin-left: -35px;">
                        <a href="profile-pic.php?editid=<?= $_SESSION['author_id'] ?>">
                            <i class="fa-2x fas fa-edit text-dark"></i>
                        </a>
                    </span>
                </div>
                <div class="auth-info ms-3">
                    <h5>
                        <span>name : <?= $admin['name'] ?></span>
                        <a href="username.php?editid=<?= $_SESSION['author_id'] ?>" class="ms-3">
                            <i class="fas fa-edit text-dark"></i>
                        </a>
                    </h5>
                    <h6>
                        <span>Phone No :
                            <?= (!$admin['cel']) ? 'Not yet set' : '0' . $admin['cel'] ?>

                            <a href="phone.php?editid=<?= $_SESSION['author_id'] ?>" class="ms-3">
                                <i class="fas fa-edit text-dark"></i>
                            </a>
                    </h6>
                    <h6>
                        <span>email : <?= (!$admin['email']) ? 'Not yet set' : $admin['email'] ?></span>
                        <a href="email.php?editid=<?= $_SESSION['author_id'] ?>" class="ms-3">
                            <i class="fas fa-edit text-dark"></i>
                        </a>
                    </h6>
                </div>
            </div>
        </div>
    </div>
</div>








<?php

include "../master/footer.php";

?>