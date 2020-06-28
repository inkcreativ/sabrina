<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>


<aside class="subfooter bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-12">
				<div>
				<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>&nbsp;&nbsp;
				<span class="date">©&nbsp<?php echo date('Y');?></span>
				</div>
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'footer-menu',
					)
				); ?>
				<?php get_template_part( 'loop-templates/made' ); ?>
				
            </div>
        </div>
</aside>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>