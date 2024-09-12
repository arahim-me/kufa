<?php

// $section_path = './frontend/portfolio/sections/';

include './backend/config/db.php';
$query = "SELECT * FROM education WHERE status='active'";
$skills = mysqli_query( $db_connect,  $query);

?>

<!-- about-area-->
<section id="about" class="about-area primary-bg pt-120 pb-120">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img">
                    <img src="./frontend/portfolio/img/banner/banner_img2.png" title="me-01" alt="me-01">
                </div>
            </div>
            <div class="col-lg-6 pr-90">
                <div class="section-title mb-25">
                    <span>Introduction</span>
                    <h2>About Me</h2>
                </div>
                <div class="about-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, sed repudiandae odit deserunt,
                        quas
                        quibusdam necessitatibus nesciunt eligendi esse sit non reprehenderit quisquam asperiores maxime
                        blanditiis culpa vitae velit. Numquam!</p>
                    <h3>Education:</h3>
                </div>
                <!-- Education Item -->
                <?php foreach ($skills as $skill): ?>
                    <div class="education">
                        <div class="year"><?= $skill['year']?></div>
                        <div class="line"></div>
                        <div class="location">
                            <span><?= $skill['degree']?></span>
                            <div class="progressWrapper">
                                <div class="progress">
                                    <div class="progress-bar wow slideInLefts" data-wow-delay="0.5s" data-wow-duration="2s"
                                        role="progressbar" style="width: <?= $skill['ratio']?>%;" aria-valuenow="<?= $skill['ratio']?>" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- End Education Item -->
            </div>
        </div>
    </div>
</section>
<!-- about-area-end -->