<?php
$page_thumbnail_url = get_the_post_thumbnail_url(null, "large");
?>

<div class="header page-header" style="background-image: url( <?php echo $page_thumbnail_url ?>);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <h3 class="tagline"><?php bloginfo('description'); ?></h3>
              <h1 class="align-self-center display-1 text-center heading"><a href="<?php echo get_home_url(); ?>"><?php bloginfo('title'); ?></a></h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
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
