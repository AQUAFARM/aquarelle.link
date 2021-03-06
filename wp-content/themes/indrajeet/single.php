<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Indrajeet
 */

get_header();

	$indrajeet_content_size = 12;

	if (  is_active_sidebar( 'Sidebar-1' ) &&   is_active_sidebar( 'Sidebar-2' ) ){
		$indrajeet_content_size = 6;
	} elseif ( ! is_active_sidebar( 'Sidebar-1' ) &&   is_active_sidebar( 'Sidebar-2' ) || is_active_sidebar( 'Sidebar-1' ) &&   ! is_active_sidebar( 'Sidebar-2' ) ) {
		$indrajeet_content_size = 8;
	}

?>
	<div class="container">
		<div class="row">
			<?php get_sidebar('left'); ?>
			<div id="primary" class="content-area col-md-<?php echo esc_attr( $indrajeet_content_size ); ?>">
				<main id="main" class="site-main">
				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', get_post_type() );

					the_post_navigation();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

				</main><!-- #main -->
			</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
