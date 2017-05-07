<?php
//About Page Content
?>

<div class="container-fluid">
	<div class="row mb-5">
		<div class = "photoHeader col-sm-12">
			<img src = "<?php the_field('contact_photo_header', 'option'); ?>">
		</div>		
	</div><!-- .row -->
</div><!-- .container-fluid -->

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

	<div class="row mb-5">
		<div class = "col-sm-12 text-center">
			<div class = "horizontalSep"></div>
			<a href = "#" class = "mr-3">Homepage</a><a href = "#">About Us</a>
		</div>
	</div><!-- .row -->

</div><!-- .container -->