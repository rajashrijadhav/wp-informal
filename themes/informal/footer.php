<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

	<div class="footer-wrap">

		<footer id="colophon" class="site-footer">
			<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>
			<div class="move-top">
				<a href="#main" >
					&#8686;
				</a>
			</div>
				
			
			
			<div class="site-info">
				

				<?php
				if ( function_exists( 'the_privacy_policy_link' ) ) {
					the_privacy_policy_link( '<div class="privacy-policy">', '</div>' );
				}
				?>

				<div class="powered-by">
					<?php
					printf(
						/* translators: %s: WordPress. */
						esc_html__( 'Proudly powered by %s.', 'twentytwentyone' ),
						'<a href="' . esc_url( __( 'https://wordpress.org/', 'twentytwentyone' ) ) . '">WordPress</a>'
					);
					?>
				</div><!-- .powered-by -->

			</div><!-- .site-info -->
		</footer><!-- #colophon -->

</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
