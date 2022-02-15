<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <title>
        <?php bloginfo('name'); // show the blog name, from settings ?> | 
        <?php is_front_page() ? bloginfo('description') : wp_title(''); // if we're on the home page, show the description, from the site's settings - otherwise, show the title of the post or page ?>
    </title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/colors.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
    
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    
<?php // We are loading our theme directory style.css by queuing scripts in our functions.php file, 
	// so if you want to load other stylesheets,
	// I would load them with an @import call in your style.css
?>

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); 
// This fxn allows plugins, and Wordpress itself, to insert themselves/scripts/css/files
// (right here) into the head of your website. 
// Removing this fxn call will disable all kinds of plugins and Wordpress default insertions. 
// Move it if you like, but I would keep it around.
?>
<?php if ( is_active_sidebar( 'ads-automatic' ) ) : ?>
    <?php dynamic_sidebar( 'ads-automatic' ); ?>
<?php endif ?>
<!-- GOOGLE -->
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9922276318589193"
     crossorigin="anonymous"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-911765-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-911765-1');
</script>
<!--/ GOOGLE -->
</head>
<body 
	<?php body_class(); 
	// This will display a class specific to whatever is being loaded by Wordpress
	// i.e. on a home page, it will return [class="home"]
	// on a single post, it will return [class="single postid-{ID}"]
	// and the list goes on. Look it up if you want more.
	?>
>
    <!-- HEADER -->
    <header class="header fixed">
        <div class="container">
            <div class="row">
                <div class="col-1 cont-btnmenu">
                    <a id="btnMenuShow" href="#">
                        <i class="fas fa-bars"></i>
                    </a>
                </div>
                <div class="col-10 col-md-2 cont-logo">
                    <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); // Link to the home page ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); // Title it with the blog name ?>" rel="home">
                        <img src="https://www.ribosomatic.com/wp-content/uploads/2017/10/logo-rm.png" alt="RibosoMatic diseño y desarrollo en html, css, javascript, php, mysql, node, python">
                    </a>
                </div>
                <div class="col-1 col-md-10 row">
                    <div class="col-md-11 block-menu">
                        <a id="btnMenuHide" class="btnMenuHide" href="#">
                            <i class="fas fa-times"></i>
                        </a>
                        <?php if ( has_nav_menu( 'social' ) ) : ?>
                            <div class="social">
                                <?php
                                    wp_nav_menu(
                                        array(
                                            'theme_location' => 'social',
                                            'menu_class'     => 'social',
                                            'depth'          => 1
                                        )
                                    );
                                ?>
                            </div><!-- .social-navigation -->
                        <?php endif; ?>
                        <?php if ( has_nav_menu( 'main_menu' ) ) : ?>
                            <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'main_menu',
                                    'menu_id'        => 'main_menu',
                                    'menu_class' => 'menu-nav'
                                )
                            );
                            ?>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-1">
                        <div class="container-search">
                            <a id="toggleFormSearch" href="#">
                                <i class="fas fa-search"></i>
                            </a>
                            <div id="form-search" class="form-search">
                            <?php get_search_form(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <?php if( !is_front_page() ): // Si no es front-page muestra el breadcrumbs ?>
        
    <section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                    <?php if(function_exists('bcn_display')) :

                        bcn_display();
                        
                    endif ?>
                </div>
            </div>
        </div>
    </div>
    </section>

    <?php endif ?>
    