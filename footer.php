<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-full">
			<!-- Modifications childstorefront -->
			<div class="footer-infos-legals">
				<div class="site-footer-infos">
					<div class="footer-menu">
						<?php wp_nav_menu(array('theme_location' => 'nav')); ?>
					</div>
					<div class="footer-logo">
						<img onclick="location.href='<?php bloginfo('wpurl'); ?>';" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/childtheme/logo-edisen_white.svg" alt="icone du site">
					</div>
					<div class="footer-contact">
						<ul>
							<li class="list-type-place">
								Dijon (21)
								<ul>
									<li>20 rue de Montmuzard</li>
								</ul>
							</li>
							<li class="list-type-place">
								Bourg-en-Bresse (01)
								<ul>
									<li>3 bd John Kennedy</li>
								</ul>
							</li>
							<li class="contact-row">
								<img onclick="location.href='tel:0380423951'" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/childtheme/tel-icone.svg" alt="icone du site">
								<a href="tel:0380423951">03 80 42 39 51</a>
							</li>
							<li class="contact-row">
								<img onclick="location.href='mailto:contact@edisen.fr'" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/childtheme/mail-icone.svg" alt="icone mail">
								<a href="mailto:contact@edisen.fr">contact@edisen.fr</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="site-footer-legals">
					<ul>
						<li>
							<a href="#">Mentions légales</a>
						</li>
						<span></span>
						<li>
							<a href="#">Site réalisé par Yupanki</a>
						</li>
					</ul>
				</div>
			</div>
			<!-- Fin des modifications -->
			<?php
			/**
			 * Functions hooked in to storefront_footer action
			 *
			 * @hooked storefront_footer_widgets - 10
			 * @hooked storefront_credit         - 20
			 */
			do_action( 'storefront_footer' );
			?>

		</div><!-- .col-full -->
	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>
<!-- <script src="<?php bloginfo('template_directory'); ?>/assets/js/header.js"></script> -->
<!-- Modifications childstorefront script -->
<script>
const burger = document.getElementById('burger');
const inMenu = document.querySelector("nav ul.menu");
const navlanding = document.getElementsByClassName('menu-nav-container')[0]; // cible nav wp list
const menuburger = document.getElementsByClassName('nav__burger')[0];
let i = 0;

burger.addEventListener('click', function() {
    toogleMenu();
    crossMenu();
})
inMenu.addEventListener('click', function() { // si on clique sur le menu
    if (i != 0) {
        toogleMenu();
        crossMenu();
    }
})

function toogleMenu() {
    i++;
    navlanding.classList.toggle('menu-nav-container--show');
    if (i >= 2) {
        navlanding.classList.toggle('menu-nav-container--unshow');
    }
}
function crossMenu() {
    i++;
    menuburger.classList.toggle('nav__burger--cross');
    if (i >= 3) {
        menuburger.classList.toggle('nav__burger--burger');
    }
}
</script>
<!-- Fin des modifications script -->
</body>
</html>
