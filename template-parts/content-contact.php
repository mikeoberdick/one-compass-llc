<?php
//Contact Page Content
?>

<?php if( get_field('contact_photo_header', 'option') ): ?>
	<div class="container">
	<div class="row mb-5">
		<div class = "photoHeader col-sm-12">
			<img src = "<?php the_field('contact_photo_header', 'option'); ?>">
		</div>		
	</div><!-- .row -->
</div><!-- .container -->
<?php endif; ?>

<div class="container">
	<header class="entry-header">
		<?php the_title( '<h1>', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="row mb-5">
		<div class = "col-md-6">
			<?php if( have_rows('left_content', 'option') ): ?>
			<?php while( have_rows('left_content', 'option') ): the_row(); ?>
				<img class = "mb-3" src = "<?php the_sub_field('image'); ?>">
				<h3 class = "mb-3"><?php the_sub_field('title'); ?></h3>
				<?php the_sub_field('text'); ?>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>

		<div class = "col-md-6">
			<?php if( have_rows('right_content', 'option') ): ?>
			<?php while( have_rows('right_content', 'option') ): the_row(); ?>
				<img class = "mb-3" src = "<?php the_sub_field('image'); ?>">
				<h3 class = "mb-3"><?php the_sub_field('title'); ?></h3>
				<?php the_sub_field('text'); ?>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>

	</div><!-- .row -->

	<div class = "row mb-3">
		<div class = "col-sm-12">
			<p><?php the_field('contact_content', 'option'); ?></p>
		</div>
	</div>

	<div class="row mb-3">
		<div class = "col-sm-6 offset-sm-3">
			<div class = "horizontalSep"></div>
		</div>
	</div>

	<div class="row">
		<div class = "col-md-3 offset-md-3 text-center mb-5">
			<?php if( get_field('homepage_blurb', 'option') ): ?>	
			<?php the_field('homepage_blurb', 'option'); ?>
			<?php endif; ?>
			
			<a href = "<?php echo bloginfo('url'); ?>" class = "btn btn-primary btn-large">Homepage</a>
		</div>

		<div class = "col-md-3 text-center">
			<?php if( get_field('about_blurb', 'option') ): ?>	
			<?php the_field('about_blurb', 'option'); ?>
			<?php endif; ?>

			<a href = "<?php echo bloginfo('url'); ?>/about" class = "btn btn-primary btn-large text-center secondBtn">About Us</a>
		</div>
	</div><!-- .row -->

</div><!-- .container -->
