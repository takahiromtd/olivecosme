<?php
/*
Template Name: page-pamphlet.php
*/
?>
<?php get_header(); ?>
<div class="container">
  <?php get_template_part('pankuzu'); ?>
  <div class="row mt10">
    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
      <div class="border-gray pad15">
        <?php  if (have_posts()): while (have_posts()) : the_post();?>
        <h1 class="bold bb pb5"><?php the_title(); ?></h1>
        <?php the_content(); ?>
        <?php endwhile; else: echo '記事はありません。'; endif; ?>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
      <div class="border-gray pad15">
          <h3 class="bold bb pb5">その他のお問い合わせ</h3>
          <p>その他、ご質問がございましたら、下記からお気軽にお問い合わせください。</p>
          <a class="mt10 fs16 btn btn-success btn-lg btn-block" href="/contact/" role="button"><i class="fa fa-question-circle"></i> お問い合わせへ</a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>