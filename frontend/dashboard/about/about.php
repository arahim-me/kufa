<?php
// include '../../public/uploads/testimonials/08-09-2024-1725798929.png'
include '../../../backend/config/db.php';
include "../master/header.php";
$query = "SELECT COUNT(*) FROM about";
$abouts = mysqli_query($db_connect, $query);
$about = mysqli_fetch_assoc($abouts);



?>

<?php include '../components/msg.php'; ?>

<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>About Yourself</h1>
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
                <h5>Thees content show your about and banner section</h5>
            </div>
        </div>
        <div class="card">
            <div class="card-header d-flex justify-content-center align-items-center">
                <h5>Change Your short-bio</h5>
            </div>
            <div class="auth-info p-5 d-flex flex-column gap-4">
                <span>
                    <span><?= $about['short-bio'] ?></span>
                </span>
                <form action="store.php" method="POST" class="d-flex flex-column gap-4">
                    <input type="text" autocomplete="off" name="phone" placeholder="Enter your short bio..."
                        class="form-control">
                    <input type="submit" class="btn btn-danger" value="change" name="editphone">
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-header d-flex justify-content-center align-items-center">
                <h5>Change Your Banner picture</h5>
            </div>
            <div class="auth-info p-5 gap-5 d-flex flex-column align-items-center">
                <div class="d-flex">
                    <img class="img img-fluid" id="displayImg" style="max-width: 200px; height:100%;"
                        src="../../public/uploads/about/<?= $about['banner-img'] ?>" alt="">
                </div>
                <div class="d-flex" style="max-width: 380px;">
                    <form action="store.php" method="POST" enctype="multipart/form-data"
                        class="d-flex justify-content-center align-items-center">
                        <input type="file" name="avatar" class="form-control"
                            onchange="document.getElementById('displayImg').src = window.URL.createObjectURL(this.files[0])">
                        <input type="submit" class="btn btn-danger ms-4" value="change" name="editavatar">
                    </form>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header d-flex justify-content-center align-items-center">
                <h5>Change Your long-bio</h5>
            </div>
            <div class="auth-info p-5 d-flex flex-column gap-4">
                <span>
                    <span><?= $about['long-bio'] ?></span>
                </span>
                <form action="store.php" method="POST" class="d-flex flex-column gap-4">
                    <textarea type="text" rows="10" autocomplete="off" name="phone"
                        placeholder="Enter your short bio..."
                        class="form-control"><?= (!$admin['cel']) ? 'Not set yet' : '0' . $admin['cel']; ?></textarea>
                    <input type="submit" class="btn btn-danger" value="change" name="editphone">
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-header d-flex justify-content-center align-items-center">
                <h5>Change Your About picture</h5>
            </div>
            <div class="auth-info p-5 gap-5 d-flex flex-column align-items-center">
                <div class="d-flex">
                    <img class="img img-fluid" id="displayImg" style="max-width: 200px; height:100%;"
                        src="../../public/uploads/profile/<?= $about['about-img'] ?>"
                        alt="">
                </div>
                <div class="d-flex" style="max-width: 380px;">
                    <form action="store.php" method="POST" enctype="multipart/form-data"
                        class="d-flex justify-content-center align-items-center">
                        <input type="file" name="avatar" class="form-control"
                            onchange="document.getElementById('displayImg').src = window.URL.createObjectURL(this.files[0])">
                        <input type="submit" class="btn btn-danger ms-4" value="change" name="editavatar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>








<?php

include "../master/footer.php";

?>