<?php
get_header(); ?>

    <!-- 404 -->
    <section class="section">
        <div class="container">
            <div class="row mb-5">

                <div class="col-md-3"></div>
                <div class="col-md-6">

                    <h1 class="page-title text-center"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentyseventeen' ); ?></h1>

					<p class="text-center"><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentyseventeen' ); ?></p>
					<?php get_search_form(); ?>

				</div>
                <div class="col-md-3"></div>

	        </div>
        </div>
    </section>
<?php
get_footer();
