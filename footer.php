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

	<footer id="colophon" class="site-footer">
		<div class="col-full">
			<!-- Modifications childstorefront -->
				<div class="promo-footer">
					<p>Un projet d'édition de livre ? <br class="br1">Retrouvez notre maison d'édition en Bourgogne Franche-Comté (Dijon) <br class="br2">et en Auvergne Rhône-Alpes (Bourg-en-Bresse) !</p>
				</div>
			<div class="footer-infos-legals">
				<div class="site-footer-infos">
					<div class="footer-contact">
						<ul>
							<li class="list-type-place">
								Bourgogne Franche-Comté
								<ul>
									<li>Edisen Dijon</li>
									<li>20 rue de Montmuzard</li>
								</ul>
							</li>
							<li class="list-type-place">
								Auvergne-Rhône-Alpes
								<ul>
									<li>Edisen Bourg-en-Bresse</li>
									<li>3 bd John Kennedy</li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="footer-logo">
						<img onclick="location.href='<?php bloginfo('wpurl'); ?>';" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/childtheme/logo-edisen_white.svg" alt="icone du site">
					</div>
					<div class="footer-time">
						<ul>
							<li>Horaires</li>
							<li>Du lundi au vendredi</li>
							<li>9h-12h / 13h30-17h30</li>
						</ul>
						<ul>
							<li class="contact-row">
								<img onclick="location.href='tel:0380423951'" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/childtheme/tel-icone.svg" alt="icone téléphone">
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
					<div class="footer-menu">
						<?php wp_nav_menu(array('menu' => 'menu-footer')); ?>
					</div>
				</div>
			</div>
			<!-- Fin des modifications -->
			<?php
			do_action( 'storefront_footer' );
			?>

		</div><!-- .col-full -->
	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php
wp_footer();
?>

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
