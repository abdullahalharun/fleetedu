<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post();  
	get_template_part( 'content-course', get_post_format() );

	?>
	<?php endwhile;  ?>

<?php get_footer(); ?>