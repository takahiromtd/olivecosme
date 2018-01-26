<?php
// Template Name: page-404.php
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta name="robots" content="noindex">
	<meta charset="UTF-8"> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="robots" content="noindex">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/nmap.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/wp-members.css">
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.matchHeight-min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/stonewall.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.mixitup.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/nav.js"></script>
	<title><?php wp_title ( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <?php wp_head(); ?>
    </head>
    <body>
     <div class="container">
      <div class="row">
       <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
       <div class="mt100">
        <h1>404 Not Found.</h1>
          <p>よくぞこのページにたどりついてくれました。</p>
          <p>このページにアクセスした経緯をサイト管理人の旅武者のまっつんへご報告ください。</p>
          <div class="box">
           <h4 class="bold">自由なメッセージお待ちしております</h4>
           <?php echo do_shortcode('[ninja_forms id=1]'); ?>
         </div>
       </div>
     </div>
   </div>
 </div>
</body>