<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package neckbeard
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	/**
	 * @hooked neckbeard_page_header - 10
	 * @hooked neckbeard_page_content - 20
	 */
	do_action( 'neckbeard_page' );
	?>
</article><!-- #post-## -->
