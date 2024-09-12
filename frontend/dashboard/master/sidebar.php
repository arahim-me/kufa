<?php
include '../../../backend/config/db.php';
$id = $_SESSION['author_id'];
$query = "SELECT * FROM admins WHERE id='$id'";
$admins = mysqli_query($db_connect, $query);
$admin = mysqli_fetch_assoc($admins);
// include "../master/header.php";
// include '../../public/uploads/profile'
?>

<!-- App sidebar Menu start here -->

<div class="app-sidebar">
    <div class="logo">
        <a href="index.html" class="logo-icon"><span class="logo-text">Neptune</span></a>
        <div class="sidebar-user-switcher user-activity-online">
            <a href="../profile/">
                <img src="../../public/uploads/profile/<?= (!$admin['avatar']) ? 'default.png' : $admin['avatar'] ?>"
                    style="border-radius:50%; width: 50px; height: 50px; object-fit: cover;">
                <span class="activity-indicator"></span>
                <span class="user-info-text"><?= $_SESSION['author_name']; ?></span>
            </a>
        </div>
    </div>
    <div class="app-menu">
        <ul class="accordion-menu">
            <li class="sidebar-title">
                Apps
            </li>
            <li class="active-page">
                <a href="../home/home.php" class="active"><i class="material-icons-two-tone">dashboard</i>Dashboard</a>
            </li>
            <li class="">
                <a href="../profile/index.php" class="active"><i class="material-icons-two-tone">person</i>Profile<i
                        class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                <ul class="sub-menu" style="display: none;">
                    <li>
                        <a href="../profile/index.php">view profile</a>
                    </li>
                    <li>
                        <a href="../profile/username.php">username</a>
                    </li>
                    <li>
                        <a href="../profile/profile-pic.php">profile picture</a>
                    </li>
                    <li>
                        <a href="../profile/email.php">email</a>
                    </li>
                    <li>
                        <a href="../profile/phone.php">Phone no</a>
                    </li>
                    <li>
                        <a href="../profile/password.php">password</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="../services/services.php"><i class="material-icons-two-tone">support_agent</i>Services</a>
            </li>
            <li>
                <a href="../about/about.php"><i class="material-icons-two-tone">support_agent</i>About</a>
            </li>
            <li>
                <a href="../projects/projects.php"><i class="material-icons-two-tone">workspaces</i>Projects</a>
            </li>
            <li>
                <a href="../experiences/experiences.php"><i class="material-icons-two-tone">sync</i>Experiences</a>
            </li>
            <li>
                <a href="../testimonial/testimonial.php"><i class="material-icons-two-tone">reviews</i>Reviews</a>
            </li>
            <li>
                <a href="../brands/brands.php"><i class="material-icons-two-tone">tab</i>Brands</a>
            </li>
            <li>
                <a href="../skills/skills.php"><i class="material-icons-two-tone">school</i>Skills/ Education</a>
            </li>
            <li>
                <a href="../links/links.php"><i class="material-icons-two-tone">link</i>Links</a>
            </li>
            <li>
                <a href="../contact/contact.php"><i class="material-icons-two-tone">inbox</i>Contact</a>
            </li>
            <li>
                <a href="../authentication/logout.php"><i class="material-icons-two-tone">logout</i>Logout</a>
            </li>
        </ul>
    </div>
</div>

<!-- App sidebar Menu end here -->