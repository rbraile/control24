<?php
/**
 * template name: instaladores
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
    <div id="primary" class="content-area instaladores">
        <div id="content" class="site-content separador-rojo" role="main">

            <?php $the_query = new WP_Query( 'category_name=noticias' ); ?>
            <div id="slider-news">
                <div class="slider-content">
                <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                    <article class="content-news slider">
                        <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
                        <div class="contenido destacada clear">
                            <?php if ( has_post_thumbnail() && ! post_password_required() && ! is_attachment() ) : ?>
                            <div class="entry-thumbnail">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <?php endif; ?>
                            <div class="news">
                                <p><?php the_time('l, F j, Y'); ?></p>
                                <h2 clacontent-subcatss="entry-title">
                                    <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
                                </h2>
                                <div class="resumen">
                                    <p><?php echo the_excerpt (); ?></p>
                                </div>
                            </div>
                            <span class="box-color"></span>
                        </div>
                    </article><!-- #post -->
                <?php endwhile; ?>
                </div>
                <div class="nav-slider"><a class="prevn"><</a> <a class="nextn">></a></div>
            </div>
            <?php wp_reset_query(); ?>

            <?php
                // Start the Loop.
                while ( have_posts() ) : the_post();

                    // Include the page content template.
                    get_template_part( 'content', 'page' );

                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) {
                        comments_template();
                    }
                endwhile;
            ?>

        </div><!-- #content -->
        <aside>
            <?php echo do_shortcode( '[contentblock id=youtube-home]' );?>
            <a href="#">
                <img src="<?php echo get_bloginfo('template_url'); ?>/images/instaladores-big.jpg" />
            </a>
        </aside> 
    </div><!-- #primary -->
</div><!-- #main-content -->

<?php   
get_footer();
