<?php
/**
 * The template for displaying search results pages.
 *
 * @package neckbeard
 */

get_header(); ?>

<div id="content" class="site-content" tabindex="-1">
	<div class="col-full">

		<section id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'neckbeard' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header><!-- .page-header -->

				<?php get_template_part( 'loop' ); ?>

			<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>

			<?php endif; ?>

			</main><!-- #main -->
		</section><!-- #primary -->

	</div><!-- .col-full -->
</div><!-- #content -->

<?php get_footer(); ?>
