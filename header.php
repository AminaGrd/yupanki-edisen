<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">
	<?php do_action( 'storefront_before_header' ); ?>

	<header id="masthead" class="site-header" role="banner" style="<?php storefront_header_styles(); ?>">
		<!-- /**
		 * Functions hooked into storefront_header action
		 *
		 * @hooked storefront_header_container                 - 0
		 * @hooked storefront_skip_links                       - 5
		 * @hooked storefront_social_icons                     - 10
		 * @hooked storefront_site_branding                    - 20
		 * @hooked storefront_secondary_navigation             - 30
		 * @hooked storefront_product_search                   - 40
		 * @hooked storefront_header_container_close           - 41
		 * @hooked storefront_primary_navigation_wrapper       - 42
		 * @hooked storefront_primary_navigation               - 50
		 * @hooked storefront_header_cart                      - 60
		 * @hooked storefront_primary_navigation_wrapper_close - 68
		 */
		// do_action( 'storefront_header' ); -->
		<div class="header-nav">
			<div class="nav__logo">
        		<img onclick="location.href='<?php bloginfo('wpurl'); ?>';" src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2022/09/logo-edisen_couleur.jpg" alt="icone du site">
    		</div>
			<?php wp_nav_menu(array('theme_location' => 'nav')); ?>
			<div class="header-account-basket">
				<div class="header-account">
					<ul>
						<li>
							<a href="<?php bloginfo('wpurl'); ?>/mon-compte/">Mon compte</a>
						</li>
						<ul class="sub-menu">
							<li>
								<a href="<?php bloginfo('wpurl'); ?>/mon-compte/orders/">Mes commandes</a>
							</li>
							<li>
								<a href="<?php bloginfo('wpurl'); ?>/mon-compte/edit-address/">Mes adresses</a>
							</li>
							<li>
								<a href="<?php bloginfo('wpurl'); ?>/mon-compte/edit-account/">Détails de mon compte</a>
							</li>
						</ul>
					</ul>		
				</div>
				<div class="header-price">
					<ul id="site-header-cart" class="site-header-cart menu">
						<li class="header-cart__price">
							<a class="cart-contents" href="http://localhost/edisen/panier/" title="Afficher votre panier">
								<span class="woocommerce-Price-amount amount">0,00&nbsp;<span class="woocommerce-Price-currencySymbol">€</span></span> <span class="count">0 article</span>
							</a>
						</li>
						<li>
							<div class="widget woocommerce widget_shopping_cart">
								<div class="widget_shopping_cart_content">
									<p class="woocommerce-mini-cart__empty-message">Votre panier est vide.</p>
								</div>
							</div>			
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="storefront_header_wp">
			<?php
			do_action( 'storefront_header' );
			?>
		</div>
	</header><!-- #masthead -->

	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 * @hooked woocommerce_breadcrumb - 10
	 */
	do_action( 'storefront_before_content' );
	?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">
			

		<?php
		do_action( 'storefront_content_top' );
