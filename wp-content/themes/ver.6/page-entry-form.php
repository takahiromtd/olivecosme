<?php
/*
Template Name: page-entry-form.php
*/
?>
<?php get_header(); ?>
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-offset-1 col-md-10 col-lg-offset-1 col-lg-10 mt20">
      <div class="border-bold pad15">
      <h2 class="text-center bb pb15 bold">プログラム説明会エントリー</h2>
        <?php  if (have_posts()): while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; else: echo '記事はありません。'; endif;?>
      </div>
    </div>
  </div>
</div>
<footer>
  <?php get_template_part('back-to-top'); ?>
</footer><!-- footer -->
<?php wp_footer();?>
</div><!-- #wrapper -->
<?php get_template_part('ga_remarketing'); ?>
<script src="https://use.typekit.net/vtq4rbj.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<script src="<?php bloginfo('template_directory'); ?>/js/navbar-lateral-slide-menu.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>