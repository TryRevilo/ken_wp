<?php
$images_base_url = get_stylesheet_directory_uri();
?>

<div class="container">
	<div class="clearfix space30"></div>
	<h4 class="uppercase">Recent Projects</h4>
	<hr>
	<div id="portfolio-home" class="isotope gutter folio-boxed-4col">
		<div class="project-item photography branding">
			<a href="<?= $images_base_url; ?>/images/portfolio-single-slider.php">
				<div class="project-gal">
				<img src="<?php echo($images_base_url); ?>/images/projects/1.jpg" class="img-responsive" alt="">
					<div class="overlay-folio2">
						<div class="project-info">
							<h2>Aliquam tincidunt risus.</h2>
							<p>Web , Creative</p>
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="project-item illustration web-design illustration">
			<a href="<?= $images_base_url; ?>/images/portfolio-single-slider.php">
				<div class="project-gal">
					<img src="<?php echo($images_base_url); ?>/images/projects/2.jpg" class="img-responsive" alt="">
					<div class="overlay-folio2">
						<div class="project-info">
							<h2>Vestibulum auctor</h2>
							<p>Image Gallery</p>
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="project-item illustration print">
			<a href="<?= $images_base_url; ?>/images/portfolio-single-slider.php">
				<div class="project-gal">
					<img src="<?php echo($images_base_url); ?>/images/projects/3.jpg" class="img-responsive" alt="">
					<div class="overlay-folio2">
						<div class="project-info">
							<h2>Vestibulum auctor</h2>
							<p>Image Gallery</p>
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="project-item photography web-design">
			<a href="<?= $images_base_url; ?>/images/portfolio-single-slider.php">
				<div class="project-gal">
					<img src="<?php echo($images_base_url); ?>/images/projects/4.jpg" class="img-responsive" alt="">
					<div class="overlay-folio2">
						<div class="project-info">
							<h2>Vestibulum auctor</h2>
							<p>Image Gallery</p>
						</div>
					</div>
				</div>
			</a>
		</div>
	</div>
</div>