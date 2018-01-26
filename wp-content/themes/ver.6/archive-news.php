<?php
/*
Template Name: archive-news.php
*/
?>
<?php get_header(); ?>
<?php get_template_part('pankuzu'); ?>
<div class="container">
  <div id="news" class="row mt80 mb80">
    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
      <?php $args = array( 
        'numberposts' => 30, 'post_type' => 'news', 'orderby' => 'desc', );
        $customPosts = get_posts($args); if($customPosts) : foreach($customPosts as $post) : setup_postdata($post ); ?>
        <div class="news-article">
        <small><?php the_time('Y年m月d日'); ?></small>
        <h2 class="black bold fs18 column-title"><a href="<?php the_permalink() ;?>"><?php the_title(); ?></h2></a>
        <div class="pl5"><?php the_excerpt(); ?></div>
        </div>
      <?php endforeach; ?><?php else : //記事が無い場合 ?><p>記事はまだありません。</p>
    <?php endif; wp_reset_postdata(); //クエリのリセット ?>
  </div>
  <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
  </div>
</div>
</div>
<?php get_footer(); ?>