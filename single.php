<?php get_header() ?>
    <div class="post">
        <!-- POST ARTICLE FULL -->
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php if ( have_posts() ) : 
                    // Do we have any posts in the databse that match our query?
                    ?>

                        <?php while ( have_posts() ) : the_post(); 
                        // If we have a post to show, start a loop that will display it
                        ?>

                            <article class="post-full">
                                
                                <div class="post-header">
                                    <div class="post-img" style="background-image: url(<?= get_url_image() ?>);">
                                    </div>
                                    <div class="post-title">
                                        <h1 class="title"><?php the_title(); // Display the title of the post ?></h1>
                                    </div>
                                </div>
                                <?php if ( is_active_sidebar( 'ads-post' ) ) : ?>
                                    <div class="ads-block">
                                        <?php dynamic_sidebar( 'ads-post' ); ?>
                                    </div>
                                <?php endif ?>
                                <div class="post-content">
                                    <?php the_content(); 
                                    // This call the main content of the post, the stuff in the main text box while composing.
                                    // This will wrap everything in p tags
                                    ?>
                                    
                                    <?php wp_link_pages(); // This will display pagination links, if applicable to the post ?>
                                </div><!-- the-content -->
                                
                                <div class="post-tags">
                                    <div class="tags"><?php echo get_the_tag_list(); // Display the tags this post has, as links separated by spaces and pipes ?></div>
                                </div><!-- Meta -->
                                
                            </article>

                        <?php endwhile; // OK, let's stop the post loop once we've displayed it ?>
                        
                        <?php
                            // If comments are open or we have at least one comment, load up the default comment template provided by Wordpress
                            if ( comments_open() || '0' != get_comments_number() )
                                comments_template( '', true );
                        ?>


                    <?php else : // Well, if there are no posts to display and loop through, let's apologize to the reader (also your 404 error) ?>
                        
                        <article class="post error">
                            <h1 class="404">Nothing has been posted like that yet</h1>
                        </article>

                    <?php endif; // OK, I think that takes care of both scenarios (having a post or not having a post to show) ?>
                </div>
                <div class="col-md-4">
                    
                    <?php get_sidebar(); ?>
                    
                </div>
            </div>
        </div>
    </div>

<?php get_footer();