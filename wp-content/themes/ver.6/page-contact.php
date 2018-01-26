<?php
/*
Template Name: page-contact.php
*/
?>
<?php get_header(); ?>
<?php get_template_part('pankuzu'); ?>
<div id="contact" class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
      <div class="section">
        <div class="border-gray pad15">
          <?php  if (have_posts()): while (have_posts()) : the_post();?>
          <h1 class="bold bb pb5"><?php the_title(); ?></h1>
            <?php the_content(); ?>
          <?php endwhile; else: echo '記事はありません。'; endif; ?>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
      <div class="section">
        <div class="border-gray pad15">
            <h3 class="bold bb pb5">資料請求</h3>
            <p>海外ビジネス武者修行プログラムに関する情報について、詳しく知りたい方には資料を郵送にてお送りしています。</p>
            <a class="mt10 btn fs16 btn-success btn-lg btn-block" href="/pamphlet/" role="button"><i class="fa fa-file-text-o"></i> 資料請求フォームへ</a>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>