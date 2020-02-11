<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <?php wp_head(); ?>
    <!-- <link rel="stylesheet" href="http://localhost/datsaphotography/wp-content/themes/datsaphotography/public/css/style.css" type="text/css"> -->
    <!-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
</head>
<body <?php body_class(); ?>>
    <?php if (!is_page(['services', 'about', 'contacts'])): get_template_part( 'template-parts/content', 'nextgen-css' ); endif; ?>
    <header class="header-default">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 header-wrapper">
                    <div class="logo">
                        <?php if (get_theme_mod('logo_dark') !='') : ?>
                            <a href="<?php echo get_site_url() ?>">
                                <img src="<?php echo get_theme_mod('logo_dark') ?>" alt="datsaphotography">
                            </a>
                        <?php endif ?>
                    </div>
                    <div class="main-nav">
                        <input type="checkbox" class="mobile-icon">
                        <div class="nav-button">
                            <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                                <g>
                                    <line class="nav-icon__bar" x1="13" y1="16.5" x2="37" y2="16.5" />
                                    <line class="nav-icon__bar" x1="13" y1="24.5" x2="37" y2="24.5" />
                                    <line class="nav-icon__bar" x1="13" y1="24.5" x2="37" y2="24.5" />
                                    <line class="nav-icon__bar" x1="13" y1="32.5" x2="37" y2="32.5" />
                                    <circle class="nav-icon__circle" r="23" cx="25" cy="25" />
                                </g>
                            </svg>
                        </div>
                        <?php wp_nav_menu(array('theme_location' => 'main-menu', 'menu_class' => 'main-menu')) ?>
                    </div>
                </div>
            </div>
        </div>
    </header>