<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_active_sidebar( 'footer_1') || is_active_sidebar( 'footer_2') || is_active_sidebar( 'footer_3') || is_active_sidebar( 'footer_4') ) { ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_html( $container ); ?>">

	<div id = "footerWidgets" class = "row">

		<div class = "col-lg-6 col-sm-12">
			<?php dynamic_sidebar('footer_1'); ?>
		</div>
		
		<div class = "col-lg-6 col-sm-12">
			<?php dynamic_sidebar('footer_2'); ?>
		</div>

	</div><!-- #footerWidgets -->

	</div><!-- .container -->

</div><!-- wrapper end -->

	<?php } ?>

	<div id = "bottomFooter" class = "container">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="row site-info ftrLeft">
						<div class ="col-sm-6">
							<span>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></span><br />
							<p>Follow Us On <a href = "#"><i class="fa fa-facebook" aria-hidden="true"></i></a></p>
						</div>
						
						<div class = "col-sm-6 ftrRight">
							<span>Website by <a href = "http://www.designs4theweb.com">Designs 4 The Web</a></span>
						</div>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- .container -->

</div><!-- #page-wrapper -->

<?php wp_footer(); ?>

<script>
jQuery('button').on('click', function(){
  jQuery('body').toggleClass('open');
});
</script>

</body>

</html>
