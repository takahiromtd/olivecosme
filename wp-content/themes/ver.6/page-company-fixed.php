<?php
/*
Template Name: page-company-fixed.php
*/
?>
<?php get_header(); ?>
<?php get_template_part('pankuzu'); ?>
<div id="president" class="container">
  <div class="row">
    <div class="hidden-xs hidden-sm col-md-3 col-lg-3">
      <div class="section">
        <div class="child-page">
          <ul>
            <li class="child-page-dotted bold"><a href="/company/" title="運営会社">運営会社</a></li>
            <li class="child-page-dotted pl15"><a href="/company/president" title="代表挨拶"><i class="fa fa-angle-right"></i>&nbsp;代表挨拶</a></li>
            <li class="pl15"><a href="/contact/" title="お問い合わせ"><i class="fa fa-angle-right"></i>&nbsp;お問い合わせ</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
      <div class="section">
        <div class="bg-white border-gray pad15">
            <?php  if (have_posts()): while (have_posts()) : the_post();?>
            <h1 class="bold bb pb5"><?php the_title(); ?></h1>
            <?php the_content(); ?>
            <?php endwhile; else: echo '記事はありません。'; endif;?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>