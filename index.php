<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<?php if ( have_posts() ) : ?>


			<?php
			// Start the loop.
			while ( have_posts() ) : the_post(); ?>			
				<h1><?php the_title(); ?></h1> <!-- comentariu html get the title preia titlul articolului dar nu il afiseaza -> pui doar the_title ca sa afiseze -->
				<?php the_content(); ?>


<?php
				echo '<hr>'; //horizontal line

//comentariu php - diferenta dintr comm de html si php este ca pe cel de html se vede ce comentariu ai pus in source page (not ok)

//<!-- Ctrl shift D copiaza randul -->
//CTRL shhift sageata sus/jos - iti duce linia de cod mai sus/jos


				
				// End the loop.
			endwhile;

			// If no content, include the "No posts found" template.
		else :
			

		endif;
?>


<?php get_footer(); ?>
