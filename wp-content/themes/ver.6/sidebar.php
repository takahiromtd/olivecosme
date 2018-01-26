<div id="sidebar" class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
<div class="row mb10 mt10">
  <div class="hidden-xs hidden-sm col-md-12 col-lg-12">
    <div class="bg-fff">
      <h4 class="bold bb side-box"><i class="fa fa-rocket"></i> 参加者募集中</h4>
      <p>2015年末・2016春の武者修行プログラム説明会開催中です。</p>
      <div class="text-center"><a class="mt10 fs16 btn btn-success btn-lg text-center" href="/entry/" role="button">無料説明会エントリー</a></div>
    </div>
  </div>
</div>
  <div class="row mb10 mt10">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <div class="sidebar-box">
        <h4 class="sidebar-headline"><i class="fa fa-bullhorn"></i> 新着情報</h4>
        <ul>
        <?php $args = array(
        'numberposts' => 3,                //表示（取得）する記事の数
        'post_type' =>  array('post','event'),   //投稿タイプの指定
        );
        $customPosts = get_posts($args);
        if($customPosts) : foreach($customPosts as $post) : setup_postdata( $post ); ?>
        <li class="child-page-dotted bold mb10 pl15 pb15 mt10">
          <small><?php echo get_the_date(); ?></small>
          <a href="<?php the_permalink() ;?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
        </li>
        <?php endforeach; ?>
        <?php else : //記事が無い場合 ?>
        <p>新着情報はまだありません。</p>
        <?php endif;
        wp_reset_postdata(); //クエリのリセット ?>
        </ul>
      </div>
    </div>
  </div>
  <div class="row mb10">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <div class="sidebar-box">
        <h4 class="sidebar-headline"><i class="fa fa-group"></i> 参加者の声</h4>
        <?php $args = array(
            'numberposts' => 4,                //表示（取得）する記事の数
            'post_type' => 'column',   //投稿タイプの指定
            'orderby' => 'rand',
            );
        $customPosts = get_posts($args);
        if($customPosts) : foreach($customPosts as $post) : setup_postdata( $post ); ?>
        <div class="pad15 child-page-dotted">
          <a href="<?php the_permalink() ;?>" title="<?php the_title(); ?>">
            <img class="center-block img-responsive imgdd" src="<?php echo catch_that_image(); ?>">
          </a>
          <small>参加時期&nbsp;<?php echo post_custom('wpcf-column-year'); ?></small>
          <h5 class="fs14 bold"><a href="<?php the_permalink() ;?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h5>
        </div>
        <?php endforeach; ?>
        <?php else : //記事が無い場合 ?>
        <p>記事はまだありません。</p>
        <?php endif;
        wp_reset_postdata(); //クエリのリセット ?>
      </div>
    </div>
  </div>
</div><!-- #sidebar -->


