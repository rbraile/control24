<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content separador-rojo" role="main">
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content-single', get_post_format() );

					// Previous/next post navigation.
					
				endwhile;
			?>
		</div><!-- #content -->
        <aside>
         
          <?php if ( is_active_sidebar( 'servicios' ) ) : ?>
                <div class="menu-servicios-content clearfix">
                    <ul id="menu-servicios" class="nav-menu">
                    <?php $the_query = new WP_Query( 'category_name=servicios' ); ?>
                    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                        <?php $actual = str_replace("/", "", $_SERVER["REQUEST_URI"]);?>
                        <?php if( $actual != get_post_field( 'post_name', get_post()) ):?>
                        <li class="menu-item">
                            <a href="<?php the_permalink(); ?>" rel="bookmark">
                                <?php the_post_thumbnail(); ?>
                                <span><?php the_title(); ?></span>
                            </a>
                        </li><!-- #post -->
                    <?php endif;?>
                    <?php endwhile; ?>
                    </ul>
                </div><!-- #tertiary -->
          <?php endif; ?>
        </aside> 
	</div><!-- #primary -->

<?php
get_footer();
