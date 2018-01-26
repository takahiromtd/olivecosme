  <?php get_template_part('header'); ?>
  <div id="main">
  	<div class="container">
  		<div class="row">
  			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
  				<div id="mix-container" class="mix-container main-l">
  				<h2><?php the_search_query(); ?>の検索結果 : <?php echo $wp_query->found_posts; ?>件</h2>
  				<!-- 投稿情報 loop -->
  				<?php if(have_posts()) : ?>
  				    <?php while(have_posts()):the_post() ?> 
  				        <h2><?php the_title(); ?></h2>
  				        <div class="post"> 
  				            <?php if (has_post_thumbnail()) : ?>
  				                <p class="postThumbnail"><?php the_post_thumbnail(); ?></p>
  				            <?php endif; ?>
  				            <p><?php the_content('詳細はこちら'); ?></p>
  				        </div><!-- /post -->
  				    <?php endwhile; ?>
  				<?php else: ?>
  				    <div class="post">
  				        <p>申し訳ございません。<br />該当する記事がございません。</p>
  				    </div>
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