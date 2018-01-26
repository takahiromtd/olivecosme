<?php
/*
Template Name: archive-event.php
*/
?>
 
  <?php get_template_part('header'); ?>
  <div id="main">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
          <!-- <script type="text/javascript">$(function() { $('.article-box').matchHeight(); });</script> -->
          <!-- <script type="text/javascript">$(function() { $('.article-box-detail').matchHeight(); });</script> -->
          <!-- <script> $(function() {$('.main-l').stonewall();});</script> -->
          <script>$(function(){$('#mix-container').mixItUp();});</script>
          <div class="controls mb20">
            <a class="sort mb20" data-sort="myorder:desc">新着順</a>　/　<a class="sort mb20" data-sort="myorder:asc">投稿日時順</a>
          </div>
          <div id="mix-container" class="mix-container main-l">
            <?php $args = array(
              'post_type' => array('event'), /* 投稿タイプを指定 */
              'tax_query' => array(
                'relation' => 'OR',
                ),
              'paged' => $paged,
              'posts_per_page' => '25' /* 5件を取得 */
              ); ?>
              <?php query_posts( $args ); ?>
              <?php if (have_posts()) : ?>
               <?php while (have_posts()) : the_post(); /* ループ開始 */ ?>
                <?php $postid = get_the_ID(); ?>
                <div class="article-box mix <?php echo get_post_type( $post ); ?> bd p5_0 hover" data-myorder="<?php echo $postid ;?>">
                  <div class="article-box-detail">
                    <div class="row">
                      <div class="col-lg-12">
                       <small>
                         <span class="label label-default"><?php echo esc_html(get_post_type_object(get_post_type())->label ); ?></span>
                         <span class="label-pad va"><?php the_category(' '); ?></span>
                       </small>
                       <p class="article-box-detail-headline hidden-xs"><a href="<?php the_permalink(); ?>" title=""><?php if(mb_strlen($post->post_title)>50) { $title= mb_substr($post->post_title,0,50) ; echo $title. '…' ; } else {echo $post->post_title;}?></a></p>
                     </div>
                   </div>
                   <div class="row mt5">
                     <div class="col-xs-5 col-sm-12 col-md-12 col-lg-12">
                       <a href="<?php the_permalink(); ?>" title="">
                         <img class="img-responsive m00 m0" src="<?php echo post_custom('wpcf-top169'); ?>">
                       </a>
                     </div>
                     <div class="visible-xs col-xs-7">
                      <p class="article-box-detail-headline visible-xs"><a href="<?php the_permalink(); ?>" title=""><?php if(mb_strlen($post->post_title)>50) { $title= mb_substr($post->post_title,0,50) ; echo $title. '…' ; } else {echo $post->post_title;}?></a></p>
                    </div>
                  </div>
                </div>
              </div>
              <?php endwhile; ?>
              <div class="gap"></div>
              <div class="gap"></div>
            <?php else : ?>
              <p>表示する記事はありませんでした。</p>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-offset-1 col-md-3 col-lg-offset-1 col-lg-3">
          <?php get_template_part('map-account'); ?>
          <?php get_template_part('map-sidebar'); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_template_part('footer'); ?>
