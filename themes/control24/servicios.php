<?php
/**
 * template name: Servicios
 * The template for displaying all pages
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
    if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
        // Include the featured content template.
        get_template_part( 'featured-content' );
    }
?>
    <div id="primary" class="content-area servicios">
        <div id="content" class="site-content separador-rojo" role="main">
            <h1 class="texto-rojo">Servicios</h1>
            <p class="leyenda">En esta sección encontrará toda la inforación detallada sobre cada uno de nuestros servicios .</p>
            <div class="lista-servicios">
                <?php $the_query = new WP_Query( 'category_name=servicios' ); ?>
                <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                    <article class="servicios">
                        <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
                            <?php if ( has_post_thumbnail() && ! post_password_required() && ! is_attachment() ) : ?>
                            <div class="entry-thumbnail">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <?php endif; ?>
                            <div class="news">
                                <h2 class="content-subcat entry-title">
                                    <a href="<?php the_permalink();?>" rel="bookmark"><?php the_title(); ?></a>
                                </h2>
                                <div class="resumen">
                                    <?php echo the_excerpt(); ?>
                                    <a href="<?php the_permalink();?>">Leer mas...</a>
                                </div>
                            </div>
                    </article><!-- #post -->
                <?php endwhile; ?>
            </div>
            <?php wp_reset_query(); ?>
        </div><!-- #content -->
        <aside>
            <a class="demo-link" href="/demo">
                <img src="<?php echo get_bloginfo('template_url'); ?>/images/btn-demo.jpg" />
            </a>
            <?php echo do_shortcode( '[contentblock id=youtube-home]' );?>
        </aside> 
    </div><!-- #primary -->
</div><!-- #main-content -->

<?php   
get_footer();
