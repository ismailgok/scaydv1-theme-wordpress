<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header"><center>
					<h1 class="page-title"><?php _e( 'Yavaþ ol dostum aradýðýn kelimeyle ilgili birþey bulamadýk..', 'twentyfifteen' ); ?></h1>
				</header><!-- .page-header -->

				<div style="margin:0 auto;" class="page-content">
					<p><?php _e( 'Ýstersen arama kutusunu kullanarak aradýðýn þeyi daha kolay bulabilirsin.', 'twentyfifteen' ); ?></p>

					<?php get_search_form(); ?></center>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
