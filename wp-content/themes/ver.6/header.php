<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="google-site-verification" content="yhBY75qhA2xA7ROIQj8zlDcgyNTHNS0Ot4zEnV8as44" />
    <link rel="stylesheet" href="//fonts.googleapis.com/earlyaccess/notosansjapanese.css">
    <title><?php wp_title ( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>
    <?php get_template_part('stylesheet'); ?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php get_template_part('analytics'); ?>
    <?php get_template_part('fb_sdk'); ?>
    <?php get_template_part('fb_audience'); ?>
    <?php wp_head(); ?>
  </head>
  <body>
    <div id="wrapper">
      <header>
          <?php get_template_part('nav'); ?>
      </header><!-- header -->