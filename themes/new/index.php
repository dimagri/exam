
<?php get_header(); ?>

	<main class="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<h2 class="entry-title"><a title="<?php printf( esc_attr__( 'Permalink to %s', 'striped' ), the_title_attribute( 'echo=0' ) ); ?>" href="<?php the_permalink(); ?>" rel="bookmark">
				<?php the_title(); ?>
				</a></h2>
				<?php the_meta(); ?>
				<span class="date"><?php the_date( 'j F Y' ); ?></span>
				<?php the_content(); ?>
			</article>
			
			<?php if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
			?>
		<?php endwhile; ?>
	</main>
	<aside class="sidebar">
	
		<?php if ( is_active_sidebar( 'true_side' ) ) : ?>

				<?php dynamic_sidebar( 'true_side' ); ?>

		<?php endif; ?>
		
		<div class="search-box">
			
		</div>
	</aside>
	
	<footer class="footer">
		<ul class="social">
			<li><a href=""></a></li>
			<li><a href=""></a></li>
			<li><a href=""></a></li>
		</ul>
	</footer>
</html>
