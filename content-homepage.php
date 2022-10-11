<?php
/**
 * The template used for displaying page content in template-homepage.php
 *
 * @package storefront
 */

?>
<?php
$featured_image = get_the_post_thumbnail_url( get_the_ID(), 'thumbnail' );
?>

<!-- <div id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="<?php storefront_homepage_content_styles(); ?>" data-featured-image="<?php echo esc_url( $featured_image ); ?>"> -->
	<div class="col-full">
		<!-- <?php do_action( 'storefront_homepage' ); ?> -->
		<!-- Modifications childstorefront -->

		<!-- Fin modifications -->
		
	</div>
<!-- </div> -->
<!-- #post-## -->
