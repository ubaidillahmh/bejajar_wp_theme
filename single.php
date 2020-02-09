<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Testing
 */

get_header();
?>

    <div class="col-sm-8 blog-main">

		<?php 
		if ( have_posts() ) { 
			while ( have_posts() ) : the_post();
		?>
		<div class="blog-post">
			<h2 class="blog-post-title"><?php the_title(); ?></h2>
			<p class="blog-post-meta"><?php the_date(); ?> by <?php the_author(); ?></p>
			<?php the_content(); ?>
		</div><!-- /.blog-post -->
		<?php
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			endwhile;
		} 
		?>

	</div><!-- #primary -->
	
<?php
get_sidebar();
get_footer();