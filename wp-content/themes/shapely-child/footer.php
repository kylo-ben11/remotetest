<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shapely
 */

?>

</div><!-- #main -->
</section><!-- section -->

<div class="footer-callout">
	<?php shapely_footer_callout(); ?>
</div>

<footer id="colophon" class="site-footer footer bg-dark" role="contentinfo">
	<div class="container footer-inner">
		<div class="row">
			<?php get_sidebar( 'footer' ); ?>
		</div>

		<div class="row">
			<div class="site-info col-sm-6">
				<div class="copyright-text">
					<?php echo wp_kses_post( get_theme_mod( 'shapely_footer_copyright' ) ); ?>
				</div>
				<div class="footer-credits">
					<p> &copy; <?= date("Y");?> Code Creative Web Development</p>
				</div>
			</div><!-- .site-info -->
			<div class="col-sm-6 text-right">
				<a href="https://www.linkedin.com/in/benjamin-knier" target="_blank"><i class="fa fa-linkedin-square fa-2x animated jello eds-on-hover"></i></a>
			</div>
		</div>
	</div>

	<a class="btn btn-sm fade-half back-to-top inner-link" href="#top"><i class="fa fa-angle-up"></i></a>
</footer><!-- #colophon -->
</div>
</div><!-- #page -->
<script src="<?php echo home_url('/wp-content/themes/shapely-child/animateIT.js');?>"></script>

<?php wp_footer(); ?>

</body>
</html>
