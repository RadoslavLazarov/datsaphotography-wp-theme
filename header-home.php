<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <?php wp_head(); ?>
    <!-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
</head>
<body <?php body_class(); ?>>
    <?php if (!is_page(['services', 'about', 'contacts'])): get_template_part( 'template-parts/content', 'nextgen-css' ); endif; ?>
    <header class="header-home">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 header-wrapper">
                    <div class="logo">
                        <?php if (get_theme_mod('logo_light') !='') : ?>
                            <a href="<?php echo get_site_url() ?>">
                                <img src="<?php echo get_theme_mod('logo_light') ?>" alt="datsaphotography">
                            </a>
                        <?php endif ?>
                    </div>
                    <div class="main-nav">
                        <?php wp_nav_menu(array('theme_location' => 'main-menu', 'menu_class' => 'main-menu')) ?>
                    </div>
                </div>
            </div>
        </div>
    </header>
