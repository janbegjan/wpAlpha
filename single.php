<?php get_header(); ?>
<div class="posts">
  <?php
    while(have_posts()):
      the_post();
  ?>

    <div class="post">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <h2 class="post-title text-center"><?php the_title(); ?></h2>
                    <p class="text-center">
                        <strong><?php the_author(); ?></strong><br/>
                       <?php echo get_the_date(); ?>
                    </p>
                    <div class="text-center">
                      
                      <?php  
                        if(get_the_tag_list()) {
                            echo get_the_tag_list('<ul class="list-unstyled"><li>','</li><li>','</li></ul>');
                        }
                        ?>
                  </div>
                </div>
            </div>
            <div class="row">
                
                <div class="col-md-10 offset-md-1">
                  
                    <p>
                      <?php 
                        if(has_post_thumbnail() ){
                          the_post_thumbnail( 'large', 'class=img-fluid' );
                        }
                      ?>
                    </p>
                    <?php the_content(); ?>
                  
                </div>
                <?php 
                  if(comments_open()):
                ?>
                <div class="comments_form">
                  <?php comments_template(); ?>
                </div>
                <?php endif; ?>
            </div>

        </div>
    </div>
  <?php endwhile; ?>
  
</div>
<?php get_footer(); ?>