<?php get_header(); ?>
<body <?php body_class() ?>>
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
							<?php 
								if(current_theme_supports("custom-logo")):
							?>
								<div class="header-logo text-center">
									<?php the_custom_logo(); ?>
								</div>
							<?php endif; ?>
              <h3 class="tagline"><?php _e("It looks like nothing was found at this location. Maybe try a search?", "wpAlpha")?></h3>
              <h1 class="align-self-center display-2 text-center heading"><?php _e("404 Not Found!","wpAlpha"); ?></a></h1>
            </div>
            <div class="col-md-12">
						<div class="searchBar text-center">
							<?php 
								if (is_active_sidebar('sidebar_404')) {
									dynamic_sidebar('sidebar_404');
								}
							?>
						</div>
              <div class="navigation">
                <?php
                  /**
                   * Adding theme main_menu
                   */
                wp_nav_menu(
                    array(
                    'theme_location'=>'main_menu',
                    'menu_id'=>'main_menu_container',
                    'menu_class'=>'list-inline text-center',
                    )
                );
                ?>
              </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
