<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="error-404 not-found">
				<div class="page-content">
					<div class="error-404__float">
						<div class="text-404">
							<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'storefront' ); ?></h1>
							<p><?php esc_html_e( 'Rien n&rsquo;est disponible ici.', 'storefront' ); ?></p>
							<a href="<?php bloginfo('wpurl'); ?>/boutique/" class="return-shop">Retour dans la boutique</a>
						</div>
						<div class="blur-404"></div>
					</div>
					<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/childtheme/error-404.jpg" alt="illustration error 404">
				</div><!-- .page-content -->
			</div><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
