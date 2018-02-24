<?php get_header(); ?>
	<main>
			<div class='left'>

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<article class="post post-listing">
		                <ul class="post-meta no-bullet">
		                  <li class="author"> By <?php the_author_posts_link(); ?> |</li>
		                  <li class="cat"><?php the_category(', '); ?> |</li>
		                  <li class="date"><?php the_time('F j, Y'); ?></li>
		                </ul>
	                	<h1><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h1>
										<div class="post-listing-grid">
										<?php the_post_thumbnail( array( 'class' => 'thumbnail-left' )) ?>
		                <p><?php echo strip_tags( get_the_excerpt() ); ?> </p>
		                </div>
										<a href="<?php the_permalink(); ?>"><button> Read More</button></a>

					</article>
					<?php endwhile; else : ?>
						<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        	<?php endif; ?>
		</div>

	<?php get_sidebar('right'); ?>

	</main>

<?php get_footer(); ?>
