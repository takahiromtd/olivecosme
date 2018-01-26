  <?php get_template_part('header'); ?>
  <!--   <div class="mw900">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner" role="listbox">
      <div class="item active">
      <img src="https://dummyimage.com/800x450/eeeeee/eeeeee" alt="...">
        <div class="carousel-caption">
          ...
        </div>
      </div>
      <div class="item">
      <img src="https://dummyimage.com/800x450/eeeeee/eeeeee" alt="...">
        <div class="carousel-caption">
          ...
        </div>
      </div>
      ...
    </div>

    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div> -->
  <div id="main">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
          <p class="bold">オリーブ由来のコスメの</p>
          <p class="bold">このサイトでは、修了生のコミュニティの活動と、みんなの人生が豊かになる機会を共有します！</p>
          <p class="bold pb30 mb30 bb"><a href="/about">→　はじめての方へ</a></p>
          <script>$(function(){$('#mix-container').mixItUp();});</script>
          <div class="controls mb20">
            <a class="bold filter active mb40" data-filter="all">全ての記事</a><span>　|　</span>
            <a class="bold filter mb40" data-filter=".guide">最初にオススメ</a><span>　|　</span>
            <a class="bold filter mb40" data-filter=".post">商品レビュー</a><span>　|　</span>
            <a class="bold filter mb40" data-filter=".page">キソ知識</a>
            <!--<label>Sort:</label>
            <button class="sort" data-sort="myorder:asc">Asc</button>
            <button class="sort" data-sort="myorder:desc">Desc</button> -->
          </div>
          <div id="mix-container" class="mix-container main-l">
            <?php $args = array(
              'post_type' => array('post' , 'page' , 'guide'), /* 投稿タイプを指定 */
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
                         <span class="label label-default"><?php the_category(' '); ?></span>
                         <!-- <span class="label label-default"><?php echo esc_html(get_post_type_object(get_post_type())->label ); ?></span> -->
                         <!-- <span class="label-pad va"><?php the_category(' '); ?></span> -->
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
        <?php get_template_part('sidebar'); ?>
      </div>
    </div>
  </div>
</div>
<?php get_template_part('footer'); ?>