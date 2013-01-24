<?php
/**
 * @package Portraiture
 * @since Portraiture 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'portraiture' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

		<div class="entry-meta">
			<?php portraiture_posted_on(); ?> |
			<?php edit_post_link( __( 'Edit', 'portraiture' ), '<span class="edit-link">', '</span>' ); ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$category_list = get_the_category_list( __( ', ', 'portraiture' ) );

				/* translators: used between list items, there is a space after the comma */
				$tag_list = get_the_tag_list( '', __( ', ', 'portraiture' ) );

				if ($tag_list) {
					/* translators: there is a space after the colon */
					echo "| ".__('Tags : ', 'portraiture').$taglist;
				}
				
				if ($category_list) {
					/* translators: there is a space after the colon */
					echo "| ".__('Filed in : ', 'portraiture').$category_list;
				}
			?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'portraiture' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
