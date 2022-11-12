<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PMM
 */

?>

	<footer id="colophon" class="bg-bg-color">
		<div class="py-24 px-24 border-t-2 border-slate-500 flex justify-center text-slate-200">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'pmm' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'pmm' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'pmm' ), 'pmm', '<a href="https://mtg.com.mm">PMM</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
