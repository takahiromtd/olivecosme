<?php get_header(); ?>
<?php get_template_part('pankuzu'); ?>
<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
  <div class="bg-fff">
            <div class="row">
              <div class="article col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <?php 
                if (have_posts()):
                while (have_posts()) :
                the_post();
                ?>
                <div class="mt10">
                  <h1 class="bold fs14 mt10"><?php the_title(); ?></h1>
                </div>
                  <?php the_content(); ?>
              </div>
            </div>
            <div class="row mb10">
              <div class="col-xs-12 col-sm-12 col-md-offset-4 col-md-4 col-lg-offset-4 col-lg-4">
                <p class="text-center"><a class="btn btn-success btn-lg btn-block" href="<?php echo post_custom('wpcf-google_form');?>" role="button">イベントに参加する</a></p>
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
<?php get_sidebar(); ?>
<?php get_footer(); ?>