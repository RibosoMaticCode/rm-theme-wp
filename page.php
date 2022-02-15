<?php get_header() ?>

    <div class="post">
        <!-- PAGE ARTICLE FULL -->
        <div class="container">
            <div class="row">
                <div class="col-md-8">

                    <?php if ( have_posts() ) : 
                    // Do we have any posts/pages in the databse that match our query?
                    ?>

                        <?php while ( have_posts() ) : the_post(); 
                        // If we have a page to show, start a loop that will display it
                        ?>

                            <article class="page-full">
                                <div class="page-title">
                                    <h1><?php the_title(); // Display the title of the page ?></h1>
                                </div>
                                
                                <div class="post-content">
                                    <?php the_content(); 
                                    // This call the main content of the page, the stuff in the main text box while composing.
                                    // This will wrap everything in p tags
                                    ?>
                                    
                                    <?php wp_link_pages(); // This will display pagination links, if applicable to the page ?>
                                </div><!-- the-content -->
                                
                            </article>

                        <?php endwhile; // OK, let's stop the page loop once we've displayed it ?>

                    <?php else : // Well, if there are no posts to display and loop through, let's apologize to the reader (also your 404 error) ?>
                        
                        <article class="post error">
                            <h1 class="404">Nothing posted yet</h1>
                        </article>

                    <?php endif; // OK, I think that takes care of both scenarios (having a page or not having a page to show) ?>

                </div>
                <div class="col-md-4">
                    
                    <?php get_sidebar(); ?>
                    
                </div>
            </div>
        </div>
    </div>

<?php get_footer();
