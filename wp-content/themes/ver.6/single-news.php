<?php
/*
Template Name: single-news.php
*/
?>
<?php get_header(); ?>
<?php get_template_part('pankuzu'); ?>
<div id="single-news" class="container">
  <div class="row mt80 mb80">
    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <div class="article article-news pt10">
          <p class="text-right"><?php the_time('Y年m月d日'); ?></p>
          <div class="mt10 bb pb10 mb20"><h1 class="bold mt10"><?php the_title(); ?></h1></div>
          <?php the_content(); ?>
        </div>
        <?php endwhile; else: echo '記事はありません。'; endif;?>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
        <?php $args = array( 
          'numberposts' => 10, 'post_type' => 'news', 'orderby' => 'desc', );
          $customPosts = get_posts($args); if($customPosts) : foreach($customPosts as $post) : setup_postdata($post ); ?>
          <div class="news-article">
            <small><?php the_time('Y年m月d日'); ?></small>
            <p class="black bold fs18 column-title"><a href="<?php the_permalink() ;?>"><?php the_title(); ?></p></a>
          </div>
        <?php endforeach; ?><?php else : //記事が無い場合 ?><p>記事はまだありません。</p>
      <?php endif; wp_reset_postdata(); //クエリのリセット ?>
    </div>
  </div>
</div>
</div>
<?php get_footer(); ?>