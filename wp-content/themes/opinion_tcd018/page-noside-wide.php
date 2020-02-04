<?php
/*
Template Name:2Columns (with sidebar)
*/
?>
<?php get_header(); $options = get_desing_plus_option(); ?>

<div id="main_col">
 <ul id="bread_crumb" class="clearfix mb20">
  <li class="home"><a href="<?php echo esc_url(home_url('/')); ?>"><span><?php _e('Home', 'tcd-w'); ?></span></a></li>
  <li class="last"><?php the_title(); ?></li>
 </ul>

 <h2 class="headline1" id="page_headline"><?php the_title(); ?></h2>

 <div id="content" class="clearfix">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <div class="post">

   <?php the_content(__('Read more', 'tcd-w')); ?>
   <?php wp_link_pages(); ?>

  </div><!-- END .post -->

  <?php endwhile; endif; ?>


 </div><!-- END #content -->

</div><!-- END #main_col -->

<?php get_template_part('sidebar2'); ?>


<?php get_footer(); ?>