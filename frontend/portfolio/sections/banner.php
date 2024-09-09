<?php
include './backend/config/db.php';
$query = "SELECT * FROM links WHERE status= 'active'";

$links = mysqli_query($db_connect, $query);
?>

<!-- main-area -->
<main>

    <!-- banner-area -->
    <section id="home" class="banner-area banner-bg fix">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-6">
                    <div class="banner-content">
                        <h6 class="wow fadeInUp" data-wow-delay="0.2s">HELLO!</h6>
                        <h2 class="wow fadeInUp" data-wow-delay="0.4s">I am Will Smith</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.6s">I'm Will Smith, professional web developer with
                            long time experience in this field​.</p>
                        <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                            <ul>
                                <?php foreach($links as $link):?>
                                    <li><a href="<?= $link['address']?>"><i class="<?= $link['icon']?>"></i></a></li>
                                <?php endforeach;?>
                            </ul>
                        </div>
                        <a href="#" class="btn wow fadeInUp" data-wow-delay="1s">SEE PORTFOLIOS</a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                    <div class="banner-img text-right">
                        <img src="./frontend/portfolio/img/banner/banner_img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-shape"><img src="./frontend/portfolio/img/shape/dot_circle.png" class="rotateme" alt="img">
        </div>
    </section>
    <!-- banner-area-end -->