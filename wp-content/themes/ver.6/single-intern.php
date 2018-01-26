<?php get_header(); ?>
                <div class="row">
                  <div class="article col-xs-12 col-sm-12 col-md-12 col-lg-12">
              		<?php 
              		if (have_posts()):
              		while (have_posts()) :
              		the_post();
              		?>
				          	<div class="mt10"><h1 class="headline bold fs14 mt10"><?php the_title(); ?></h1></div>
                    <div class="character">
                      <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mb20 bb">
                          <p class="bold">登場人物とあらすじ</p>
                          <p>海外に事業をつくりにベトナムへ飛んだ大学生のテラスハウス的、リアルにビジネスつくる過程の日記です。</p>
                          <ul>
                            <li class="pull-left">
                              <img class="img-responsive center-block" src="<?php bloginfo('template_directory'); ?>/img/tosuke.png" width="65px" height="65px">
                              <p class="text-center bold">とすけ</p>
                              <p class="fs12">武者修行生OB<br>大学生</p>
                            </li>
                            <li class="pull-left">
                              <img class="img-responsive center-block" src="<?php bloginfo('template_directory'); ?>/img/nainai.png" width="65px" height="65px">
                              <p class="text-center bold">ないない</p>
                              <p class="fs12">武者修行生OB<br>大学生</p>
                            </li>
                            <li class="pull-left">
                              <img class="img-responsive center-block" src="<?php bloginfo('template_directory'); ?>/img/khanh.png" width="65px" height="65px">
                              <p class="text-center bold">カイン</p>
                              <p class="fs12">元サムスン<br>マーケター</p>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <?php the_content(); ?>
                    </div>
                  </div>
                </div>
                <div class="row">
                 	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                 		<h5 class="headline bold fs14 mt10">武者修行プログラム説明会実施中</h5>
                 		<p>武者修行プログラムは、累計120人が参加した、大学生向け実績No.1の海外ビジネスプログラムです。</p>
                 		<p>与えられた問題を解決するのではなく、自分で考えた企画を、自分の手で実現しよう。バックパッカーで気ままな旅行も、語学のためだけの留学も、何か違うと思っていませんか？ 今の社会で求められている経験を、2015夏のベトナム2週間で一気に体験しましょう。</p>
                 	</div>
                </div>
                <div class="row mb10">
                  <div class="col-xs-12 col-sm-12 col-md-offset-4 col-md-4 col-lg-offset-4 col-lg-4">
                    <p class="text-center"><a class="btn btn-success btn-lg btn-block" href="/entry" role="button">説明会に参加する</a></p>
                  </div>
                </div>
					<?php
					endwhile;
					else:
					echo '記事はありません。';
					endif;
					?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>