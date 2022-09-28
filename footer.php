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
</body>
</html>
