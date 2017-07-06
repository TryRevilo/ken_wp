<?php

get_header(); ?>

<?php $layout_class = shapely_get_layout_class();?>
<div class="container">
	<div class="row">
		<div id="primary" class="col-md-12 mb-xs-24 <?php echo esc_attr( $layout_class ); ?>">
			<?php include( get_stylesheet_directory() . '/includes/main.php'); ?>

			<div class="row section recentworks topspace">

				<h2 class="section-title"><span>Recently Published Works</span></h2>
				<div class="thumbnails recentworks row">
					<?php
					if ( have_posts() ) :

						if ( is_home() && ! is_front_page() ) : ?>
					<header>
						<h1 class="page-title screen-reader-text"><?php esc_html( single_post_title() ); ?></h1>
					</header>

					<?php
					endif;

					$layout_type = get_theme_mod( 'blog_layout_view', 'grid' );
					$layout_type = str_replace( '_', '-', $layout_type );

					get_template_part( 'template-parts/layouts/blog', $layout_type );

					shapely_pagination();

					else :
						get_template_part( 'template-parts/content', 'none' );

					endif;

					?>
				</div>

			</div> 
		</div>
	</div>
</div>
<?php
get_footer();
