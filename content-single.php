<?php
/**
 * @package neckbeard
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope="" itemtype="http://schema.org/BlogPosting">

	<?php
	/**
	 * @hooked neckbeard_post_header - 10
	 * @hooked neckbeard_post_meta - 20
	 * @hooked neckbeard_post_content - 30
	 */
	do_action( 'neckbeard_single_post' );
	?>

</article><!-- #post-## -->
