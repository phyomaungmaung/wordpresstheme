<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package PMM
 */

get_header();
?>

	<main id="primary" class="site-main text-slate-900 h-screen">

		<?php
		if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                /* * See if the current post is in category 3.
                  * If it is, the div is given the CSS class "post-category-three".
                  * Otherwise, the div is given the CSS class "post".
                */
                if ( in_category( 3 ) ) : ?>
                <div class="post-category-three">
                <?php else : ?>
                <div class="post">
                <?php endif; 
        
                    // Display the post's title.
                    the_title( '<h2>', ';</h2>' ); 
        
                    // Display a link to other posts by this posts author.
                    printf( __( 'Posted by %s', 'textdomain' ), get_the_author_posts_link() );
        
                    // Display the post's content in a div.
                    ?>
                    <div class="entry">
                        <?php the_content() ?>
                     </div>
        
                    <?php
                    // Display a comma separated list of the post's categories.
                    _e( 'Posted in ', 'textdomain' ); the_category( ', ' ); 
        
                // closes the first div box with the class of "post" or "post-cat-three"
               ?>
               </div>
        
            <?php
            // Stop the Loop, but allow for a "if not posts" situation
            endwhile; 
        
        else :
            /*
              * The very first "if" tested to see if there were any posts to
              * display. This "else" part tells what do if there weren't any.
             */
             _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
        
        // Completely stop the Loop.
         endif;
		?>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
