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
        <div id="tagTable">
          <li class="col-xs-4 col-sm-4 col-md-2 col-lg-2 text-center bar"><p class=""><a href="http://localhost:8888/column/tags/bestten/">記事10選</a></p></li>
          <li class="col-xs-4 col-sm-4 col-md-2 col-lg-2 text-center bar"><p class=""><a href="http://localhost:8888/column/tags/before_hunting/">就活</a></p></li>
          <li class="hidden-xs hidden-sm col-md-2 col-lg-2 text-center bar"><p class=""><a href="http://localhost:8888/column/tags/oneyear/">1年生</a></p></li>
          <li class="col-xs-4 col-sm-4 hidden-md hidden-lg text-center"><p class=""><a href="http://localhost:8888/column/tags/oneyear/">1年生</a></p></li>
          <li class="col-xs-4 col-sm-4 col-md-2 col-lg-2 text-center bar"><p class=""><a href="http://localhost:8888/column/tags/local/">地方</a></p></li>
          <li class="col-xs-4 col-sm-4 col-md-2 col-lg-2 text-center bar"><p class=""><a href="http://localhost:8888/column/tags/scientist/">理系</a></p></li>
          <li class="col-xs-4 col-sm-4 col-md-2 col-lg-2 text-center"><p class=""><a href="http://localhost:8888/column/tags/change_life/">変態</a></p></li>
        </div>
        <div class="row mb10">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <script type="text/javascript">$(function() { $('.posts').matchHeight(); });</script>
            <script type="text/javascript">$(function() { $('.column-title').matchHeight(); });</script>
            <?php
              $paged = get_query_var('paged') ? get_query_var('paged') : 1;
              query_posts('posts_per_page=10&paged='.$paged);
              ?>
            <?php query_posts($query_string . "&pst_type=tags&posts_per_page=30&paged='.$paged"); ?>
            <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
            <div class="posts pad5">
              <div class="column-thumb">
                <a href="<?php the_permalink() ;?>"><img class="img-responsive" src="<?php echo catch_that_image(); ?>"></a>
                <div class="column-tag bold"><?php $terms = get_the_terms( $post->ID, 'column-cat' ); foreach ( $terms as $term ) { echo $term->name; } ?></div>
              </div>
              <h2 class="black bold fs18 column-title"><a href="<?php the_permalink() ;?>"><?php the_title(); ?></a></h2>
              <p class="fs12"><i class="fa fa-pencil" aria-hidden="true"></i> <?php echo post_custom('wpcf-column-uni'); ?></p>
              <p class="fs12"><i class="fa fa-commenting-o"></i> <?php echo post_custom('wpcf-column-comment'); ?></p>
              <div class="continue mb20"><a href="<?php the_permalink() ;?>"><i class="fa fa-angle-right"></i>&nbsp;続きを読む</a></div>
              <?php get_template_part('sns'); ?>
            </div>
          <?php endwhile; ?>
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