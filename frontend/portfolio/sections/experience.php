<?php
$query = "SELECT * FROM experiences WHERE status='active'";
$experiences = mysqli_query($db_connect, $query);
?>
<!-- fact-area -->
<section class="fact-area">
    <div class="container">
        <div class="fact-wrap">
            <div class="row justify-content-center">
                <?php foreach ($experiences as $experience): ?>
                    <div class="col-xl-2 col-lg-3 col-sm-6">
                        <div class="fact-box text-center mb-50">
                            <div class="fact-icon">
                                <i class="<?= $experience['icon'] ?>"></i>
                            </div>
                            <div class="fact-content">
                                <h2><span class="count"><?= $experience['description'] ?></span></h2>
                                <span><?= $experience['name'] ?></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>                
            </div>
        </div>
    </div>
</section>
<!-- fact-area-end -->