<?php get_header(); ?>
<?php get_template_part('pankuzu'); ?>
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 mt10">
      <div class="bg-fff">
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
          <img class="center-block img-responsive imgdd" src="<?php echo post_custom('wpcf-facilitator-profile-img'); ?>">
          <h1 class="bold mt10"><?php the_title(); ?></h1>
          <div class="article">
            <?php the_content(); ?>
          </div>
        </div>
      <?php endwhile; else: echo '記事はありません。'; endif;?>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt10">
      <h4 class="sidebar-headline"><i class="fa fa-group"></i> ファシリテーター</h4>
      <?php $args = array(
        'numberposts' => 4,                //表示（取得）する記事の数
        'post_type' => 'facilitator',   //投稿タイプの指定
        'orderby' => 'rand',
        );
      $customPosts = get_posts($args);
      if($customPosts) : foreach($customPosts as $post) : setup_postdata( $post ); ?>
      <div class="pad15 child-page-dotted">
        <a href="<?php the_permalink() ;?>" title="<?php the_title(); ?>"><img class="center-block img-responsive imgdd" src="<?php echo post_custom('wpcf-facilitator-profile-img'); ?>"></a>
        <h5 class="fs16 bold"><a href="<?php the_permalink() ;?>"><?php the_title(); ?></a></h5>
      </div>
    <?php endforeach; ?>
  <?php else : //記事が無い場合 ?>
    <p>記事はまだありません。</p>
  <?php endif;
  wp_reset_postdata(); //クエリのリセット ?>
</div>
</div>
<?php get_template_part('motivate-entry'); ?>
</div>

<?php get_footer(); ?>