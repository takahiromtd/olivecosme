<?php get_header(); ?>
<?php get_template_part('pankuzu'); ?>
<div class="container">
  <div class="row mt20">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <div id="single-map" class="w800 center-block pad15 border-gray mb40">
          <h1><?php the_title(); ?></h1>
          <?php if (have_posts()): while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
          <?php endwhile; else: echo '記事はありません。'; endif; ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>