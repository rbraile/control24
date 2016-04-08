<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo">
            <div class="f-left">
                <img src="<?php echo get_bloginfo('template_url'); ?>/images/data-fiscal.jpg" />
            </div>
            <div class="f-center">
                <img src="<?php echo get_bloginfo('template_url'); ?>/images/logo-footer.jpg" />
                <p>(342) 455 6565</p>
                <p>Hipolito Irigoyen 3554, Santa Fe</p>
                <p>Argentina</p>
            </div>
            <div class="f-right">
                <img src="<?php echo get_bloginfo('template_url'); ?>/images/logo-casel.jpg" />
                <p>SOCIO ACTIVO DE</p>
                <p>LA CAMARA ARGENTINA</p>
                <p>DE SEGURIDAD ELECTRONICA</p>
            </div>
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>