<?php
/*
Template Name: archive-parents.php
*/
?>
<?php get_header(); ?>
<?php get_template_part('pankuzu'); ?>
<div id="single-column" class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 article">
          <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <div class="mt10"><h1 class="bold mt10"><?php the_title(); ?></h1></div>
            <div class="article">
              <?php the_content(); ?>
            </div>
          </div>
        </div>
        <?php
        endwhile;
        else:
          echo '記事はありません。';
        endif;
        ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>