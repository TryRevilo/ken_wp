<style type="text/css">

  .date-meta {
    font-size: 15px;
    color: #FFF;
    text-align: center;
    position: absolute;
    top: 0;
    padding: 6px 13px;
  }

  .date-meta span {
    display:block;
    font-size:26px;
    font-weight:700;
  }

</style>

<?php
   /**
    * Template part for displaying posts.
    *
    * @link    https://codex.wordpress.org/Template_Hierarchy
    *
    * @package Shapely
    */
   
   ?>

   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
    <a href="<?php echo esc_url( get_the_permalink() ); ?>" class="thumbnail" href="sidebar-right.html">
      <span class="img">
        <img src="<?= catch_that_image(); ?>" class="img-responsive" alt=""/>
        <span class="cover"><span class="more">Read in detail &rarr;</span></span>
        <div class="date-meta">
          <?php echo get_the_date('F j, Y'); ?>
        </div>
      </span>
      <span class="title"><?php echo wp_trim_words( get_the_title(), 9 ); ?></span>
    </a>
  </div>