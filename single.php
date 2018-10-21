<?php get_header(); ?>
<div class="single-post row">
  <div class="col-md-8">
    <div class="posts">
      <?php
        while(have_posts()):
          the_post();
      ?>
      <div class="post">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="post-title"><?php the_title(); ?></h2>
              <p>
                <strong><?php the_author(); ?></strong><br/>
                <?php echo get_the_date(); ?>
              </p>
              <p>
                <?php  
                  if(get_the_tag_list()) {
                      echo get_the_tag_list('<ul class="list-unstyled"><li>','</li><li>','</li></ul>');
                  }
                ?>
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <p>
                <?php 
                  if(has_post_thumbnail() ){
                    the_post_thumbnail( 'large', 'class=img-fluid' );
                  }
                ?>
              </p>
              <?php the_content(); ?>
                    
            </div>
            <div class="col-md-12">
              <span class="text-left"><?php next_post_link(); ?>
              <span class="text-right"><?php previous_post_link(); ?></span> 
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
  </div>
  <div class="col-md-4">
    <?php 
      if(is_active_sidebar( 'sidebar_right' )){
        dynamic_sidebar( 'sidebar_right' );
      }
    ?>
  </div>
</div>
<?php get_footer(); ?>