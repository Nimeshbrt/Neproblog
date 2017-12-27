<?php 
/**
 * The main template file
 * It puts together the home page if no home.php file exists.
 *
 * @package Simple Blog Theme
 */
 get_header(); ?>

<!-- all page or post content should be between the header and sidebar -->
 <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
<div class="post-preview">
<?php 
// Note: this loop is a simplified version of a loop published in a post at Elegant Themes
// Source: https://www.elegantthemes.com/blog/tips-tricks/converting-html-sites-to-wordpress-sites
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>    

        
            <a href="<?php the_permalink(); ?>">

              <div class="entry clear">
                   
                   <?php the_post_thumbnail( 'home-image' ); ?>

                  
              </div>
              <h2 class="post-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h2>
             <?php the_excerpt() ?>
            </a> 
       


            <p class="post-meta">Posted by <?php the_author_posts_link(); ?>, <?php the_time( 'M j y' ); ?></p>
    <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
                                
                              <?php else : ?>
                              <?php endif; ?>

         </div>
          <hr>
        
          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-primary float-right" href="#"><?php next_posts_link( '&larr; Older' ); ?>Older</a>
          </div>
        </div>
      </div>
    </div>


    

     
          

<?php get_sidebar(); ?>
<?php get_footer(); ?>