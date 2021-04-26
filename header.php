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

<header class="c-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if (function_exists('the_custom_logo')) {the_custom_logo();} ?>
                
            </div>
        </div>
    </div>
</header>