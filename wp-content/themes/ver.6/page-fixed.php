<?php
/*
Template Name: page-fixed.php
*/
?>
<?php get_header(); ?>
<div class="image-bg-fluid-height-about">
    <h1 class="page-title"><?php the_title(); ?></h1>
</div>
<?php get_template_part('pankuzu'); ?>
<div id="fixed" class="container">
      <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="bg-fff">
                  <?php if (have_posts()): while (have_posts()) : the_post();?>
                  <div class="mt10">
                  </div>
                  <?php the_content(); ?>
                  <?php endwhile; else: echo '記事はありません。'; endif; ?>
                  </div>
            </div>
      </div>
</div>
<?php get_footer(); ?>