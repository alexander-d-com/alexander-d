<?php get_header(); ?>

<?php
// Start the loop.
while ( have_posts() ) : the_post();

	// Include the single post content template.
	get_template_part( 'template-parts/content', 'single' );

	// End of the loop.
endwhile;
?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
