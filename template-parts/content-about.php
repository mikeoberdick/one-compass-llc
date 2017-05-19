<?php
//About Page Content
?>

<?php if( get_field('about_photo_header', 'option') ): ?>
	<div class="container-fluid">
	<div class="row mb-5">
		<div class = "photoHeader col-sm-12">
			<img src = "<?php the_field('about_photo_header', 'option'); ?>">
		</div>		
	</div><!-- .row -->
</div><!-- .container-fluid -->
<?php endif; ?>

<div class="container">
	<header class="entry-header">
		<?php the_title( '<h1>', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class = "row mb-3">
		<div class = "col-sm-12">
			<p><?php the_field('about_content', 'option'); ?></p>
		</div>
	</div>

<div class = "horizontalSep mb-5"></div>

<?php if( have_rows('person', 'option') ): ?>
<?php while( have_rows('person', 'option') ): the_row(); ?>

	<div class="row mb-5">
		<div class = "col-md-9">

			<h3 class = "mb-3"><?php the_sub_field('title'); ?></h3>
			<?php the_sub_field('text'); ?>
		</div>
			
		<div class = "col-md-3">
			<img src = "<?php the_sub_field('photo'); ?>">
		</div>	
	</div><!-- .row -->

<?php endwhile; ?>
<?php endif; ?>

	<div class="row mb-5">
		<div class = "col-sm-12 text-center">
			<div class = "horizontalSep"></div>
			<a href = "<?php echo bloginfo('url'); ?>" class = "mr-3">Homepage</a><a href = "<?php echo bloginfo('url'); ?>/contact">Contact Us</a>
		</div>
	</div><!-- .row -->

</div><!-- .container -->