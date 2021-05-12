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
 
<header class="m-header">
    <div class="container-fluid d-bg-gray-super-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="c-navbar --main">
                        <?php wp_nav_menu( array( 
                            'theme_location' => 'primary_menu', 
                            ) ); 
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="c-container-fluid d-bg-gray-light">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                
                <!-- Logo primary and secundary -->
                <?php if (is_page_template( 'page-educacional.php' ) && (function_exists( 'the_custom_logo'))): ?>
                <?php the_custom_logo(); ?>
                <?php else: ?>
                <?php the_custom_logo(); ?>
                <?php endif ?>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul> -->
                <?php wp_nav_menu( array( 
                        'theme_location' => 'secundary_menu', 
                        ) ); 
                    ?>
                <a class="e-btn --brand-color-two" title="Fale com um consultor" href="#">Fale com um consultor</a>
            </nav>
        </div>
    </div>
</header>