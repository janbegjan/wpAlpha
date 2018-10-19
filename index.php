<?php get_header(); ?>
<div class="posts">
  <?php
    while(have_posts()):
      the_post();
  ?>

    <div class="post">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p>
                        <strong><?php the_author(); ?></strong><br/>
                       <?php echo get_the_date(); ?>
                    </p>
                    <?php  
                      if(get_the_tag_list()) {
                          echo get_the_tag_list('<ul class="list-unstyled"><li>','</li><li>','</li></ul>');
                      }
                      ?>
                </div>
                <div class="col-md-8">
                    <p>
                      <?php 
                        if(has_post_thumbnail() ){
                          the_post_thumbnail( 'large', 'class=img-fluid' );
                        }
                      ?>
                    </p>
                    <?php the_excerpt(); ?>
                  
                </div>
            </div>

        </div>
    </div>
  <?php endwhile; ?>
  <div class="row">
    <div class="col-md-4"></div>
      <div class="col-md-8">
        <div class="pagination">
          <?php 
            the_posts_pagination( array(
            'mid_size' => 2,
            'screen_reader_text' => ' ',
            'prev_text' => __( 'Newer', 'wptextual' ),
            'next_text' => __( 'Older', 'wptextual' ),
          )); ?> 
        </div>
      </div>
  </div>
  
</div>
<?php get_footer(); ?>