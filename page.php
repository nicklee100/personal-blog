<!--
  TODO:  change this so it is not being styled with posts, shoudl not look like a blog should be more simple
page template
-->


<?php get_header(); ?>
			<main>

				<div class='left'>
				<?php  if( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<div class="post">
						<h2><?php the_title()?></h2>
						<?php the_post_thumbnail() ?>
						<p><?php the_content() ?></p>
					</div>

				<?php endwhile; else : ?>
					<p><?php _e('Sorry, no Pages found.'); ?> </p>
				<?php endif; ?>
				</div>

			</main>
<?php get_footer();?>
