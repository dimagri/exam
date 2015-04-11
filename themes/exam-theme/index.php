
<?php get_header(); ?>

	<main class="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<a href="<?php the_permalink(); ?>" ><?php the_post_thumbnail(); ?></a>
				<div class="post-content">
					<h2 class="entry-title"><a title="<?php printf( esc_attr__( '%s', 'striped' ), the_title_attribute( 'echo=0' ) ); ?>" href="<?php the_permalink(); ?>" rel="bookmark">
					<?php the_title(); ?>
					</a></h2>
					
					<?php the_content(); ?>
					<span class="like" >3</span>
					
					<ul class="post-info" >
						<li class="author" >by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a>/</li>
						<li class="comments-amount" ><?php comments_number('no comments', '1 comment', '% comments'); ?> /</li>
						<li class="date"><?php the_date( 'j F Y' ); ?></li>
					</ul>
				</div>
			</article>
			
			<?php if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
			?>
		<?php endwhile; ?>
		
		<div class="pagination">
			<?php echo paginate_links(array('prev_text' => 'Previous','next_text' => 'Next')); ?>
		</div>
	</main>
	
	<?php get_sidebar(); ?>
	
	<?php get_footer(); ?>
