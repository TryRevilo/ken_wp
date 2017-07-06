<?php
/**
 * The template for displaying search results pages.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Shapely
 */
?>

<style type="text/css">

	.undefined-sticky-wrapper {
		margin: 0 0 42px 0 !important;
	}
	
	.rev-search-header-ttl {
		display: block;
		padding-bottom: 22px;
		width: 100%;
		overflow: hidden;
		text-align: center;
		font-weight: 300;
		text-transform: uppercase;
		font-size: 22px !important;
		letter-spacing: 1px;
		background-image: none !important;
	}

</style>

<?php

get_header();
$layout_class = shapely_get_layout_class(); 

?>

<div class="main-page-container">
	<div class="content">
		<div class="row">
			<?php
			if ( 'sidebar-left' == $layout_class ) :
				get_sidebar();
			endif;
			?>
			<section id="primary" class="content-area col-md-8 mb-xs-24 <?php echo esc_attr( $layout_class ); ?>">
				<main id="main" class="site-main" role="main">

					<?php
					if ( have_posts() ) : ?>

					<header class="entry-header nolist">
						<h1 class="post-title entry-title rev-search-header-ttl"><?php printf( esc_html__( '%s', 'shapely' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
					</header><!-- .page-header -->

					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );

						endwhile;

						shapely_pagination();
						else :

							get_template_part( 'template-parts/content', 'none' );

						endif; ?>

					</main><!-- #main -->
				</section><!-- #primary -->

				<?php
				if ( 'sidebar-right' == $layout_class ) :
					get_sidebar();
				endif;
				?>
			</div>
		</div>
	</div>
	<?php
	get_footer();
