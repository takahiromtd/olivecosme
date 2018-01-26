<?php get_header(); ?>
<?php get_template_part('pankuzu'); ?>
<div class="container">
  <div class="row mt20">
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
      <div id="single-map" class="pad15 border-gray mb40">
        <h1><?php the_title(); ?></h1>
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; else: echo '記事はありません。'; endif; ?>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
      <div class="pad15 border-gray mb40">
        <?php $args = array(
                'numberposts' => 10,                //表示（取得）する記事の数
                'post_type' => 'advance',   //投稿タイプの指定
                'orderby' => 'rand',
                );
        $customPosts = get_posts($args);
        if($customPosts) : foreach($customPosts as $post) : setup_postdata( $post ); ?>
        <div class="pad15 child-page-dotted">
          <a href="<?php the_permalink() ;?>" title="<?php the_title(); ?>">
            <img class="center-block img-responsive" src="<?php echo catch_that_image(); ?>">
          </a>
          <h5 class="fs14 bold"><a href="<?php the_permalink() ;?>"title="<?php the_title(); ?>"><?php the_title(); ?></a></h5>
        </div>
      <?php endforeach; ?>
      <?php else : //記事が無い場合 ?>
      <p>記事はまだありません。</p>
    <?php endif; wp_reset_postdata(); //クエリのリセット ?>
    </div>
  </div>
</div>
</div>
<?php get_footer(); ?>