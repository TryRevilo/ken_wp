<?php 

$rev_cust_base = ABSPATH . 'wp-content/themes/rev_cust';

?>

<style type="text/css">
 .menu > li ul {
  background: #fff;
  width: 355px !important;
  padding: 0;
  margin: 0;
}

.main-navigation ul ul a {
  width: 355px !important;
  padding: 2px 15px;
  margin: 0;
}

.inner-content {
  padding: 12px 0 !important;
}
</style>

<?php
   /**
    *    Sets up theme defaults and registers support for various WordPress features.
    *
    *    Note that this function is hooked into the after_setup_theme hook, which
    *    runs before the init hook. The init hook is too late for some features, such
    *    as indicating support for post thumbnails.
    */
   if ( ! function_exists( 'rev_cust_setup' ) ) {
    add_action( 'after_setup_theme', 'rev_cust_setup' );

    function rev_cust_setup() {

         // Load Theme Textdomain
     load_theme_textdomain( 'rev_cust', get_stylesheet_directory_uri() . '/languages' );
   }
 }

 if ( ! function_exists( 'catch_that_image' ) ) {
  function catch_that_image() {
   global $post, $posts;
   $first_img = '';
   ob_start();
   ob_end_clean();
   $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
   $first_img = $matches [1] [0];

         if(empty($first_img)){ //Defines a default image
          $first_img = get_stylesheet_directory_uri() . "/images/default-blog-thumb.png";
        }
        return $first_img;
      }
    }

    /* Add Scripts */

    if ( ! function_exists('rev_cust_scripts')) {

      add_action( 'wp_enqueue_scripts', 'rev_cust_scripts' );
      
      function rev_cust_scripts() {
       $script_paths = array("layout");
       $scripts_stack = [];

       foreach ($script_paths as &$value) {

        $dir = get_stylesheet_directory() . '/' . $value;
        $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir), RecursiveIteratorIterator::SELF_FIRST );

        foreach ( $iterator as $path ) {
         if ( ! $path -> isDir() ) {
          $path_parts = pathinfo($path);
          $file_parts = $path_parts['extension'];

          if ( !in_array($file_parts, array('css','js'), true ) ) 
           continue;

         switch ($file_parts) {
           case 'css':
           $file_name = basename($path, '.css');
           break;
           case 'js':
           $file_name = basename($path, '.js');
           break;
         }

         if ($file_name == "test")
           continue;

         require_once( ABSPATH . '/wp-admin/includes/file.php' );
         $pages_base = get_stylesheet_directory();
         $server_pages_base = get_stylesheet_directory_uri();

         $url = str_replace($pages_base, $server_pages_base, $path);

         $array_item = array('script' => $file_parts, 'handle' => $file_name, 'src' => $url);

         if (in_array($array_item, $scripts_stack)) {
           continue;
         } else {
           array_push($scripts_stack, $array_item);
         }
       }
     }
   }

   doAttachScripts($scripts_stack);
 }

 function doAttachScripts($scripts) {
   wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
   foreach ($scripts as $key => $child_array) {
    if (is_array($child_array)) {
     $script = $child_array['script'];

     switch ($script) {
      case 'css':
                  // print('<div>' . $key . " : " . $script . " : "  . $child_array['handle'] . " : " . $child_array['src'] . '</div>');
      wp_enqueue_style($child_array['handle'], $child_array['src']);
      break;

      case 'js' :
                  // print('<div>' . get_stylesheet_directory_uri() . '</div>');
      wp_enqueue_script( $child_array['handle'], $child_array['src'],  array( 'jquery', 'bootstrap' ), false, true );
      break;
    }
               // echo PHP_EOL;
    unset($scripts[$key]);
  }
}
}
}

   /**
    * Filter the except length to 20 words.
     *
      * @param int $length Excerpt length.
       * @return int (Maybe) modified excerpt length.
        */

   if ( ! function_exists('rev_custom_excerpt_length')) {

    function rev_custom_excerpt_length( $length ) {
     return 20;
   }
   add_filter( 'excerpt_length', 'rev_custom_excerpt_length', 999 );

 }