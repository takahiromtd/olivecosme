<?php
/*
Template Name: page-columns.php
*/
?>
<?php get_header(); ?>
<div class="container">
  <?php get_template_part('pankuzu'); ?>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
        <div class="row mb10">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h4 class="headline pl15 pb5">参加者体験談</h4>
          </div>
        </div>
        <div class="row mb10">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <ul class="posts">
            <?php $args = array( 
            'numberposts' => 30, 
            'post_type' => 'column',   //投稿タイプの指定
            'orderby' => 'none',
            );
            $customPosts = get_posts($args);
            if($customPosts) : foreach($customPosts as $post) : setup_postdata( $post ); ?>
              <li>
                <a href="<?php the_permalink() ;?>" class="thumbnail">
                  <img src="<?php echo catch_that_image(); ?>">
                  <h3 class="bold fs14"><?php the_title(); ?></h3>
                </a>
              </li>
            <?php endforeach; ?>
            <?php else : //記事が無い場合 ?>
            <p>記事はまだありません。</p>
            <?php endif;
            wp_reset_postdata(); //クエリのリセット ?>
            <ul>
          </div>
        </div>
    </div>
  </div>
</ul>
<?php get_sidebar(); ?>
<?php get_footer(); ?>