<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Undergrad
 */

?>
<?php global $first_post; ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

		<?php
		if ( has_post_thumbnail() ) { ?>
			<figure class="featured-image">
				<?php if ( $first_post == true ) { ?>
					<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
						<?php the_post_thumbnail(); ?>
					</a>
				<?php } else {
					the_post_thumbnail();
				}
				?>
			</figure>
		<?php }
		?>

		<?php
			if ( $first_post == true ) {
				the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			} else {
				the_title( '<h1 class="entry-title">', '</h1>' );
			}

		?>

		<?php
		if ( has_excerpt( $post->ID ) ) {
			echo '<div class="deck">';
			echo '<p>' . get_the_excerpt() . '</p>';
			echo '</div><!-- .deck -->';
		}
		?>

		<div class="entry-meta">
			<?php Undergrad_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'Undergrad' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php Undergrad_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
