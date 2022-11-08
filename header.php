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
<meta name="description" content="Édisen est une maison d’édition à compte d'éditeur à Dijon et Bourg-en-Bresse.">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
<!-- Modifications childstorefront script-->
<script>
	function LogOut() {
		let popup = document.getElementsByClassName('popup')[0];
		document.getElementById('popup-logout').classList.toggle('display');
		popup.classList.toggle('display')[0];
}
</script>
<!-- Fin des modifications script-->
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>
<!-- Modifications childstorefront -->
<div class="popup">
	<div id="popup-logout">
		<p>Voulez-vous vraiment vous déconnecter ?</p>
		<div>
			<a href="<?php echo wp_logout_url( home_url() ); ?>">Se déconnecter</a>
			<a onclick="LogOut()">Annuler</a>
		</div>
	</div>
	<div class="popup-blur"></div>
</div>
<!-- Fin des modifications -->
<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">
	<?php do_action( 'storefront_before_header' ); ?>

	<header id="masthead" class="site-header" style="<?php storefront_header_styles(); ?>">
		<!-- Modifications childstorefront -->
		<nav>
			<div class="nav__logo">
        		<!-- <img onclick="location.href='<?php bloginfo('wpurl'); ?>';" src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2022/09/logo-edisen_couleur.jpg" alt="icone du site"> -->
				<a href="<?php bloginfo('wpurl'); ?>">
					<img src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2022/09/logo-edisen_couleur.jpg" alt="icone du site">
				</a>
				<!-- <span></span>
				<ul>
					<li>Dijon (21)</li>
					<li>Bourg-en-Bresse (01)</li>
				</ul> -->
    		</div>
			<?php wp_nav_menu(array('theme_location' => 'nav')); ?>
			<div class="header-account-basket">
				<div class="header-account">
					<ul>
					<?php
						if ( is_user_logged_in() ) { ?>
						<li>
							<a href="<?php bloginfo('wpurl'); ?>/mon-compte/">Mon compte</a>
						</li>
						<li>
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
								<li>
									<a onclick="LogOut()">Déconnexion</a>
								</li>
							</ul>
						</li>
						
					<?php } else {?>
						<li>
						<a href="<?php bloginfo('wpurl'); ?>/mon-compte/">Se connecter</a>
						</li>
					<?php } ?>
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
			<div class="nav__burger" id="burger">
				<div></div>
				<div></div>
				<div></div>
    		</div>
		</nav>
		<!-- Fin des modifications -->
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

		
