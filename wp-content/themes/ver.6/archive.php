<?php
/*
Template Name: archive-post.php
*/
?>
<?php get_header(); ?>
<?php get_template_part('pankuzu'); ?>
  <div class="about col-xs-12 col-sm-12 col-md-9 col-lg-9 mt10">
    <div class="bg-fff">
      <h1 class="pl15 pb5 mt10 bold">新着情報</h1>
        <?php $args = array( 
        'numberposts' => 30, 
        'post_type' => 'post',   //投稿タイプの指定
        'orderby' => 'desc',
        );
        $customPosts = get_posts($args);
        if($customPosts) : foreach($customPosts as $post) : setup_postdata( $post ); ?>
      <div class="box mt10">
        <a href="<?php the_permalink() ;?>" title="<?php the_permalink() ;?>"><h2 class="black bold fs14"><?php the_title(); ?></h2></a>
        <div class="row">
          <div class="about col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <img class="img-responsive" src="<?php echo catch_that_image(); ?>">
          </div>
          <div class="about col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="hidden-xs"><?php the_excerpt(); ?></div>
            <p class="text-right mt10"><a href="<?php the_permalink() ;?>" title="<?php the_permalink() ;?>"><i class="fa fa-angle-double-right"></i>&nbsp;詳しく見る</a></p>
          </div>
        </div>
      </div>
        <?php endforeach; ?>
        <?php else : //記事が無い場合 ?>
        <p>記事はまだありません。</p>
        <?php endif;
        wp_reset_postdata(); //クエリのリセット ?>
    </div>
  </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>