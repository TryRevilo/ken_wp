<?php /* Template Name: practice */ ?>

<?php

get_header(); 
$page = $_GET['page'];

$site_root = get_stylesheet_directory();
$content_type = '';

include($site_root . '/pages/' . $page . '/definitions.php');
include($site_root . "/pages/page.php");

if ( isset ( $_GET[ "view" ] )) {
	$view = $_GET[ 'view' ];

	switch ( $view ) {
		case 'rev_single_column':
		$content_type = 'inner_content_single.php';
		break;
		
		default:
		$content_type = 'inner_content_double.php';
		break;
	}
} else {
	$content_type = 'inner_content_double.php';
	$page = $_GET["page"];
}

include( $site_root . '/pages/rev_column_content.php' );

get_footer(); 

?>

<!-- STYLE SWITCHER  ============================================= -->
<?php include($site_root . "/style_switcher.php"); ?>
<!-- END STYLE SWITCHER ============================================= -->

<!-- jQuery -->
<?php include($site_root . "/js_includes.php"); ?>