<?php
/**
 * template name: home-page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main-content" class="main-content">

<?php 
    echo do_shortcode("[metaslider id=6]"); 
?>

<?php
	if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
?>
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
            <article class="content-home separador-rojo">
                <header>
                    <h1>Nuestra empresa</h1>
                </header>
                <p>
                    Control 24 no es sólo les brinda una solución de Monitoreo de Alarmas para Instaladores,
                    sino también una solución para permitirlees acceder al sistema de la Estación Central por 
                    internet y realizar por si mismo el proceso de alta baja y edición de cuentas propias
                    internet y realizar por si mismo el proceso de alta baja y edición de cuentas propias
                    internet y realizar por si mismo el proceso de alta baja y edición de cuentas propias
                </p>
                    <?php dynamic_sidebar( 'servicios-destacados' ); ?>
            </article> 
                
            </div>
            <aside>
                <?php echo do_shortcode( '[contentblock id=youtube-home]' );?>
                <a href="/instaladores">
                    <img src="<?php echo get_bloginfo('template_url'); ?>/images/instaladores-big.jpg" />
                </a>
            </aside> 
        </div><!-- #content -->        
    </div><!-- #primary -->

<?php
get_footer();?>
</div><!-- #main-content -->
