<?php get_header(); ?>
<?php get_template_part('pankuzu'); ?>
<div class="container">
  <div id="single-column" class="row">
    <div class="hidden-xs hidden-sm col-md-3 col-lg-3 mt10">
      <div class="sidebar-box">
        <h4 class="sidebar-headline"><i class="fa fa-group"></i> 参加者の声</h4>
        <?php $args = array(
            'numberposts' => 10,                //表示（取得）する記事の数
            'post_type' => 'column',   //投稿タイプの指定
            'orderby' => 'rand',
            );
        $customPosts = get_posts($args);
        if($customPosts) : foreach($customPosts as $post) : setup_postdata( $post ); ?>
        <div class="pad15 child-page-dotted">
          <a href="<?php the_permalink() ;?>" title="<?php the_title(); ?>">
            <img class="center-block img-responsive" src="<?php echo catch_that_image(); ?>">
          </a>
          <small>参加時期&nbsp<?php echo post_custom('wpcf-column-year'); ?></small>
          <h5 class="fs14 bold"><a href="<?php the_permalink() ;?>"title="<?php the_title(); ?>"><?php the_title(); ?></a></h5>
        </div>
      <?php endforeach; ?>
    <?php else : //記事が無い場合 ?>
      <p>記事はまだありません。</p>
    <?php endif;
    wp_reset_postdata(); //クエリのリセット ?>
  </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 mt10">
  <div class="border-gray pad15 article">
   <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <h1 class="bold mt10"><?php the_title(); ?></h1>
    <?php get_template_part('participant'); ?>
    <?php get_template_part('sns'); ?>
    <div class="article">
      <?php the_content(); ?>
      <?php get_template_part('sns'); ?>
    </div>
  </div>
<?php endwhile; else: echo '記事はありません。'; endif; ?>
  <div class="mt40"><?php get_template_part('motivate-entry'); ?></div>
</div>
</div>
</div>
<?php get_footer(); ?>