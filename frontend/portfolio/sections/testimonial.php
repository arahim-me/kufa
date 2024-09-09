<?php

// $section_path = './frontend/portfolio/sections/';

include './backend/config/db.php';
$query = "SELECT * FROM testimonials WHERE status='active'";
$testimonials = mysqli_query($db_connect, $query);

?>


<!-- testimonial-area -->
<section class="testimonial-area primary-bg pt-115 pb-115">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section-title text-center mb-70">
                    <span>testimonial</span>
                    <h2>happy customer quotes</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-9 col-lg-10">
                <div class="testimonial-active">

                    <?php foreach ($testimonials as $testimonial): ?>
                        <div class="single-testimonial text-center">
                            <div class="testi-avatar">
                                <img style="width: 120px; height: 120px; overflow:hidden; border-radius: 50%;"
                                    src="./frontend/public/uploads/testimonials/<?= $testimonial['image'] ?>" alt="img">
                            </div>
                            <div class="testi-content">
                                <h4><span>“</span><?= $testimonial['text'] ?><span>”</span>
                                </h4>
                                <div class="testi-avatar-info">
                                    <h5><?= $testimonial['name'] ?></h5>
                                    <span><?= $testimonial['designation'] ?></span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial-area-end -->