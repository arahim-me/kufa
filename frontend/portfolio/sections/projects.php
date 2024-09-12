<?php

// $section_path = './frontend/portfolio/sections/';

include './backend/config/db.php';
$query = "SELECT * FROM projects WHERE status='active'";
$projects = mysqli_query($db_connect, $query);

?>

<!-- Portfolios-area -->
<section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-6 col-lg-8">
				<div class="section-title text-center mb-70">
					<span>Portfolio Showcase</span>
					<h2>My Recent Best Works</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<?php foreach ($projects as $project): ?>
				<div class="col-lg-4 col-md-6 pitem">
					<div class="speaker-box">
						<div class="speaker-thumb">
							<img src="./frontend/public/uploads/projects/<?= $project['image'] ?>" alt="img">
						</div>
						<div class="speaker-overlay">
							<span><?= $project['category'] ?></span>
							<h4><a href="./display-project.php?projectid=<?= $project['id'] ?>"><?= $project['title'] ?></a>
							</h4>
							<a href="./display-project.php?projectid=<?= $project['id'] ?>" class="arrow-btn">More information
								<span></span></a>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<!-- services-area-end -->