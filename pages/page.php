<?php 
$site_root = get_stylesheet_directory();

/** HTML Head **/
include($site_root . "/includes/html_head.php");

$page = $_GET['page'];
$page_title = "";
$content = "";
$inner_content = "";
$img_path = "";

include($site_root . '/pages/' . $page . '/definitions.php');

?>