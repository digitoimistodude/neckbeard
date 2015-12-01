<?php
/**
 * Template functions used for pages.
 *
 * @package neckbeard
 */

if ( ! function_exists( 'neckbeard_page_header' ) ) {
	/**
	 * Display the post header with a link to the single post
	 * @since 1.0.0
	 */
	function neckbeard_page_header() {
		?>
		<header class="entry-header">
			<?php
			neckbeard_post_thumbnail( 'full' );
			the_title( '<h1 class="entry-title" itemprop="name">', '</h1>' );
			?>
		</header><!-- .entry-header -->
		<?php
	}
}

if ( ! function_exists( 'neckbeard_page_content' ) ) {
	/**
	 * Display the post content with a link to the single post
	 * @since 1.0.0
	 */
	function neckbeard_page_content() {
		?>
		<div class="entry-content" itemprop="mainContentOfPage">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'neckbeard' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
		<?php
	}
}