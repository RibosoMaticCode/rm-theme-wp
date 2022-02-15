<aside class="sidebar">
    
    <?php
    // Para widgets en general
    ?>

    <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <div class="block">
            <?php dynamic_sidebar( 'sidebar-1' ); ?>
        </div>
    <?php endif ?>

    <?php if( is_single() ): //Si es post single / publicacion, mostrar ultimos publicaciones ?>

        <?php
        $posts = new WP_Query( [
            'posts_per_page' => 3
        ]);

        $title_box = "Últimas publicaciones";
        ?>

    <?php else: //Si es front-page, categoria, pagina, mostrar populares?>

        <?php
        $posts = new WP_Query( [
            'meta_key' => 'post_views_count',
            'orderby' => 'meta_value_num',
            'posts_per_page' => 3
        ]);
        
        $title_box = "Los más leídos";

        ?>

    <?php endif; ?>

    <?php if ( $posts -> have_posts() ) : ?>
    
            <div class="block block-popular-list">
                <h2 class="block-title"><?= $title_box ?></h2>
                    
                <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
    
                    <div class="post-item">
                        <div class="post-img" style="background-image: url(<?= get_url_image() ?>);">
                        </div>
                        <div class="post-detail">
                            <h2 class="post-title">
                                <a href="<?= get_permalink() ?>"><?php the_title() ?></a>
                            </h2>
                        </div>
                    </div>
    
                <?php endwhile; ?>
    
            </div>
    <?php endif; ?>

    <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
        <div class="block">
            <?php dynamic_sidebar( 'sidebar-2' ); ?>
        </div>
    <?php endif ?>

</aside>