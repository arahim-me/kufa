<?php

// $section_path = './frontend/portfolio/sections/';

include './backend/config/db.php';
$query = "SELECT * FROM brands WHERE status='active'";
$brands = mysqli_query($db_connect, $query);

?>

<!-- brand-area -->
<div class="barnd-area pt-100 pb-100">
    <div class="container">
        <div class="row brand-active">

            <?php foreach ($brands as $brand): ?>
                <div class="single-brand">
                    <img src="./frontend/public/uploads/brands/<?= $brand['logo'] ?>" alt="img">
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>
<!-- brand-area-end -->