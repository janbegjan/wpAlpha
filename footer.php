	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<?php
						if (is_active_sidebar('footer_left') ) {
							dynamic_sidebar('footer_left');
						}
					?>
				</div>
				<div class="col-md-6">
					<?php
						if (is_active_sidebar('footer_right') ) {
							dynamic_sidebar('footer_right');
						}
					?>
					<?php
					/**
					 * Adding theme footermenu
					 */
					wp_nav_menu(
							array(
							'theme_location' => 'footermenu',
							'menu_id' => 'footermenu_container',
							'menu_class' => 'list-inline text-center',
							)
					);
					?>
				</div>
			</div>
		</div>
	</div>
  <?php wp_footer(); ?>
</body>
</html>
