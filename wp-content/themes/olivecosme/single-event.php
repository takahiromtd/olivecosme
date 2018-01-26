<?php
// Template Name: single-event.php
?>  
 <?php get_template_part('header'); ?>
  <div id="main">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
          <div class="main-l">
            <?php if(have_posts()):while(have_posts()):the_post(); ?>
              <div class="article">
                <h1 class="article-headline"><?php the_title(); ?></h1>
                <div class="article-body">
                  <?php the_content(); ?>
                </div>
              </div>
            <?php endwhile;endif; ?>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-offset-1 col-md-3 col-lg-offset-1 col-lg-3">
        <?php get_template_part('map-account'); ?>
        <?php get_template_part('map-sidebar'); ?>
        </div>
      </div>
    </div>
  </div>
  <?php get_template_part('footer'); ?> 
<?php else: ?>
