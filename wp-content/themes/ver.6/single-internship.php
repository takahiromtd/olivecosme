<?php
/*
Template Name: single-internship.php
*/
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="yhBY75qhA2xA7ROIQj8zlDcgyNTHNS0Ot4zEnV8as44" />
    <title><?php wp_title ( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>
    <?php get_template_part('stylesheet'); ?>
    <?php get_template_part('fb-audience'); ?>
    <?php wp_head(); ?>
  </head>
  <body>
  <?php get_template_part('analytics'); ?>
  <?php get_template_part('fb_sdk'); ?>
    <div id="wrapper">
      <header>
          <?php get_template_part('internship-nav'); ?>
      </header><!-- header -->
      <div id="content" class="container">
        <div class="row">
          <?php get_template_part('pankuzu'); ?>
          <div class="about col-xs-12 col-sm-12 col-md-9 col-lg-9 mt10">
            <div class="bg-fff">
                <?php 
                if (have_posts()):
                while (have_posts()) :
                the_post();
                ?>
                <div class="mt10">
                  <h1 class="bold fs14 mt10"><?php the_title(); ?></h1>
                </div>
                  <?php the_content(); ?>
              </div>
            </div>
            <?php
            endwhile;
            else:
            echo '記事はありません。';
            endif;
            ?>
            </div>
          </div>
        </div><!-- row -->
      </div><!-- #content -->
      <footer>
        <div id="footer" class="container">
        </div><!-- #footer -->
        <?php get_template_part('back-to-top'); ?>
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <ul>
                  <li class="pull-left mt10 fs10 pr15"><a class="fff" href="/company/">運営会社</a></li>
                  <li class="pull-left mt10 fs10 pr15"><a class="fff" href="/contact/">お問い合わせ</a></li>
                  <li class="pull-left mt10 fs10 pr15"><a class="fff" href="/privacy/">プライバシーポリシー</a></li>
                  <li class="pull-left mt10 fs10"><a class="fff" href="/sitemap/">サイトマップ</a></li>
                </ul>
                <p class="text-right pl15 mt10 fs10">Copyright ©TABI-MUSHA All Rights Reserved.</p>
              </div>
            </div>
          </div><!-- row -->
        </div>
      </footer><!-- footer -->
      <?php wp_footer();?>
    </div><!-- #wrapper -->
    <?php get_template_part('ga_remarketing'); ?>
    <script src="<?php bloginfo('template_directory'); ?>/js/navbar-lateral-slide-menu.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  </body>
</html>