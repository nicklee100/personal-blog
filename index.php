
<?php get_header(); ?>

	<main>

		<div class='left'>
			<?php  if( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<div class="post">
					<h2><?php the_title() ?></h2>
				    <?php echo $post->post_content; ?>
				</div>

			<?php endwhile; else : ?>
				<p><?php _e('Sorry, no posts are found'); ?> </p>
			<?php endif; ?>
		</div>

	</main>
<?php get_footer();?>
