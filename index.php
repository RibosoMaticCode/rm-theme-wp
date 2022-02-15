<?php get_header(); ?>

    <!-- RECENTS POSTS -->
    <section class="section">
        <div class="container">
            <div class="row">
                <!-- left block -->
                <div class="col-md-8">
                    <div class="posts-last">

                        <?php if ( is_category() || is_tag() || is_tax() ): // Category details ?>
                            
                            <div class="header-section">
                                <h2><?= single_term_title() ?></h2>
                                <p><?= term_description() ?></p>
                            </div>
                    
                        <?php endif; ?>
                        
                        <?php if ( have_posts() ) : 
                        // Do we have any posts in the databse that match our query?
                        // In the case of the home page, this will call for the most recent posts 
                        ?>

                            <?php while ( have_posts() ) : the_post(); 
                            // If we have some posts to show, start a loop that will display each one the same way
                            ?>
                            
                                <div class="post-item">
                                    <div class="post-img" style="background-image: url(<?= get_url_image() ?>);">
                                    </div>
                                    <div class="post-detail">
                                        <h2 class="post-title">
                                            <a href="<?= get_permalink() ?>"><?php the_title() ?></a>
                                        </h2>
                                        <div class="post-excerpt">
                                            <?php the_excerpt() ?>
                                        </div>
                                        <div class="post-tags">
                                            <div class="tags"><?php echo get_the_tag_list(); // Display the tags this post has, as links separated by spaces and pipes ?></div>
                                        </div><!-- Meta -->
                                    </div>
                                </div>

                            <?php endwhile; // OK, let's stop the posts loop once we've exhausted our query/number of posts ?>
                            
                            <!-- pagintation -->
                            <div id="pagination" class="clearfix">
                                <div class="past-page"><?php previous_posts_link( 'newer' ); // Display a link to  newer posts, if there are any, with the text 'newer' ?></div>
                                <div class="next-page"><?php next_posts_link( 'older' ); // Display a link to  older posts, if there are any, with the text 'older' ?></div>
                            </div><!-- pagination -->


                        <?php else : // Well, if there are no posts to display and loop through, let's apologize to the reader (also your 404 error) ?>
                            
                            <article class="post error">
                                <h1 class="404">Nothing has been posted like that yet</h1>
                            </article>

                        <?php endif; // OK, I think that takes care of both scenarios (having posts or not having any posts) ?>
                    </div>
                </div>
                <!-- right block -->
                <div class="col-md-4">
                    
                    <?php get_sidebar(); ?>

                </div>
            </div>
        </div>
    </section>
    
<?php get_footer(); ?>
