<!-- App sidebar Menu start here -->

<div class="app-sidebar">
    <div class="logo">
        <a href="index.html" class="logo-icon"><span class="logo-text">Neptune</span></a>
        <div class="sidebar-user-switcher user-activity-online">
            <a href="#">
                <img src="<?= $assets ?>images/avatars/avatar.png">
                <span class="activity-indicator"></span>
                <span class="user-info-text"><?= $_SESSION['temp_name']; ?></span>
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
            <li>
                <a href="../banner/banner.php"><i class="material-icons-two-tone">inbox</i>Banner</a>
            </li>
            <li>
                <a href="../about/about.php"><i class="material-icons-two-tone">inbox</i>About</a>
            </li>
            <li>
                <a href="../services/services.php"><i class="material-icons-two-tone">inbox</i>Services</a>
            </li>
            <li>
                <a href="../projects/projects.php"><i class="material-icons-two-tone">inbox</i>Projects</a>
            </li>
            <li>
                <a href="../experiences/experiences.php"><i class="material-icons-two-tone">inbox</i>Experiences</a>
            </li>
            <li>
                <a href="../testimonial/testimonial.php"><i class="material-icons-two-tone">inbox</i>Reviews</a>
            </li>
            <li>
                <a href="../brands/brands.php"><i class="material-icons-two-tone">inbox</i>Brands</a>
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