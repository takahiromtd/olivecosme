<?php
/*
Template Name: archive.php
*/
?>
<?php get_header(); ?>
<?php get_template_part('pankuzu'); ?>
<div id="column">
  <div class="container">
    <div class="row">
      <div class="column col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="section">
          <p class="fs24 text-center bold">参加者の声</p>
        </div>
        <div class="row mb10">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <script type="text/javascript">$(function() { $('.posts').matchHeight(); });</script>
            <script type="text/javascript">$(function() { $('.column-title').matchHeight(); });</script>
            <?php $args = array( 
              'numberposts' => 50, 
              'post_type' => 'column',   //投稿タイプの指定
              'orderby' => 'desc',
              );
            $customPosts = get_posts($args);
            if($customPosts) : foreach($customPosts as $post) : setup_postdata( $post ); ?>
            <div class="posts pad5">
              <div class="column-thumb">
                <!-- <a href="<?php the_permalink() ;?>"><img class="img-responsive" src="<?php echo catch_that_image(); ?>"></a> -->
                <!-- <div class="column-tag bold"><?php $terms = get_the_terms( $post->ID, 'column-cat' ); foreach ( $terms as $term ) { echo $term->name; } ?></div> -->
              </div>
              <h2 class="black bold fs18 column-title"><a href="<?php the_permalink() ;?>"><?php the_title(); ?></a></h2>
              <p class="fs12"><i class="fa fa-pencil" aria-hidden="true"></i> <?php echo post_custom('wpcf-column-uni'); ?></p>
              <p class="fs12"><i class="fa fa-commenting-o"></i> <?php echo post_custom('wpcf-column-comment'); ?></p>
              <div class="continue mb20"><a href="<?php the_permalink() ;?>"><i class="fa fa-angle-right"></i>&nbsp;続きを読む</a></div>
              <?php get_template_part('sns'); ?>
            </div>
          <?php endforeach; ?>
        <?php else : //記事が無い場合 ?>
          <p>記事はまだありません。</p>
        <?php endif; wp_reset_postdata(); //クエリのリセット ?>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<?php get_footer(); ?>