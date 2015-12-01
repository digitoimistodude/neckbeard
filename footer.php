<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package neckbeard
 */
?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'neckbeard_before_footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-full">

			<?php
			/**
			 * @hooked neckbeard_footer_widgets - 10
			 */
			do_action( 'neckbeard_footer' ); ?>

		</div><!-- .col-full -->
	</footer><!-- #colophon -->

	<?php do_action( 'neckbeard_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
