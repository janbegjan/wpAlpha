<?php get_header(); ?>
<body <?php body_class(); ?>>
<?php get_template_part('/template-parts/common/hero'); ?>
<div class="single-post row">
	<div class="col-md-8">
		<div class="posts">
			<?php
				while ( have_posts()) :
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
								if (get_the_tag_list()) {
										echo get_the_tag_list('<ul class="list-unstyled"><li>', '</li><li>', '</li></ul>');
								}
								?>
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<p>
								<?php 
									//method 1
									// $thumbnail_url = get_the_post_thumbnail_url(null, 'large');
									// if(has_post_thumbnail() ) {
									// 	// echo '<a href="'.$thumbnail_url.'" data-featherlight="image">';
									// 	printf('<a href="%s" data-featherlight="image">', $thumbnail_url);
									// 	the_post_thumbnail('large', 'class=img-fluid');
									// 	echo '</a>';
									// }
									//method 2 (jQuery 3.22)
										if(has_post_thumbnail()){
											echo '<a href ="#" data-featherlight="image" class="popup">';
											the_post_thumbnail('large', 'class=img-fluid');
											echo '</a>';
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
							if(comments_open()) :
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
			if (is_active_sidebar('sidebar_right')) {
				dynamic_sidebar('sidebar_right');
			}
    ?>
  </div>
</div>
<?php get_footer(); ?>
