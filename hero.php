<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <h3 class="tagline"><?php bloginfo('description'); ?></h3>
              <h1 class="align-self-center display-1 text-center heading"><a href="<?php echo get_home_url(); ?>"><?php bloginfo('title'); ?></a></h1>
            </div>
            <div class="col-md-12">
              <div class="navigation">
                <?php 
                  /**
                  *Adding theme Top_menu
                  */
                  wp_nav_menu(array(
                    'menu'=>'Top_menu',
                    'menu_id'=>'Top_menu_container',
                    'menu_class'=>'list-inline text-center',
                  ));
                ?>
              </div>
            </div>
        </div>
    </div>
</div>