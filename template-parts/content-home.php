<?php
//Homepage Content
?>

<div class="container-fluid heroSection mb-5" style = "background-image: url('<?php the_field('homepage_hero_image', 'option'); ?>')">
	<div class="row">
		<div class = "col-sm-12 opacityLayer">
					<h2 class = "mb-5 text-center pl-5 pr-5 hpCTA"><?php the_field('homepage_call_to_action', 'option'); ?></h2>

					<div class = "hpButton text-center">
						<a href = "<?php the_field('hyperlink', 'option'); ?>"><button type="button" class="btn btn-primary btn-lg">Learn More</button></a>
				</div>
			</div><!-- #opacityLayer -->	
		</div><!-- .row -->
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