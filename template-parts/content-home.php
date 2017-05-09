<?php
//Homepage Content
?>

<div class="container-fluid heroSection mb-5" style = "background-image: url('<?php the_field('homepage_hero_image', 'option'); ?>')">
	<div id = "opacityLayer">
		<div class="row">
			<div id = "hpCTA" class = "col-sm-12 text-center mt-5 mb-5">
				<h1><?php the_field('homepage_call_to_action', 'option'); ?></h1>
			</div>		
		</div><!-- .row -->
	</div><!-- #opacityLayer -->
</div><!-- .container-fluid -->

<div class="container">

	<div class="row mb-5">
		<div class = "col-md-6">
			<?php the_field('content_text', 'option'); ?>
		</div>
			
		<div class = "col-md-6">
			<img src = "<?php the_field('content_image', 'option'); ?>">
		</div>	
	</div><!-- .row -->

	<div class="row mb-5">
		<div class = "col-sm-12 text-center">
			<div class = "horizontalSep"></div>
			<a href = "<?php echo bloginfo('url'); ?>/about" class = "mr-3">About Us</a><a href = "<?php echo bloginfo('url'); ?>/contact">Contact Us</a>
		</div>
	</div><!-- .row -->

</div><!-- .container -->