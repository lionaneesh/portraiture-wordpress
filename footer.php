<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Portraiture
 * @since Portraiture 1.0
 */
?>

	</div><!-- #page -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'portraiture_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'portraiture' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'portraiture' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'portraiture' ), 'Portraiture', '<a href="http://anee.me/" rel="designer">Aneesh Dogra</a> | Designed by <a href="http://www.freecsstemplates.org/preview/portraiture/">FCT</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon .site-footer -->
	</div> <!-- #wrapper -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

</body>
</html>