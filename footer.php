<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Undergrad
 */

?>
			</div><!-- #content -->
				<footer id="colophon" class="site-footer" role="contentinfo">
					<div class="site-info">
						<?php if( get_theme_mod( 'show_wp_footer_text' ) == '1' ){ ?>
						<?php printf( esc_html__( 'Proudly powered by %s', 'Undergrad' ), '<a href="http://wordpress.org" rel="bookmark">WordPress</a>' ); ?>
							<span class="sep"> | </span>
								<?php } ?>
								<?php if( get_theme_mod( 'show_footer_text' ) == '1' ){echo get_theme_mod( 'footer_text_textbox', 'No footer text added as yet.' );}?>
								<?php if( get_theme_mod( 'show_footer_project_text' ) == '1' ){ ?>
							<span class="sep"> | </span>
							<?php printf( esc_html__( 'Find %1$s on Github!', 'Undergrad' ), '<a href="https://github.com/Burnsyy/undergrad" rel="github">Undergrad</a>'); ?>
						<?php } ?>
					</div><!-- .site-info -->
				</footer><!-- #colophon -->
			</div><!-- #page -->
		<?php wp_footer(); ?>
	</body>
</html>
