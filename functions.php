<?php

/* Definiendo las ubicaciones de los menus de navegacion: principal, redes sociales */
function dokosite_setup() {
    register_nav_menus(
		array(
			'main_menu'    => __( 'Main Menu', 'dokosite' ),
			'social' => __( 'Social Links Menu', 'dokosite' ),
		)
	);
}
add_action( 'after_setup_theme', 'dokosite_setup' );

/* Definiendo ubicacion de los widgets: footers y sidebar */
function dokosite_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Footer 1', 'dokosite' ),
			'id'            => 'footer-1',
			'description'   => __( 'Add widgets here to appear in your footer.', 'dokosite' )
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer 2', 'dokosite' ),
			'id'            => 'footer-2',
			'description'   => __( 'Add widgets here to appear in your footer.', 'dokosite' )
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer 3', 'dokosite' ),
			'id'            => 'footer-3',
			'description'   => __( 'Add widgets here to appear in your footer.', 'dokosite' )
		)
	);

    register_sidebar(
		array(
			'name'          => __( 'Footer 4', 'dokosite' ),
			'id'            => 'footer-4',
			'description'   => __( 'Add widgets here to appear in your footer.', 'dokosite' )
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Sidebar 1', 'dokosite' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in sidebar #1.', 'dokosite' )
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Sidebar 2', 'dokosite' ),
			'id'            => 'sidebar-2',
			'description'   => __( 'Add widgets here to appear in sidebar #2.', 'dokosite' )
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Form suscription', 'dokosite' ),
			'id'            => 'suscription',
			'description'   => __( 'Add widgets here to appear in suscription.', 'dokosite' )
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Ads Google Automatic', 'dokosite' ),
			'id'            => 'ads-automatic',
			'description'   => __( 'Add google ads automatic.', 'dokosite' )
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Ads Google Post', 'dokosite' ),
			'id'            => 'ads-post',
			'description'   => __( 'Add google in post.', 'dokosite' )
		)
	);
}
add_action( 'widgets_init', 'dokosite_widgets_init' );

/* Retorna la url de la imagen de un post */
function get_url_image( $size = 'full') {
    global $post;
    $thumbID = get_post_thumbnail_id( $post->ID );
    $imgDestacada = wp_get_attachment_image_src( $thumbID, $size ); // Sustituir por thumbnail, medium, large o full
	if( $imgDestacada[0] == ""){
		return get_template_directory_uri()."/images/default.jpg";
	}else{		
		return $imgDestacada[0]; // 0 = ruta, 1 = altura, 2 = anchura, 3 = boolean
	}
}

/* Retorna la url de la categoria por su termino slug */
function get_url_category( $slug ){
	$array_data = get_category_by_slug( $slug );

	return get_category_link( $array_data->term_id );
}

function wp_head_init() {
	// Valores personalizados

	// Pagina actual para el front-page
	// Para que se muestre correctamente el numero de pagina, en el Dashboard -> Ajustes de lectura -> Pagina de inicio -> Ultimas entradas
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;


}
add_action( 'wp_head', 'wp_head_init' );

// Retornar lista de categorias

function first_cat($cats)
{
    return [$cats[0]];
}
add_filter('the_category_list', 'first_cat');

// Soporte para imagen destacada
add_theme_support( 'post-thumbnails' );