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

	<div class="row mb-3">
		<div class = "col-sm-6 offset-sm-3">
			<div class = "horizontalSep"></div>
		</div>
	</div>

	<div class="row mb-5">
		<div class = "col-md-3 offset-md-3 text-center mb-5">
			<?php if( get_field('about_blurb', 'option') ): ?>	
			<?php the_field('about_blurb', 'option'); ?>
			<?php endif; ?>

			<a href = "<?php echo bloginfo('url'); ?>/about" class = "btn btn-primary btn-large text-center">About Us</a>
		</div>

		<div class = "col-md-3 text-center">
			<?php if( get_field('contact_blurb', 'option') ): ?>	
			<?php the_field('contact_blurb', 'option'); ?>
			<?php endif; ?>

			<a href = "<?php echo bloginfo('url'); ?>/contact" class = "btn btn-primary btn-large text-center secondBtn">Contact Us</a>
		</div>
	</div><!-- .row -->

</div><!-- .container -->