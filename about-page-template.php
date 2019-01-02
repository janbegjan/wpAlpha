<?php
/*
* Template Name: About Page Template
*/
?>
<?php get_header(); ?>
<body <?php body_class() ?>>
<?php get_template_part("hero-page"); ?>
		<div class="posts">
			<?php
				while ( have_posts() ) :
					the_post();
			?>
			<div class="post">
				<div class="container">
					<div class="row">
						<div class="col-md-10 offset-md-1">
							<h2 class="post-title text-center"><?php the_title(); ?></h2>
							<p class='text-center'>
								<strong><?php the_author(); ?></strong><br/>
								<?php echo get_the_date(); ?>
							</p>
							<p>
								<?php
								if (get_the_tag_list() ) {
									echo get_the_tag_list('<ul class="list-unstyled"><li>', '</li><li>', '</li></ul>');
								}
								?>
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-10 offset-md-1">
							<p>
								<?php
									$thumbnail_url = get_the_post_thumbnail_url(null, 'large');
									if(has_post_thumbnail() ) {
										printf('<a href="%s" data-featherlight="image">', $thumbnail_url);
										the_post_thumbnail('large', 'class=img-fluid');
										echo '</a>';
									}
								?>
							</p>
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
		</div>

<?php get_footer(); ?>
