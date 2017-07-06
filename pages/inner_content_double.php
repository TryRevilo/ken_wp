<?php include('practice_areas_images.php'); ?>

<div class="inner-content">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div id="blog-slider" class="owl-carousel owl-theme">
					<?= practice_area_img($rev_args['images_path']); ?>
				</div>
			</div>
			<div class="col-md-8">
				<div class="fs-info">
					<?php include($rev_args['area_desc']); ?>
				</div>
			</div>
		</div>
	</div>
</div>