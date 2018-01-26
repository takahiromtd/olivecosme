<?php get_header(); ?>
<div class="image-bg-fluid-height">
    <h1 class="page-title"><?php the_title(); ?></h1>
</div>
<?php get_template_part('pankuzu'); ?>
<div class="container">
  <div class="row mt20">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <div id="single-sche" class="w800 center-block pad15 border-gray">
          <?php if (have_posts()): while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
          <?php endwhile; else: echo '記事はありません。'; endif; ?>
          <div class="text-center mt40 entry-button"><a class="btn btn-default btn-lg bold" href="/entry" title="xxx"><i class="fa fa-angle-double-right"></i> 説明会エントリー</a></div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>