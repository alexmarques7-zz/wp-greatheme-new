<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico">

  <?php wp_head(); ?>
</head>

<body <?php body_class(''); ?>>
 
<header class="m-header d-select-none">
    <div class="container-fluid d-bg-gray-super-light py-2">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex flex-column justify-content-center flex-lg-row align-items-lg-center justify-content-lg-between">
                    <div class="c-navbar --main mb-3 mb-lg-0">
                        <?php wp_nav_menu( array( 
                            'theme_location' => 'primary_menu', 
                            ) ); 
                        ?>
                    </div>
                    <a class="e-btn --small --brand-color-two mb-3 mb-lg-0" title="Fale com um consultor" href="#">Fale com um consultor</a>
                </div>
            </div>
        </div>
    </div>

    <div class="c-container-fluid pt-4 d-bg-gray-light">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                
                <!-- Logo primary and secondary -->
                <?php if (is_page_template( 'page-educacional.php' ) && (function_exists( 'the_custom_logo'))): ?>
                    <?php the_custom_logo(); ?>
                <?php else: ?>
                    <img src="<?php echo get_theme_mod( 'secondary_logo' ); ?>" alt="Logo Aulapp Corporativo">
                <?php endif ?>
                
                <div class="collapse navbar-collapse justify-content-end" id="main-menu">
                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'secondary_menu',
                            'container' => false,
                            'menu_class' => 'c-navbar --secondary',
                            'fallback_cb' => '__return_false',
                            'items_wrap' => '<ul id="%1$s" class="navbar-nav mb-2 mb-md-0 %2$s">%3$s</ul>',
                            'depth' => 2,
                            'walker' => new bootstrap_5_wp_nav_menu_walker()
                        ));
                    ?>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
        </div>
    </div>
</header>