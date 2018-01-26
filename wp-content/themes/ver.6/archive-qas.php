<?php
/*
Template Name: archive.php
*/
?>
<?php get_header(); ?>
<?php get_template_part('pankuzu'); ?>
                  <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                      <div class="row mb10">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          <h4 class="headline pl15 pb5"><?php echo esc_html(get_post_type_object(get_post_type())->label ); ?></h4>
                        </div>
                      </div>
                      <div class="row mb10">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          <?php $args = array( 
                          'numberposts' => 30, 
                          'post_type' => 'qas',   //投稿タイプの指定
                          'orderby' => 'desc',
                          );
                          $customPosts = get_posts($args);
                          if($customPosts) : foreach($customPosts as $post) : setup_postdata( $post ); ?>
                            <div class="posts col-xs-12 col-sm-6 col-md-4">
                              <div class="column-thumb">
                                <a href="<?php the_permalink() ;?>">
                                  <img class="img-responsive" src="<?php echo catch_that_image(); ?>">
                                </a>
                                <div class="column-tag bold">
                                <?php $terms = get_the_terms( $post->ID, 'column_cat' );
                                      foreach ( $terms as $term ) { 
                                      echo $term->name; }
                                ?>
                                </div>
                              </div>
                              <h3 class="black bold fs18 column-title"><?php the_title(); ?></h3>
                            </div>
                          <?php endforeach; ?>
                          <?php else : //記事が無い場合 ?>
                          <p>記事はまだありません。</p>
                          <?php endif; wp_reset_postdata(); //クエリのリセット ?>
                        </div>
                      </div>
                  </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>